let currentActivityIndex = 1;
let totalActivities = 1;
let currentSlidePage = 1;
let totalSlides = 1;
let currentActivityData = null;
let activityKeys = [];

const ACTIVITY_TITLES = {
    'slides-1': 'Derechos Humanos',
    'casillas-1': 'Actividad: Discriminación',
    'slides-2': 'Discriminación',
    'accordion-1': 'Diversidad e inclusión',
    'options-1': 'Quiz: Discriminación',
    'slides-3': 'Preguntas para reflexionar',
    'slides-4': 'Sexualidad',
    'options-2': 'Actividad: Mi Primera vez',
    'slides-5': 'Embarazo temprano',
    'slides-6': 'Actividad: La entrevista',
    'slides-7': 'Actividad: Yo decido',
    'accordion-2': 'Menstruación',
}
function loadActivity(index) {
    $.ajax({
        url: 'slidesjovenes',
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
    } else if (type === 'casillas') {
        renderCasillasActivity(container, activity);
    } else if (type === 'options') {
        renderOptionsActivity(container, activity);
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

// RENDER CASILLAS
function renderCasillasActivity(container, activity) {
    const items = activity.data || {};

    let html = '<div class="casillas-activity"><form id="casillas-form">';

    Object.keys(items).forEach(function (key) {
        if (key.startsWith('data-')) {
            const content = items[key];
            html += `<div class="data-content">${content}</div>`;
        }
    });

    Object.keys(items).forEach(function (key) {
        if (key.startsWith('data-')) {
            return;
        }

        const item = items[key];
        const questionId = `cas-${activity.key}-${key}`;

        const label1 = item['1'] || 'Opción 1';
        const label0 = item['0'] || 'Opción 0';

        html += `
            <div class="casillas-item" data-idx="${key}">
                <div class="casillas-question-text">
                    ${item.q}
                </div>
                <div class="casillas-options">
                    <label>
                        <input type="radio" name="${questionId}" value="1" required>
                        ${label1}
                    </label>
                    <label>
                        <input type="radio" name="${questionId}" value="0" required>
                        ${label0}
                    </label>
                </div>
            </div>
        `;
    });

    html += `
        <button type="button" id="btn-enviar-casillas">Enviar Respuestas</button>
        <button type="button" id="btn-continuar-casillas" style="display:none;">Continuar</button>
        <div id="casillas-resultado" style="display:none; margin-top:1rem;"></div>
    </form></div>`;

    container.innerHTML = html;

    const btnEnviar = document.getElementById('btn-enviar-casillas');
    if (btnEnviar) {
        btnEnviar.addEventListener('click', function () {
            mostrarResultadosCasillas(activity);
        });
    }

    const btnContinuarCasillas = document.getElementById('btn-continuar-casillas');
    if (btnContinuarCasillas) {
        btnContinuarCasillas.addEventListener('click', function () {
            goNextActivity();
        });
    }
}

function mostrarResultadosCasillas(activity) {
    const items = activity.data || {};
    
    const preguntasReales = Object.keys(items).filter(key => !key.startsWith('data-'));
    const totalPreguntas = preguntasReales.length;

    let allAnswered = true;
    let totalOpcion1 = 0;

    preguntasReales.forEach(function (key) {
        const questionId = `cas-${activity.key}-${key}`;
        const radios = document.querySelectorAll(`input[name="${questionId}"]`);
        let selectedValue = null;

        radios.forEach(r => {
            if (r.checked) {
                selectedValue = r.value;
            }
        });

        if (selectedValue === null) {
            allAnswered = false;
        } else if (selectedValue === '1') {
            totalOpcion1++;
        }
    });

    if (!allAnswered) {
        alert('Responde a todas las expresiones antes de enviar.');
        return;
    }

    const primeraKey = preguntasReales[0];
    const labelOpcion1 = items[primeraKey]['1'] || 'Opción 1';

    const resultadoEl = document.getElementById('casillas-resultado');
    if (resultadoEl) {
        resultadoEl.innerHTML = `
            <p>Marcaste <strong>"${labelOpcion1}"</strong> en 
            <strong>${totalOpcion1}</strong> de 
            <strong>${totalPreguntas}</strong> expresiones.</p>
        `;
        resultadoEl.style.display = 'block';
    }

    const form = document.getElementById('casillas-form');
    if (form) {
        const radios = form.querySelectorAll('input[type="radio"]');
        radios.forEach(r => r.disabled = true);
    }

    const btnEnviar = document.getElementById('btn-enviar-casillas');
    const btnContinuar = document.getElementById('btn-continuar-casillas');

    if (btnEnviar) btnEnviar.style.display = 'none';
    if (btnContinuar) btnContinuar.style.display = 'inline-block';
}

// RENDER QUIZ
function renderQuizActivity(container, activity) {
    const questions = activity.data || {};

    let html = '<div class="quiz-activity"><form id="quiz-form">';

    Object.keys(questions).forEach(function (key) {
        if (key.startsWith('data-')) {
            const content = questions[key];
            html += `<div class="data-content">${content}</div>`;
        }
    });

    Object.keys(questions).forEach(function (key) {
        if (key.startsWith('data-')) {
            return;
        }

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
                <div class="quiz-result" id="result-${questionId}" style="display:none;"></div>
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
    const userAnswers = {};

    Object.keys(questions).forEach(function (key) {
        if (key.startsWith('data-')) {
            return;
        }

        const questionId = `q-${activity.key}-${key}`;
        const radios = document.querySelectorAll(`input[name="${questionId}"]`);
        let selectedValue = null;

        radios.forEach(r => {
            if (r.checked) selectedValue = r.value;
        });

        if (selectedValue === null) {
            allAnswered = false;
        } else {
            userAnswers[key] = selectedValue;
        }
    });

    if (!allAnswered) {
        alert('Responde a todas las preguntas antes de enviar.');
        return;
    }

    Object.keys(questions).forEach(function (key) {
        if (key.startsWith('data-')) {
            return;
        }

        const questionId = `q-${activity.key}-${key}`;
        const q = questions[key];
        const correctAnswer = q.a;
        const userValue = userAnswers[key];

        let isCorrect = false;

        if (correctAnswer === 'both') {
            isCorrect = true;
        } else {
            const correctBool = !!correctAnswer;
            const userBool = (userValue === 'true');
            isCorrect = (userBool === correctBool);
        }

        const resultEl = document.getElementById(`result-${questionId}`);
        if (resultEl) {
            resultEl.textContent = isCorrect ? 'Correcto' : 'Incorrecto';
            resultEl.style.display = 'block';

            resultEl.classList.remove('correct', 'incorrect');
            resultEl.classList.add(isCorrect ? 'correct' : 'incorrect');
        }

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

// RENDER OPTIONS
function renderOptionsActivity(container, activity) {
    const items = activity.data || {};

    let html = '<div class="options-activity"><form id="options-form">';

    Object.keys(items).forEach(function (key) {
        if (key.startsWith('data-')) {
            const content = items[key];
            html += `<div class="data-content">${content}</div>`;
        }
    });

    Object.keys(items).forEach(function (key) {
        if (key.startsWith('data-')) {
            return;
        }

        const item = items[key];
        const questionId = `opt-${activity.key}-${key}`;

        const label1 = item['1'] || 'Opción 1';
        const label0 = item['0'] || 'Opción 0';
        const correct = item['a'];
        const feedback = item['c'] || '';

        html += `
            <div class="options-question" data-idx="${key}" data-correct="${correct}">
                <div class="options-question-text">
                    ${item.q}
                </div>
                <div class="options-options">
                    <label>
                        <input type="radio" name="${questionId}" value="1" required>
                        ${label1}
                    </label>
                    <label>
                        <input type="radio" name="${questionId}" value="0" required>
                        ${label0}
                    </label>
                </div>
                <div class="options-result" id="result-${questionId}" style="display:none;"></div>
                <div class="options-feedback" id="feedback-${questionId}" style="display:none;">
                    ${feedback}
                </div>
            </div>
        `;
    });

    html += `
        <button type="button" id="btn-enviar-options">Enviar Respuestas</button>
        <button type="button" id="btn-continuar-options" style="display:none;">Continuar</button>
    </form></div>`;

    container.innerHTML = html;

    const btnEnviar = document.getElementById('btn-enviar-options');
    if (btnEnviar) {
        btnEnviar.addEventListener('click', function () {
            mostrarRespuestasOptions(activity);
        });
    }

    const btnContinuarOptions = document.getElementById('btn-continuar-options');
    if (btnContinuarOptions) {
        btnContinuarOptions.addEventListener('click', function () {
            goNextActivity();
        });
    }
}

function mostrarRespuestasOptions(activity) {
    const items = activity.data || {};
    let allAnswered = true;
    const userAnswers = {};

    const preguntasReales = Object.keys(items).filter(key => !key.startsWith('data-'));

    preguntasReales.forEach(function (key) {
        const questionId = `opt-${activity.key}-${key}`;
        const radios = document.querySelectorAll(`input[name="${questionId}"]`);
        let selectedValue = null;

        radios.forEach(r => {
            if (r.checked) {
                selectedValue = r.value;
            }
        });

        if (selectedValue === null) {
            allAnswered = false;
        } else {
            userAnswers[key] = selectedValue;
        }
    });

    if (!allAnswered) {
        alert('Responde a todas las preguntas antes de enviar.');
        return;
    }

    preguntasReales.forEach(function (key) {
        const questionId = `opt-${activity.key}-${key}`;
        const item = items[key];
        const correctAnswer = item['a'];
        const userValue = userAnswers[key];

        let isCorrect = false;

        if (correctAnswer === 'both') {
            isCorrect = true;
        } else if (correctAnswer === '1' || correctAnswer === '0') {
            isCorrect = (userValue === correctAnswer);
        }

        const resultEl = document.getElementById(`result-${questionId}`);
        if (resultEl) {
            resultEl.textContent = isCorrect ? 'Correcto' : 'Incorrecto';
            resultEl.style.display = 'block';

            resultEl.classList.remove('correct', 'incorrect');
            resultEl.classList.add(isCorrect ? 'correct' : 'incorrect');
        }

        const feedbackEl = document.getElementById(`feedback-${questionId}`);
        if (feedbackEl) {
            feedbackEl.style.display = 'block';
        }
    });

    const form = document.getElementById('options-form');
    if (form) {
        const radios = form.querySelectorAll('input[type="radio"]');
        radios.forEach(r => r.disabled = true);
    }

    const btnEnviar = document.getElementById('btn-enviar-options');
    const btnContinuar = document.getElementById('btn-continuar-options');

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

        const label = getActivityLabel(key);

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
    } else if (key.startsWith('casillas-')) {
        return 'Casillas ' + key.split('-')[1];
    } else if (key.startsWith('options-')) {
        return 'Opciones ' + key.split('-')[1];
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