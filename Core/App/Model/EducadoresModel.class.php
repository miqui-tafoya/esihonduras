<?php
namespace Model;

use Model\Database;

class EducadoresModel extends Model {

    private Database $db;

    // GETTERS
    public function getActividades() {
        $data = [
            1 => '
        <h2 class="cabecera-one">1. ¿Qué es la Educación Sexual Integral (ESI)?</h2>
        <p> La Educación Sexual Integral (ESI) es un proceso educativo que aborda la sexualidad humana en todas sus dimensiones —cognitiva, emocional, física y social— desde una perspectiva de derechos humanos, igualdad de género y evidencia científica.
           </br></br>
           Según la UNESCO, la educación integral en sexualidad tiene cinco veces más probabilidades de tener éxito en la prevención de embarazos adolescentes y enfermedades de transmisión sexual cuando presta atención explícita a los temas de género y poder.
           </br></br>
           En México, por ejemplo, la ESI busca capacitar a niñas, niños y jóvenes con conocimientos, habilidades, actitudes y valores para cuidar su salud, bienestar y dignidad; establecer relaciones respetuosas; analizar sus decisiones y proteger sus derechos.
           </br></br>
           <strong>Fuentes:</strong> UNESCO (2024), ENAPEA (SEGOB, 2024), SIPINNA (gob.mx).</p>
    ',
            2 => '
        <h2 class="cabecera-one">2. Importancia de la ESI en las escuelas</h2>
        <p>Gran parte de su día, las chicas y los chicos conviven y se relacionan con personas de su edad en los centros educativos. La escuela es un espacio seguro para que ellas y ellos puedan desarrollar sus habilidades, aprender y preguntar.
           </br></br>
           Seguramente usted profesor o profesora ha escuchado o le han hecho preguntas sobre planificación familiar, inquietudes sobre métodos anticonceptivos, sobre los tipos de violencia y otros temas relacionados a la Educación Sexual Integral (ESI). 
           </br></br>
           Contar con información desde las escuelas sobre ESI contribuye al desarrollo integral de las y los estudiantes, promueve relaciones basadas en el respeto, la convivencia saludable entre personas, permitiendo desmontar mitos, prejuicios y estereotipos relacionados con la sexualidad y el género y fortalece las competencias socioemocionales. 
           </br></br>
        <strong>Fuentes:</strong> UNESCO (2023), Agencia Presentes (2023), SIPINNA (2024).
        </br></br>
        Te invitamos a ver el siguiente video de cómo se está implementando la educación sexual integral en otras escuelas 	<span class="hiper"> <a href="https://youtu.be/d5_g_xRMAmU" target="_blank">GAIE, para que cada persona joven alcance su pleno desarrollo.</a></span> 
        </p>
    ',
            3 => '
        <h2 class="cabecera-one">3. Contenidos clave para docentes</h2>
        <p> Al momento de implementar una estrategia de ESI en tu escuela, busca incluir al menos los siguientes enfoques:</p>
        <ul>
            <li><strong>Perspectiva integral:</strong> la sexualidad no se reduce sólo al acto sexual, incluye también dimensiones afectivas, identitarias y relacionales.</li>
            <li><strong>Enfoque de derechos humanos y perspectiva de género:</strong> promueve la igualdad y el respeto a la diversidad.</li>
            <li><strong>Información pertinente: </strong>se debe proveer de información científica, laica y adaptada a la edad.Desarrollo de habilidades, actitudes y valores: con especial atención a aspectos de comunicación, respeto, pensamiento crítico y autonomía.</li>
            <li><strong>Desarrollo de habilidades, actitudes y valores:</strong> comunicación, respeto, pensamiento crítico, autonomía.</li>
            <li><strong>Temas esenciales:</strong> desarrollo humano, identidad de género, diversidad sexual, consentimiento, anticoncepción, prevención de enfermedades de transmisión sexual (ETS) y violencia.</li>
        </ul></br></br>
        <p><strong>Fuentes:</strong> ENAPEA (SEGOB, 2024), SEP (2024), UNESCO (2023).</p>
    ',
            4 => '
       <h1 class="cabecera-one">4. Orientaciones prácticas para el aula</h1>
       <p> Considera los siguientes aspectos mientras implementas una estrategia de ESI en tu escuela:</p>
        <ul>
            <li class="cuerpo-texto">Crear ambientes de confianza y respeto.</li>
            <li class="cuerpo-texto">Usar lenguaje apropiado a la edad.</li>
            <li class="cuerpo-texto">Fomentar la participación mediante debates, juegos de rol y reflexiones.</li>
            <li class="cuerpo-texto">Integrar la ESI en distintas asignaturas.</li>
            <li class="cuerpo-texto">Colaborar con familias y comunidad escolar.</li>
            <li class="cuerpo-texto">Evaluar continuamente las estrategias y adaptarlas al contexto.</li>
        </ul></br></br>
        <p class="cuerpo-texto"><strong>Fuentes:</strong> SEP (2024), SIPINNA (2024).</p>
    ',
            5 => '
        <h2 class="cabecera-one">5. Tomemos en cuenta que:</h2>
        <p class="cuerpo-texto">
        La ESI no es un contenido adicional, sino una herramienta fundamental para formar personas libres, responsables y respetuosas. Al incorporar la ESI en el aula, las y los docentes promueven una sociedad más justa, equitativa e inclusiva.
        </br></br>
        La ESI es una herramienta educativa clave para la formación de ciudadanías críticas, respetuosas y libres de violencia. Esta guía amplía los contenidos previos, integrando nuevas perspectivas sobre adolescencia, diversidad sexual, uso de herramientas digitales y trabajo con familias. Está diseñada para docentes que buscan fortalecer su práctica desde un enfoque integral, laico, científico y de derechos humanos.
        </br></br>
        <strong>Fuentes:</strong> UNESCO (2023), SEP (2024), Fondo de Población de las Naciones Unidas (UNFPA, 2023), UNESCO (2024), UNICEF (2023).</p>
    ',
            6 => '
        <h2 class="cabecera-one">6. La adolescencia y la ESI</h2>
        <p  class="cuerpo-texto">La adolescencia es una etapa de transición marcada por cambios biológicos, emocionales, cognitivos y sociales. La ESI en esta etapa busca acompañar esos procesos, ayudando a que las y los jóvenes comprendan su cuerpo, emociones, vínculos y derechos.</br></br>
        Es esencial promover la reflexión crítica sobre la presión social, el consentimiento, las masculinidades, el autocuidado y la toma de decisiones informadas. La ESI fomenta la construcción de una identidad positiva y relaciones basadas en el respeto.
        </br></br>
        <strong>Fuentes:</strong> UNFPA (2023), OMS (2022), SEP (2024).</p>
    ',
            7 => '
        <h2 class="cabecera-one">7. Diversidad sexual y de género</h2>
        <p>El reconocimiento de la diversidad sexual y de género es un eje central de la ESI. Involucra comprender que las identidades, expresiones y orientaciones sexuales son múltiples y válidas. Las escuelas deben ser espacios seguros para todas las personas, sin discriminación.</br></br>
        El rol docente incluye visibilizar la diversidad, evitar el lenguaje discriminatorio y fomentar el respeto. Es fundamental enseñar sobre identidad de género, orientación sexual, expresión de género y derechos humanos.
        </br></br>
        <strong>Fuentes:</strong> Consejo Nacional para Prevenir la Discriminación (CONAPRED, 2024), UNESCO (2023), ILSB (2024).
        </p>
    ',
            8 => '
        <h2 class="cabecera-one">8. Herramientas digitales y ESI</p>
        <p>
        Las tecnologías digitales atraviesan la vida cotidiana de niñas, niños y adolescentes. La ESI debe incorporar el uso responsable, crítico y ético de estas herramientas, abordando temas como el sexting, la privacidad digital, la exposición de imágenes, el consentimiento en entornos virtuales y la ciber-violencia.
        </br></br>
        Promover la ciudadanía digital implica enseñar a reflexionar sobre los límites, los riesgos y las oportunidades del entorno digital para las relaciones y la sexualidad.
        </br></br>
        <span class="txt-italic">¿Qué es sexting?</span>
        </br></br>
        Hablar de sexting o sextear significa un intercambio sexual con alguna persona, esta puede ser por mensajes, audios, emojis, gifs, notas de voz, fotos y hasta vídeos, es parte de ejercer tu sexualidad por medio o a través de entornos digitales.
        </br></br>
        Es muy importante contar con información y ante cualquier duda se vale preguntar.
        </br></br>
        Hay personas que hacen un uso violento de Internet y crean perfiles falsos para hacerse pasar por alguien de tu edad, te buscan convencer, ganarse tu confianza y solicitarle contenido sexual.
        </br></br>
        Eso es muy importante tomar en cuenta:
        </br></br>
        1.- Nunca compartir mensajes, notas de voz, fotos o vídeos con personas que <span class="cabecera-bold" >NO</span> conozcas.
        </br>
        2.- Nadie puede obligarte, 	<span class="cabecera-bold" >si tu no quieres es NO es NO.</span>
        </br>
        3.- Si te están amenazando con publicar fotos o vídeos, avisa a una persona adulta de confianza.
        </br>
        4.- Si te invitan a unirte a un grupo donde hay personas que no conoces y debes presentarte enviando una foto, rechaza la invitación, si ya te agregaron, salte del grupo. 
       </br></br>
        <strong>Fuentes:</strong>  UNICEF (2023), INMUJERES (2024), Red por los Derechos de la Infancia en México (REDIM, 2023).
        </p>
    ',
            9 => '
        <h2 class="cabecera-one">9. Trabajo con familias desde la ESI</h2>
        <p>La participación de las familias es clave para el éxito de la ESI. La escuela y el hogar deben trabajar en conjunto para ofrecer mensajes coherentes, promover el diálogo intergeneracional y generar confianza.</br></br>
        <strong>Algunas estrategias sugeridas son:</strong></p>
        <ul>
            <li> Organizar espacios de sensibilización para madres, padres y tutores.</li>
            <li> Brindar información científica, accesible y sin juicios.</li>
            <li>Promover el respeto por los valores familiares sin renunciar al enfoque de derechos.</li>
            <li>Involucrar a las familias en proyectos escolares sobre convivencia, género y salud sexual.</li>
        </ul></br></br>
        <p><strong>Fuentes:</strong> SIPINNA (2024), UNICEF México (2023), SEP (Guía de trabajo con familias, 2024).</p>
    ',
            10 => '
        <h2 class="cabecera-one">10. ESI, equidad y construcción de ciudadanía</h2>
        <p>
        La ESI es también una herramienta para construir ciudadanía y promover la equidad social. Al abordar temas de poder, género, consentimiento y derechos, la escuela se convierte en un espacio que forma personas capaces de participar activamente en la sociedad y defender la igualdad.
        </br></br>
        <strong>Fuentes:</strong> UNESCO (2024), ONU Mujeres (2023), INMUJERES (2024), SEP (2024), UNFPA (2023), UNICEF (2023).</p>
    ',
            11 => '
        <h2 class="cabecera-one">11. Los Cinco Ejes Fundamentales (Enfoque Común Regional)</h2>
        <p> Alineado con las Orientaciones Técnicas Internacionales sobre Educación en 	<span class="hiper"> <a href="https://unesdoc.unesco.org/ark:/48223/pf0000260840_spa" target="_blank">Sexualidad</a> </span>(UNESCO, UNFPA, OMS) se han propuesto cinco ejes como la base para lograr un enfoque integran en la educación sexual:
</p>
        <ul>
            <li><strong>Reconocer la Perspectiva de Género:</strong> deconstrucción de estereotipos y promoción de la igualdad.</li>
            <li><strong>Respetar la Diversidad:</strong> valoración de las diferentes identidades y orientaciones sexuales.</li>
            <li><strong>Valorar la Afectividad:</strong> manejo de emociones, desarrollo de la empatía y fomento de relaciones sanas.</li>
            <li><strong>Cuidar el Cuerpo y la Salud:</strong> perspectiva integral de la salud, prevención de ETS/VIH, y promoción de derechos sexuales y reproductivos.</li>
            <li><strong>Ejercer Nuestros Derechos:</strong>  Reconocimiento de niños, niñas y adolescentes como sujetos de derechos.</li>
        </ul></br>
    ',
            12 => '
        <h2 class="cabecera-one">12. Profundización en marcos legales específicos y desafíos (Honduras)</h2>
        <p> Esta sección es crucial para el documento de docente a docente, ya que muestra la realidad de la implementación:</p>
        <p><strong>Cita Esencial (Base de Derecho): Constitución de la República,</strong>  Art. 145, junto con compromisos internacionales como la <strong>Convención sobre los Derechos del Niño (CDN) y el Consenso de Montevideo.</strong></p>
        <p><strong>Contexto Reciente:</strong> Es vital citar la <strong>"Ley de Educación Integral de Prevención al Embarazo Adolescente en Honduras" </strong>(aprobada por el Congreso Nacional en marzo de 2023).</p>
        <p><strong>Cita de Desafío:</strong> Señalar que, si bien el Congreso la aprobó, la Ley fue <strong>vetada</strong> por el Poder Ejecutivo (Presidencia de la República) en julio de 2023, bajo la justificación de que no cumplía su finalidad de ser integral.</p>
        <p><strong>Implicación para Docentes:</strong> A pesar del veto a la ley específica, el deber de educar y la responsabilidad de prevenir el embarazo adolescente y la violencia sexual sigue vigente, apoyado en la Constitución y las normativas y guías de la Secretaría de Educación (SE).</p>
        <p>Más allá de la normativa específica, el compromiso docente es mantener un <strong>compromiso ético y de derechos humanos</strong> para garantizar:</p>
        <ul>
            <li>Información científica y laica.</li>
            <li> El ejercicio de la autonomía</li>
            <li>La prevención de la violencia y la discriminación</li>
        </ul></br>
    ',
            13 => '
        <h2 class="cabecera-one">13. Decálogo para guíar la intervención en temas relacionados con sexualidad</h2>
        <p>Con base en las experiencias del personal docente, se presenta la siguiente lista de recomendaciones que hay que recordar cuando se abordan temas de sexualidad con alumnas y alumnos</p>
        <ol>
            <li>1. Brindar información sobre derechos sexuales y reproductivos en las escuelas no es un delito, es un derecho que tienen las niñas, niños y adolescencias.</li></br>
            <li>2. Los derechos sexuales y reproductivos son <strong>DERECHOS HUMANOS</strong>.</li></br>
            <li>3. Apuesta por diversificar las formas en las que escuchas y hablas con las adolescencias. Una comunicación informal no es sinónimo de mala comunicación; mientras se tenga un objetivo y un propósito claro se logrará la comunicación efectiva.</li></br>
            <li>4. Al acompañar, recuerda brindar información de forma clara, amigable y respetuosa.</li></br>
            <li>5. Actualízate constantemente en el tema, esto permitirá que des información veraz y actualizada. </li></br>
            <li>6.  Evita a toda costa los juicios y prejuicios, esto te ayudará  a dar un mejor acompañamiento. Si el acompañar te genera un juicio, entonces detente.</li></br>
            <li>7. Trata de intervenir con naturalidad al momento de tratar temas relacionados con la sexualidad. Recuerda que la comunicación no verbal también comunica.</li></br>
            <li>8. Si tu como mentor o mentora identificas que alguno de los temas que el alumnado quiere comentar te genera enojo, tristeza o confusión,  haz un ejercicio de introspección; esto te permitirá dar un acompañamiento más objetivo a  tus alumnos y alumnas.</li></br>
            <li>9. Si la información que te piden o el acompañamiento está fuera de tú alcance, canaliza a personas especializadas en el tema y da seguimiento.</li></br>
            <li>10.La educación integral en sexualidad es una herramienta para prevenir, y la prevención salva vidas.</li>
        </ol></br></br>
    '
        ];
        return $data;
    }
}