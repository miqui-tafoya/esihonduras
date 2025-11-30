const coordScript = document.getElementById('entradas-data');
const itemsPerPage = 4;
let currentPage = 1;
let blogEntries = [];
blogEntries = JSON.parse(coordScript.textContent);

function renderPage(page) {
    const container = document.getElementById('blog-container');
    if (blogEntries.length === 0) {
        container.innerHTML = '<p>No existen coincidencias para esta búsqueda</p>';
        return;
    }
    const start = (page - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    const pageEntries = blogEntries.slice(start, end);
    container.innerHTML = '';

    pageEntries.forEach(entry => {
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

    renderPagination();
}

function renderPagination() {
    const totalPages = Math.ceil(blogEntries.length / itemsPerPage);
    const pagination = document.getElementById('pagination');
    pagination.innerHTML = '';

    const prevBtn = document.createElement('button');
    prevBtn.textContent = '← Anterior';
    prevBtn.disabled = currentPage === 1;
    prevBtn.onclick = () => {
        if (currentPage > 1) {
            currentPage--;
            renderPage(currentPage);
        }
    };
    pagination.appendChild(prevBtn);

    for (let i = 1; i <= totalPages; i++) {
        const pageBtn = document.createElement('button');
        pageBtn.textContent = i;
        pageBtn.className = i === currentPage ? 'active' : '';
        pageBtn.onclick = () => {
            currentPage = i;
            renderPage(currentPage);
        };
        pagination.appendChild(pageBtn);
    }

    const nextBtn = document.createElement('button');
    nextBtn.textContent = 'Siguiente →';
    nextBtn.disabled = currentPage === totalPages;
    nextBtn.onclick = () => {
        if (currentPage < totalPages) {
            currentPage++;
            renderPage(currentPage);
        }
    };
    pagination.appendChild(nextBtn);
}
function truncate(str, maxLength = 120) {
    return str.length > maxLength ? str.substring(0, maxLength) + '...' : str;
}
document.addEventListener('DOMContentLoaded', () => {
    renderPage(1);
})