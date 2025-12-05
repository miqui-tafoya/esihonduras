<?php
namespace Controller;

use View\Render;
class Educadores extends Render {
    public function GET_handler($route, $params, $js) {
        return $this->renderView($route, $params[0], $params[1], $params[2], $params[3], $js);
    }

    public function GET_AJAX_handler() {
        header('Content-Type: application/json; charset=utf-8');
        $slides = [
            1 => '
        <p class="cabecera-one">1. ¿Qué es la Educación Sexual Integral (ESI)?</p>
        <p class="cuerpo-texto">La Educación Sexual Integral (ESI) es un proceso educativo que aborda la sexualidad humana en todas sus dimensiones —cognitiva, emocional, física y social— desde una perspectiva de derechos humanos, igualdad de género y evidencia científica.</p>
        <p>Según la UNESCO, la educación integral en sexualidad tiene cinco veces más probabilidades de tener éxito en la prevención de embarazos adolescentes y enfermedades de transmisión sexual cuando presta atención explícita a los temas de género y poder.</p>
        <p>En México, la ESI busca capacitar a niñas, niños y jóvenes con conocimientos, habilidades, actitudes y valores para cuidar su salud, bienestar y dignidad; establecer relaciones respetuosas; analizar sus decisiones y proteger sus derechos.</p>
        <p><strong>Fuentes:</strong> UNESCO (2024), ENAPEA (SEGOB, 2024), SIPINNA (gob.mx).</p>
    ',
            2 => '
        <p class="cabecera-one">2. Importancia de la ESI en las escuelas</p>
        <p>La sexualidad es una dimensión central del ser humano y está presente en todas las etapas de la vida. Una educación sexual integral contribuye a prevenir embarazos no planificados, infecciones de transmisión sexual y violencia sexual o de género.</p>
        <p>Además, la ESI promueve el respeto, la equidad y la convivencia saludable, permitiendo desmontar mitos, prejuicios y estereotipos relacionados con la sexualidad y el género.</p>
        <p><strong>Fuentes:</strong> UNESCO (2023), Agencia Presentes (2023), SIPINNA (2024).</p>
    ',
            3 => '
        <p class="cabecera-one">3. Contenidos clave para docentes</p>
        <ul>
            <li><strong>Perspectiva integral:</strong> la sexualidad no se reduce al acto sexual, incluye dimensiones afectivas, identitarias y relacionales.</li>
            <li><strong>Enfoque de derechos humanos y perspectiva de género:</strong> promueve la igualdad y el respeto a la diversidad.</li>
            <li><strong>Información científica, laica y adaptada a la edad.</strong></li>
            <li><strong>Desarrollo de habilidades, actitudes y valores:</strong> comunicación, respeto, pensamiento crítico, autonomía.</li>
            <li><strong>Temas esenciales:</strong> desarrollo humano, identidad de género, diversidad sexual, consentimiento, anticoncepción, prevención de ITS y violencia.</li>
        </ul>
        <p><strong>Fuentes:</strong> ENAPEA (SEGOB, 2024), SEP (2024), UNESCO (2023).</p>
    ',
            4 => '
       <p class="cabecera-one">4. Orientaciones prácticas para el aula</p>
        <ul>
            <li>Crear ambientes de confianza y respeto.</li>
            <li>Usar lenguaje apropiado a la edad.</li>
            <li>Fomentar la participación mediante debates, juegos de rol y reflexiones.</li>
            <li>Integrar la ESI en distintas asignaturas.</li>
            <li>Colaborar con familias y comunidad escolar.</li>
            <li>Evaluar continuamente las estrategias y adaptarlas al contexto.</li>
        </ul>
        <p><strong>Fuentes:</strong> SEP (2024), SIPINNA (2024).</p>
    ',
            5 => '
        <p class="cabecera-one">5. Tomemos en cuenta que:</p>
        <p>La ESI no es un contenido adicional, sino una herramienta fundamental para formar personas libres, responsables y respetuosas. Al incorporar la ESI en el aula, las y los docentes promueven una sociedad más justa, equitativa e inclusiva.</p>
        <p>La Educación Sexual Integral (ESI) es una herramienta educativa clave para la formación de ciudadanías críticas, respetuosas y libres de violencia. Esta guía amplía los contenidos previos, integrando nuevas perspectivas sobre adolescencia, diversidad sexual, uso de herramientas digitales y trabajo con familias. Está diseñada para docentes que buscan fortalecer su práctica desde un enfoque integral, laico, científico y de derechos humanos.</p>
        <p><strong>Fuentes:</strong> UNESCO (2023), SEP (2024), Fondo de Población de las Naciones Unidas (UNFPA, 2023), UNICEF (2023).</p>
    ',
            6 => '
        <p class="cabecera-one">6. La adolescencia y la ESI</p>
        <p>La adolescencia es una etapa de transición marcada por cambios biológicos, emocionales, cognitivos y sociales. La ESI en esta etapa busca acompañar esos procesos, ayudando a que las y los jóvenes comprendan su cuerpo, emociones, vínculos y derechos.</p>
        <p>Es esencial promover la reflexión crítica sobre la presión social, el consentimiento, las masculinidades, el autocuidado y la toma de decisiones informadas. La ESI fomenta la construcción de una identidad positiva y relaciones basadas en el respeto.</p>
        <p><strong>Fuentes:</strong> UNFPA (2023) "Adolescentes y Juventudes", OMS (2022) "Salud sexual y reproductiva en la adolescencia", SEP (2024).</p>
    ',
            7 => '
        <p class="cabecera-one">7. Diversidad sexual y de género</p>
        <p>El reconocimiento de la diversidad sexual y de género es un eje central de la ESI. Involucra comprender que las identidades, expresiones y orientaciones sexuales son múltiples y válidas. Las escuelas deben ser espacios seguros para todas las personas, sin discriminación.</p>
        <p>El rol docente incluye visibilizar la diversidad, evitar el lenguaje discriminatorio y fomentar el respeto. Es fundamental enseñar sobre identidad de género, orientación sexual, expresión de género y derechos humanos.</p>
        <p><strong>Fuentes:</strong> Consejo Nacional para Prevenir la Discriminación (CONAPRED, 2024), UNESCO (2023), ILSB (2024).</p>
    ',
            8 => '
        <p class="cabecera-one">8. Herramientas digitales y ESI</p>
        <p>Las tecnologías digitales atraviesan la vida cotidiana de niñas, niños y adolescentes. La ESI debe incorporar el uso responsable, crítico y ético de estas herramientas, abordando temas como el sexting, la privacidad digital, la exposición de imágenes, el consentimiento en entornos virtuales y la ciber-violencia.</p>
        <p>Promover la ciudadanía digital implica enseñar a reflexionar sobre los límites, los riesgos y las oportunidades del entorno digital para las relaciones y la sexualidad.</p>
        <p><strong>Fuentes:</strong> UNICEF (2023) "Seguridad digital y adolescencia", INMUJERES (2024) "Ciberacoso y género", Red por los Derechos de la Infancia en México (REDIM, 2023).</p>
    ',
            9 => '
        <p class="cabecera-one">9. Trabajo con familias desde la ESI</p>
        <p>La participación de las familias es clave para el éxito de la ESI. La escuela y el hogar deben trabajar en conjunto para ofrecer mensajes coherentes, promover el diálogo intergeneracional y generar confianza.</p>
        <p><strong>Estrategias sugeridas:</strong></p>
        <ul>
            <li>Organizar espacios de sensibilización para madres, padres y tutores.</li>
            <li>Brindar información científica, accesible y sin juicios.</li>
            <li>Promover el respeto por los valores familiares sin renunciar al enfoque de derechos.</li>
            <li>Involucrar a las familias en proyectos escolares sobre convivencia, género y salud sexual.</li>
        </ul>
        <p><strong>Fuentes:</strong> SIPINNA (2024), UNICEF México (2023), SEP (Guía de trabajo con familias, 2024).</p>
    ',
            10 => '
        <p class="cabecera-one">10. ESI, equidad y construcción de ciudadanía</p>
        <p>La ESI es también una herramienta para construir ciudadanía y promover la equidad social. Al abordar temas de poder, género, consentimiento y derechos, la escuela se convierte en un espacio que forma personas capaces de participar activamente en la sociedad y defender la igualdad.</p>
        <p>La ESI contribuye al desarrollo integral de las y los estudiantes, promueve relaciones basadas en el respeto y fortalece las competencias socioemocionales. Implementarla de forma sistemática, sensible y adaptada al contexto escolar genera comunidades más sanas, igualitarias y libres de violencia.</p>
        <p><strong>Fuentes:</strong> UNESCO (2024), ONU Mujeres (2023), INMUJERES (2024), SEP (2024), UNFPA (2023), UNICEF (2023).</p>
    ',
            11 => '
        <p class="cabecera-one">11. Los Cinco Ejes Fundamentales (Enfoque Común Regional)</p>
        <ul>
            <li><strong>Reconocer la Perspectiva de Género:</strong> Deconstrucción de estereotipos y promoción de la igualdad.</li>
            <li><strong>Respetar la Diversidad:</strong> Valoración de las diferentes identidades y orientaciones sexuales.</li>
            <li><strong>Valorar la Afectividad:</strong> Manejo de emociones, desarrollo de la empatía y fomento de relaciones sanas.</li>
            <li><strong>Cuidar el Cuerpo y la Salud:</strong> Perspectiva integral de la salud, prevención de ETS/VIH, y promoción de derechos sexuales y reproductivos.</li>
            <li><strong>Ejercer Nuestros Derechos:</strong> Reconocimiento de niños, niñas y adolescentes como sujetos de derechos.</li>
        </ul>
    ',
            12 => '
        <p class="cabecera-one">12. Profundización en marcos legales específicos y desafíos (Honduras)</p>
        <p><strong>Cita esencial (base de derecho):</strong> Constitución de la República, Art. 145, junto con compromisos internacionales como la Convención sobre los Derechos del Niño (CDN) y el Consenso de Montevideo.</p>
        <p><strong>Contexto reciente:</strong> "Ley de Educación Integral de Prevención al Embarazo Adolescente en Honduras" (aprobada por el Congreso Nacional en marzo de 2023).</p>
        <p>Si bien el Congreso la aprobó, la Ley fue vetada por el Poder Ejecutivo en julio de 2023, bajo la justificación de que no cumplía su finalidad de ser integral.</p>
        <p><strong>Implicación para docentes:</strong> A pesar del veto, el deber de educar y la responsabilidad de prevenir el embarazo adolescente y la violencia sexual sigue vigente, apoyado en la Constitución y las normativas y guías de la Secretaría de Educación.</p>
        <p>Más allá de la normativa específica, el compromiso docente es un compromiso ético y de derechos humanos para garantizar:</p>
        <ul>
            <li>Información científica y laica.</li>
            <li>El ejercicio de la autonomía.</li>
            <li>La prevención de la violencia y la discriminación.</li>
        </ul>
    ',
            13 => '
        <p class="cabecera-one">13. Guía para la intervención en temas relacionados con sexualidad</p>
        <p>Después de mucho escuchar y acompañar a personal docente, desarrollamos el siguiente decálogo para abordar temas de sexualidad con las y los alumnos:</p>
        <ol>
            <li>Brindar información desde la educación no es un delito, es un derecho que tienen las adolescencias a recibir información sobre sus derechos sexuales y reproductivos.</li>
            <li>Los derechos sexuales y reproductivos son <strong>DERECHOS HUMANOS</strong>.</li>
            <li>Apostemos por diversificar las formas en las que estamos escuchando y hablando con las adolescencias; una comunicación informal no es sinónimo de mala comunicación, si tiene un objetivo y un propósito se logrará la comunicación efectiva.</li>
            <li>Al acompañar, recuerda brindar información de forma clara, amigable y respetuosa.</li>
            <li>Si como mentor(a) identificas que alguno de los temas que el alumnado quiere comentar contigo te hace sentir enojado(a), triste, confundido(a) o te lleva a cuestionarte, es funcional trabajarlo en tu espacio de terapia personal para brindar un acompañamiento más objetivo.</li>
            <li>Actualizarse constantemente es sumamente importante.</li>
            <li>Evitar a toda costa los juicios y prejuicios ayuda mucho a un mejor acompañamiento. Si al acompañar te genera un juicio, entonces detente.</li>
            <li>Intervenir con naturalidad al momento de tratar temas relacionados con sexualidad. Recuerda que la comunicación no verbal también comunica.</li>
            <li>Si la información que te piden o el acompañamiento está fuera de tu alcance, canaliza y da seguimiento.</li>
            <li>La educación integral en sexualidad es una herramienta para prevenir.</li>
        </ol>
    '
        ];

        $total = count($slides);

        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;

        if ($page < 1) {
            $page = 1;
        }
        if ($page > $total) {
            $page = $total;
        }

        echo json_encode([
            'page' => $page,
            'total' => $total,
            'content' => $slides[$page]
        ]);
        exit;
    }

    public function values($params) {
        $clase = explode('\\', __CLASS__);
        $buildClass = '\\Model\\' . ucfirst($clase[1]) . 'Model';
        $load = new $buildClass();
        $valores = $load->fetchData($params);
        return $valores;
    }

}