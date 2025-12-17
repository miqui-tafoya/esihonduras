import { Plugin, ButtonView } from 'ckeditor5';

export default class ExploradorPlugin extends Plugin {
    init() {
        const editor = this.editor;

        // Registrar el botón en la UI
        editor.ui.componentFactory.add('customDialog', locale => {
            const view = new ButtonView(locale);

            view.set({
                label: 'Explorador de Medios',
                icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free v5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M480 416v16c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V176c0-26.51 21.49-48 48-48h16v48H54a6 6 0 0 0-6 6v244a6 6 0 0 0 6 6h372a6 6 0 0 0 6-6v-10h48zm42-336H150a6 6 0 0 0-6 6v244a6 6 0 0 0 6 6h372a6 6 0 0 0 6-6V86a6 6 0 0 0-6-6zm6-48c26.51 0 48 21.49 48 48v256c0 26.51-21.49 48-48 48H144c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48h384zM264 144c0 22.091-17.909 40-40 40s-40-17.909-40-40 17.909-40 40-40 40 17.909 40 40zm-72 96l39.515-39.515c4.686-4.686 12.284-4.686 16.971 0L288 240l103.515-103.515c4.686-4.686 12.284-4.686 16.971 0L480 208v80H192v-48z"/></svg>',
                tooltip: true
            });

            // Acción al hacer clic
            view.on('execute', () => {
                this._showDialog();
            });

            return view;
        });
    }

    _showDialog() {
        const editor = this.editor;
        let currentPage = 1;

        // Crear el overlay
        const overlay = document.createElement('div');
        overlay.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        `;

        // Crear la ventana emergente
        const dialog = document.createElement('div');
        dialog.style.cssText = `
            background: white;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            width: 90%;
            max-width: 1200px;
            max-height: 85vh;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        `;

        dialog.innerHTML = `
            <div id="modal_header">
                <p style="margin: 0;"><i class="far fa-images"></i> Explorador de Medios</p>
            </div>
            <div id="modal_body" style="
                flex: 1;
                display: flex;
                flex-direction: column;
                padding: 20px 30px;
                overflow-y: auto;
            ">
                <div class="pagination-container" style="
                    margin-bottom: 15px;
                    display: flex;
                    justify-content: center;
                    gap: 10px;
                "></div>
                <div id="ventana_medios" class="popup_medios" style="
                    flex: 1;
                    overflow-y: auto;
                ">
                    <div class="images-container" style="
                        display: grid;
                        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                        gap: 20px;
                    "></div>
                </div>
            </div>
            <div id="modal_buttons" style="
                border-top: 1px solid #ddd;
            ">
                <div id="btnCerrar" class="button_modal aceptar">Cerrar</div>
            </div>
        `;

        overlay.appendChild(dialog);
        document.body.appendChild(overlay);

        // Función para cargar medios
        const loadMedios = (page) => {
            $.ajax({
                url: exploradormedios,
                type: 'POST',
                data: {
                    action: 'getMedios',
                    page: page
                },
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        displayImages(response.data);
                        updatePagination(response.totalPages, page);
                    }
                },
                error: function () {
                    console.log('Error al cargar las imágenes');
                }
            });
        };

        // Función para mostrar imágenes
        const displayImages = (images) => {
            let html = '';
            images.forEach(function (image) {
                html += `<div class="image-item-container" style="
                        display: flex;
                        flex-direction: column;
                        border: 1px solid #ddd;
                        border-radius: 4px;
                        overflow: hidden;
                        transition: transform 0.2s;
                    " onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
                        <div class="image-item" style="
                            width: 100%;
                            height: 150px;
                            overflow: hidden;
                            background: #f5f5f5;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            cursor: pointer;
                        " data-url="${URL_PUBLIC}recursos/entradas/${image.url}">
                            <img src="${URL_PUBLIC}recursos/entradas/${image.url}" alt="Imagen" style="
                                max-width: 100%;
                                max-height: 100%;
                                object-fit: contain;
                            ">
                        </div>
                    </div>`;
            });
            dialog.querySelector('#ventana_medios .images-container').innerHTML = html;

            // Agregar evento de clic para insertar imagen en el editor
            dialog.querySelectorAll('.image-item').forEach(item => {
                item.addEventListener('click', function () {
                    const imageUrl = this.getAttribute('data-url');
                    insertImageInEditor(imageUrl);
                });
            });
        };

        // Función para actualizar paginación
        const updatePagination = (totalPages, currentPageNum) => {
            const paginationContainer = dialog.querySelector('.pagination-container');
            let html = '';

            if (totalPages > 1) {
                html += `
			<div style="display: flex; align-items: center; gap: 10px;">
				<button class="page-btn-prev" ${currentPageNum === 1 ? 'disabled' : ''} style="
					padding: 8px 12px;
					border: 1px solid #ddd;
					background: ${currentPageNum === 1 ? '#f5f5f5' : 'white'};
					cursor: ${currentPageNum === 1 ? 'not-allowed' : 'pointer'};
					border-radius: 4px;
					opacity: ${currentPageNum === 1 ? '0.5' : '1'};
				">
					<i class="fas fa-chevron-left"></i> Anterior
				</button>
				
				<div style="display: flex; align-items: center; gap: 8px;">
					<span style="font-size: 14px; color: #666;">Página:</span>
					<select class="page-dropdown" style="
						padding: 8px 30px 8px 12px;
						border: 1px solid #ddd;
						border-radius: 4px;
						background: white;
						cursor: pointer;
						font-size: 14px;
						outline: none;
						appearance: none;
						background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27currentColor%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e');
						background-repeat: no-repeat;
						background-position: right 8px center;
						background-size: 16px;
					">`;

                // Generar opciones del dropdown
                for (let i = 1; i <= totalPages; i++) {
                    html += `<option value="${i}" ${i === currentPageNum ? 'selected' : ''}>
				${i} de ${totalPages}
			</option>`;
                }

                html += `
					</select>
				</div>
				
				<button class="page-btn-next" ${currentPageNum === totalPages ? 'disabled' : ''} style="
					padding: 8px 12px;
					border: 1px solid #ddd;
					background: ${currentPageNum === totalPages ? '#f5f5f5' : 'white'};
					cursor: ${currentPageNum === totalPages ? 'not-allowed' : 'pointer'};
					border-radius: 4px;
					opacity: ${currentPageNum === totalPages ? '0.5' : '1'};
				">
					Siguiente <i class="fas fa-chevron-right"></i>
				</button>
			</div>
		`;
            }

            paginationContainer.innerHTML = html;

            // Agregar evento al dropdown
            const dropdown = dialog.querySelector('.page-dropdown');
            if (dropdown) {
                dropdown.addEventListener('change', function () {
                    const page = parseInt(this.value);
                    currentPage = page;
                    loadMedios(page);
                });
            }

            // Agregar evento al botón anterior
            const btnPrev = dialog.querySelector('.page-btn-prev');
            if (btnPrev && currentPageNum > 1) {
                btnPrev.addEventListener('click', function () {
                    currentPage = currentPageNum - 1;
                    loadMedios(currentPage);
                });
            }

            // Agregar evento al botón siguiente
            const btnNext = dialog.querySelector('.page-btn-next');
            if (btnNext && currentPageNum < totalPages) {
                btnNext.addEventListener('click', function () {
                    currentPage = currentPageNum + 1;
                    loadMedios(currentPage);
                });
            }
        };

        // Función para insertar imagen en el editor
        const insertImageInEditor = (imageUrl) => {
            editor.model.change(writer => {
                const imageElement = writer.createElement('imageBlock', {
                    src: imageUrl
                });
                editor.model.insertContent(imageElement, editor.model.document.selection);
            });
            // Cerrar el modal después de insertar
            document.body.removeChild(overlay);
        };

        // Manejar botón cerrar
        const btnCerrar = dialog.querySelector('#btnCerrar');
        btnCerrar.addEventListener('click', () => {
            document.body.removeChild(overlay);
        });

        // Cerrar al hacer clic fuera del diálogo
        overlay.addEventListener('click', (e) => {
            if (e.target === overlay) {
                document.body.removeChild(overlay);
            }
        });

        // Cargar la primera página de medios
        loadMedios(currentPage);
    }
}