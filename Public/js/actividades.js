let currentActivityIndex = 1;
let totalActivities = 1;
let currentSlidePage = 1;
let totalSlides = 1;
let currentActivityData = null;
let activityKeys = [];

const ACTIVITY_TITLES = {
    'quiz-1': 'Quiz: Comunicación con Madres y Padres',
    'accordion-1': 'Aspectos biológicos de la sexualidad',
    'slides-1': 'Menstruación',
    'quiz-2': 'Quiz: Aspectos biológicos',
    'slides-2': 'Alternativas para ejercer la sexualidad',
};

function loadActivity(index) {
    $.ajax({
        url: 'slidespadres',
        method: 'GET',
        data: { index: index },
        dataType: 'json',
        success: function (response) {
            currentActivityIndex = response.index;
            totalActivities = response.total_activities;
            currentActivityData = response;
            activityKeys = response.activity_keys || activityKeys;

            renderActivity(response);
            renderActivityList();
        },
        // error: function () {
        //     alert('Error al cargar la actividad.');
        // }
    });
}

function renderActivity(activity) {
    const container = document.getElementById('actividad-container');
    if (!container) return;

    const type = activity.type;
    container.innerHTML = '';

    if (type === 'quiz') {
        renderQuizActivity(container, activity);
    } else if (type === 'accordion') {
        renderAccordionActivity(container, activity);
    } else if (type === 'slides') {
        renderSlidesActivity(container, activity);
    }

    const btnContinuar = document.getElementById('btn-continuar-actividad');
    if (btnContinuar) {
        if (type === 'accordion') {
            btnContinuar.style.display = 'inline-block';
        } else {
            btnContinuar.style.display = 'none';
        }
    }
}

function goNextActivity() {
    if (currentActivityIndex < totalActivities) {
        loadActivity(currentActivityIndex + 1);
    } else {
        alert('Has terminado todas las actividades.');
    }
}

// RENDER QUIZ
function renderQuizActivity(container, activity) {
    const questions = activity.data || {};

    let html = '<div class="quiz-activity"><form id="quiz-form">';

    Object.keys(questions).forEach(function (key) {
        const q = questions[key];
        const questionId = `q-${activity.key}-${key}`;

        html += `
            <div class="quiz-question" data-idx="${key}">
                <div class="quiz-question-text">${q.q}</div>
                <div class="quiz-options">
                    <label>
                        <input type="radio" name="${questionId}" value="true" required> Verdadero
                    </label>
                    <label>
                        <input type="radio" name="${questionId}" value="false" required> Falso
                    </label>
                </div>
                <div class="quiz-feedback" id="feedback-${questionId}" style="display:none;">
                    ${q.c}
                </div>
            </div>
        `;
    });

    html += `
        <button type="button" id="btn-enviar-quiz">Enviar Respuestas</button>
        <button type="button" id="btn-continuar-quiz" style="display:none;">Continuar</button>
    </form></div>`;

    container.innerHTML = html;

    const btnEnviar = document.getElementById('btn-enviar-quiz');
    if (btnEnviar) {
        btnEnviar.addEventListener('click', function () {
            mostrarRespuestasQuiz(activity);
        });
    }

    const btnContinuarQuiz = document.getElementById('btn-continuar-quiz');
    if (btnContinuarQuiz) {
        btnContinuarQuiz.addEventListener('click', function () {
            goNextActivity();
        });
    }
}

function mostrarRespuestasQuiz(activity) {
    const questions = activity.data || {};
    let allAnswered = true;

    Object.keys(questions).forEach(function (key) {
        const questionId = `q-${activity.key}-${key}`;
        const radios = document.querySelectorAll(`input[name="${questionId}"]`);
        let selected = null;

        radios.forEach(r => {
            if (r.checked) selected = r.value;
        });

        if (selected === null) {
            allAnswered = false;
        }
    });

    if (!allAnswered) {
        alert('Responde a todas las preguntas antes de enviar.');
        return;
    }

    Object.keys(questions).forEach(function (key) {
        const questionId = `q-${activity.key}-${key}`;
        const feedbackEl = document.getElementById(`feedback-${questionId}`);

        if (feedbackEl) {
            feedbackEl.style.display = 'block';
        }
    });

    const btnEnviar = document.getElementById('btn-enviar-quiz');
    const btnContinuar = document.getElementById('btn-continuar-quiz');

    if (btnEnviar) btnEnviar.style.display = 'none';
    if (btnContinuar) btnContinuar.style.display = 'inline-block';
}

// RENDER ACCORDION
function renderAccordionActivity(container, activity) {
    const items = activity.data || {};

    let html = '<div class="accordion-activity"><div class="lista-faq">';

    Object.keys(items).forEach(function (key) {
        const content = items[key];

        if (key.startsWith('data-')) {
            html += `${content.replace(/\n/g, '<br>')}`;
        } else {
            html += `
                <div class="p-bottom">
                    <button class="accordion">${key}</button>
                    <div class="panel">
                        <p>${content.replace(/\n/g, '<br>')}</p>
                    </div>
                </div>
            `;
        }
    });

    html += '</div></div>';

    container.innerHTML = html;

    initAccordion();
}

function initAccordion() {
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
}

// RENDER SLIDES
function renderSlidesActivity(container, activity) {
    const html = `
        <div id="esi-presentation">
            <div id="esi-slide">
                <div class="esi-slide-overlay esi-left-zone" id="esi-slide-prev"></div>
                <div class="esi-slide-overlay esi-right-zone" id="esi-slide-next"></div>
                <div id="esi-slides">
                </div>
            </div>
            <div id="esi-controls">
                <span id="esi-page-indicator"></span>
            </div>
            <button type="button" id="btn-continuar-slides" style="display:none;">Continuar</button>
        </div>
    `;

    container.innerHTML = html;

    currentSlidePage = 0;
    totalSlides = Object.keys(activity.data).length;

    const slidesContainer = document.getElementById('esi-slides');
    Object.keys(activity.data).forEach(function (key, index) {
        const slideDiv = document.createElement('div');
        slideDiv.className = 'esi-slide-content';
        slideDiv.innerHTML = activity.data[key].replace(/\n/g, '<br>');
        slidesContainer.appendChild(slideDiv);
    });

    activateSlide(0);

    updateSlideIndicator();

    const prevZone = document.getElementById('esi-slide-prev');
    const nextZone = document.getElementById('esi-slide-next');

    if (prevZone) {
        prevZone.addEventListener('click', goPrevSlide);
    }

    if (nextZone) {
        nextZone.addEventListener('click', goNextSlide);
    }

    const btnContinuarSlides = document.getElementById('btn-continuar-slides');
    if (btnContinuarSlides) {
        btnContinuarSlides.addEventListener('click', function () {
            goNextActivity();
        });
    }
}

function activateSlide(index) {
    const slidesContainer = document.getElementById('esi-slides');
    if (!slidesContainer) return;

    const slideItems = slidesContainer.querySelectorAll('.esi-slide-content');

    slideItems.forEach(item => item.classList.remove('active'));

    if (slideItems[index]) {
        slideItems[index].classList.add('active');
    }

    currentSlidePage = index;
}

function updateSlideIndicator() {
    const indicator = document.getElementById('esi-page-indicator');
    if (indicator) {
        indicator.textContent = `Página ${currentSlidePage + 1} / ${totalSlides}`;
    }
}

function goNextSlide() {
    if (currentSlidePage < totalSlides - 1) {
        activateSlide(currentSlidePage + 1);
        updateSlideIndicator();
    } else {
        const btnContinuarSlides = document.getElementById('btn-continuar-slides');
        const nextZone = document.getElementById('esi-slide-next');
        const prevZone = document.getElementById('esi-slide-prev');

        if (btnContinuarSlides) {
            btnContinuarSlides.style.display = 'inline-block';
        }

        if (nextZone) {
            nextZone.style.display = 'none';
        }
        if (prevZone) {
            prevZone.style.display = 'none';
        }
    }
}

function goPrevSlide() {
    if (currentSlidePage > 0) {
        activateSlide(currentSlidePage - 1);
        updateSlideIndicator();
    }
}

// LISTADO
function renderActivityList() {
    const listContainer = document.getElementById('actividad-listado');
    if (!listContainer || !activityKeys || activityKeys.length === 0) return;

    let html = '<div class="actividad-listado-titulo">Actividades</div>';
    html += '<ul class="actividad-listado-ul">';

    activityKeys.forEach(function (key, idx) {
        const index = idx + 1;
        const isActive = (index === currentActivityIndex);

        const label = getActivityLabel(key);  // <-- aquí usamos el switch/map

        html += `
            <li class="actividad-listado-item ${isActive ? 'active' : ''}">
                <button type="button" class="actividad-listado-btn" data-index="${index}">
                    ${label}
                </button>
            </li>
        `;
    });

    html += '</ul>';

    listContainer.innerHTML = html;

    const buttons = listContainer.querySelectorAll('.actividad-listado-btn');
    buttons.forEach(btn => {
        btn.addEventListener('click', function () {
            const idx = parseInt(this.getAttribute('data-index'), 10);
            if (!isNaN(idx)) {
                loadActivity(idx);
            }
        });
    });
}

function getActivityLabel(key) {
    if (ACTIVITY_TITLES[key]) {
        return ACTIVITY_TITLES[key];
    }

    if (key.startsWith('quiz-')) {
        return 'Quiz ' + key.split('-')[1];
    } else if (key.startsWith('accordion-')) {
        return 'Acordeón ' + key.split('-')[1];
    } else if (key.startsWith('slides-')) {
        return 'Slides ' + key.split('-')[1];
    }

    return key;
}

// INICIALIZACIÓN
document.addEventListener('DOMContentLoaded', function () {
    loadActivity(1);

    const btnContinuar = document.getElementById('btn-continuar-actividad');
    if (btnContinuar) {
        btnContinuar.addEventListener('click', function () {
            goNextActivity();
        });
    }
});