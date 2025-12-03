let currentPage = 1;
let totalPages = 1;

function loadSlide(page) {
    $.ajax({
        url: 'slideseducadores',
        method: 'GET',
        data: { page: page },
        dataType: 'json',
        success: function (response) {
            currentPage = response.page;
            totalPages = response.total;

            const slideContent = document.querySelector('.esi-slide-content');
            slideContent.innerHTML = response.content;

            const indicator = document.getElementById('esi-page-indicator');
            if (indicator) {
                indicator.textContent = `Página ${currentPage} / ${totalPages}`;
            }
        }
    });
}

function goNext() {
    if (currentPage < totalPages) {
        loadSlide(currentPage + 1);
    }
}

function goPrev() {
    if (currentPage > 1) {
        loadSlide(currentPage - 1);
    }
}

document.addEventListener('DOMContentLoaded', function () {
    loadSlide(1);

    const leftZone = document.querySelector('.esi-left-zone');
    const rightZone = document.querySelector('.esi-right-zone');

    if (leftZone) {
        leftZone.addEventListener('click', function () {
            goPrev();
        });
    }

    if (rightZone) {
        rightZone.addEventListener('click', function () {
            goNext();
        });
    }
});