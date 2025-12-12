const itemsPerPage = 4;
let currentPage = 1;

function getParamsFromForm() {
    const form = document.getElementById('form-busqueda');

    const inputBusca = form.querySelector('input[name="busca"]');
    const busca = inputBusca ? inputBusca.value.trim() : '';

    const filtros = {};
    const checkboxes = form.querySelectorAll('input[type="checkbox"]:checked');

    checkboxes.forEach(checkbox => {
        filtros[checkbox.name] = checkbox.value;
    });

    return { busca, filtros };
}

async function fetchEntries(params = {}) {
    const formData = new FormData();

    if (params.busca) {
        formData.append('busca', params.busca);
    }

    if (params.filtros && Object.keys(params.filtros).length > 0) {
        for (const [key, value] of Object.entries(params.filtros)) {
            formData.append(key, value);
        }
    }

    formData.append('page', params.page || 1);
    formData.append('itemsPerPage', itemsPerPage);

    try {
        const response = await fetch(`${URL_BASE}apiinfopublica`, {
            method: 'POST',
            body: formData
        });

        if (!response.ok) {
            throw new Error(`Error HTTP: ${response.status}`);
        }

        const json = await response.json();
        return json;
    } catch (error) {
        throw error;
    }
}

function renderEntries(entries) {
    const container = document.getElementById('blog-container');
    container.innerHTML = '';

    if (!entries || entries.length === 0) {
        container.innerHTML = '<p>No existen coincidencias para esta búsqueda</p>';
        return;
    }

    entries.forEach(entry => {
        const article = document.createElement('article');
        article.innerHTML = `
            <div class="item-perfiles-quienes">
                <div class="img-item-quienes">
                    <img src="${URL_PUBLIC}recursos/entradas/${entry.portada}" alt="">
                </div>
                <div class="info-item-quienes">
                    <p class="titulo-item-quienes">${entry.entradas_titulo}</p>
                    <p>${truncate(entry.cuerpo, 120)}</p>
                    <div class="btn-perfiles">
                        <a href="${URL_BASE}entrada/${entry.tb_entradas_id}">Ir a contenido <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        `;
        container.appendChild(article);
    });
}

function renderPagination(total) {
    const totalPages = Math.ceil(total / itemsPerPage);
    const pagination = document.getElementById('pagination');
    pagination.innerHTML = '';

    if (totalPages <= 1) return;

    const prevBtn = document.createElement('button');
    prevBtn.textContent = '← Anterior';
    prevBtn.disabled = currentPage === 1;
    prevBtn.onclick = () => {
        if (currentPage > 1) {
            currentPage--;
            loadPage(currentPage);
        }
    };
    pagination.appendChild(prevBtn);

    for (let i = 1; i <= totalPages; i++) {
        const pageBtn = document.createElement('button');
        pageBtn.textContent = i;
        pageBtn.className = i === currentPage ? 'active' : '';
        pageBtn.onclick = () => {
            currentPage = i;
            loadPage(currentPage);
        };
        pagination.appendChild(pageBtn);
    }

    const nextBtn = document.createElement('button');
    nextBtn.textContent = 'Siguiente →';
    nextBtn.disabled = currentPage === totalPages;
    nextBtn.onclick = () => {
        if (currentPage < totalPages) {
            currentPage++;
            loadPage(currentPage);
        }
    };
    pagination.appendChild(nextBtn);
}

async function loadPage(page = 1) {
    try {
        const formParams = getParamsFromForm();

        const tieneBusqueda = formParams.busca && formParams.busca.length > 0;
        const tieneFiltros = Object.keys(formParams.filtros).length > 0;

        if (!tieneBusqueda && !tieneFiltros) {
            const container = document.getElementById('blog-container');
            container.innerHTML = '<p>No has ingresado una búsqueda. Por favor, escribe algo o selecciona un filtro.</p>';

            const pagination = document.getElementById('pagination');
            pagination.innerHTML = '';

            return;
        }

        const params = {
            ...formParams,
            page: page
        };

        const result = await fetchEntries(params);
        currentPage = result.page;

        renderEntries(result.data);
        renderPagination(result.total);

    } catch (error) {
        const container = document.getElementById('blog-container');
        container.innerHTML = '<p>Ocurrió un error al cargar las entradas. Por favor, intenta de nuevo.</p>';
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('form-busqueda');

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const params = getParamsFromForm();
        currentPage = 1;
        loadPage(1);
    });

    loadPage(1);
});

function truncate(str, maxLength = 120) {
    if (!str) return '';
    return str.length > maxLength ? str.substring(0, maxLength) + '...' : str;
}