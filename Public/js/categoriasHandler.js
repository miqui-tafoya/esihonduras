const itemsPerPage = 4;
let currentPage = 1;
let totalPages = 1;
async function loadPage(page = 1) {
    const container = document.getElementById('blog-container');

    try {
        const resp = await fetch(`${URL_BASE}apicategorias?categoria=${categoria}&page=${page}&per_page=${itemsPerPage}`, {
            headers: {
                'Accept': 'application/json'
            }
        });

        if (!resp.ok) {
            throw new Error(`Error HTTP: ${resp.status}`);
        }

        const data = await resp.json();
        const entries = data.entries || [];

        totalPages = data.totalPages || 1;
        currentPage = data.page || page;

        renderEntries(container, entries);

        renderPagination();
    } catch (error) {
        console.error(error);
        container.innerHTML = '<p>Ocurrió un error al cargar las noticias.</p>';
    }
}

function renderEntries(container, entries) {
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
                        <a href="${URL_BASE}entrada/${entry.tb_entradas_id}">
                            Ir a contenido <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                    </div>
                </div>
            </div>
        `;
        container.appendChild(article);
    });
}

function renderPagination() {
    const pagination = document.getElementById('pagination');
    pagination.innerHTML = '';

    if (totalPages <= 1) {
        return;
    }

    const prevBtn = document.createElement('button');
    prevBtn.textContent = '← Anterior';
    prevBtn.disabled = currentPage === 1;
    prevBtn.onclick = () => {
        if (currentPage > 1) {
            loadPage(currentPage - 1);
        }
    };
    pagination.appendChild(prevBtn);

    for (let i = 1; i <= totalPages; i++) {
        const pageBtn = document.createElement('button');
        pageBtn.textContent = i;
        pageBtn.className = i === currentPage ? 'active' : '';
        pageBtn.onclick = () => loadPage(i);
        pagination.appendChild(pageBtn);
    }

    const nextBtn = document.createElement('button');
    nextBtn.textContent = 'Siguiente →';
    nextBtn.disabled = currentPage === totalPages;
    nextBtn.onclick = () => {
        if (currentPage < totalPages) {
            loadPage(currentPage + 1);
        }
    };
    pagination.appendChild(nextBtn);
}

function truncate(str, maxLength = 120) {
    if (!str) return '';
    return str.length > maxLength ? str.substring(0, maxLength) + '...' : str;
}

document.addEventListener('DOMContentLoaded', () => {
    loadPage(1);
});