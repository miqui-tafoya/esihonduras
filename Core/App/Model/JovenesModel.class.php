<?php
namespace Model;

use Model\Database;

class JovenesModel extends Model {

    private Database $db;

    public function getActividades() {
        $data = [
            'slides-1' => [
                1 => '	<p>Derechos Humanos </br>
Cuándo escuchas hablar de Derechos humanos ¿Qué te imaginas? </br>
Los Derechos Humanos son el conjunto de prerrogativas sustentadas en la dignidad humana, cuya realización efectiva resulta indispensable para el desarrollo integral de la persona. Este conjunto de prerrogativas se encuentra establecido dentro del orden jurídico nacional, en nuestra Constitución Política, tratados internacionales y leyes.</p>

',
                2 => '<p>Actividad: </br>

1.- Busca lápiz y papel</br>
2.- Dibuja una línea y dividela en 20 espacios </br>
3.- Vas a encontrar una lista de frases y cada frase tiene la cantidad de espacios que tienes que avanzar o retroceder.</p>
',
                3 => '¿Comenzamos? 

1.- Avanza un espacio si eres mujer
2.- Avanza dos espacios  si eres hombre
3.-Avanza un espacio si eres heterosexual
4.- Retrocede dos espacios si eres LGBTIQ
5.- Retrocede tres espacios si eres mujer u hombre trans
6.- Avanza un espacio si eres persona joven no mayor de 35 años
7.-  Retrocede un espacio si tienes más de 40 años
8.- Avanza un espacio si eres delgada o delgado
9.- Avanza un espacio adelante si tienes la piel clara
10.- Retrocede un espacio si eres morena
11.- Avanza un espacio si prácticas la religión católica-cristiana
12.- Retrocede un espacio si prácticas una religión distinta a la católica-cristiana
13.- Avanza dos espacios si tienes casa propia (ya pagado)
14.- Retrocede un espacio si rentas la vivienda en la que vives
15.- Avanza un espacio si tienes vehículo propio (ya pagado)
16.- Retrocede un espacio si usas el transporte público
17.- Avanza dos espacio si tienes maestría
18.- Avanza un espacio si tienes licenciatura
19.-Retrocede un espacio si tienes hijas e hijos menores de 5 años
20.- Retrocede un espacio si tienes alguna discapacidad
',
                4 => 'Observa la línea que dibujaste, ¿en qué parte de la línea te quedaste? 
Los derechos de las personas no se pueden medir como una línea de espacios, todas las personas tenemos derechos y se deben reconocer y garantizar sin distinción alguna de nacionalidad, lugar de residencia, sexo, origen nacional o étnico, color, religión, lengua, o cualquier otra condición. Todas y todos tenemos los mismos derechos humanos, sin discriminación alguna. Estos derechos son interrelacionados, interdependientes e indivisibles.
La Declaración Universal de Derechos Humanos en su artículo 1 dice “Todos los seres humanos nacen libres e iguales en dignidad y derechos y, dotados como están de razón y conciencia, deben comportarse fraternalmente los unos con los otros”

Los derechos humanos = la dignidad que todas las personas tenemos 
',
                5 => '¿Sabes qué dice el artículo 59 y 60 de la Constitución de Honduras? 
ARTÍCULO 59.- La persona humana es el fin supremo de la sociedad y del Estado. Todos tienen la obligación de respetarla y protegerla. La dignidad del ser humano es inviolable. Para garantizar los derechos y libertades reconocidos en esta Constitución, créase la Institución del Comisionado Nacional de los Derechos Humanos. La organización, prerrogativa y atribuciones del Comisionado Nacional de los Derechos Humanos será objeto de una ley especial.
ARTÍCULO 60.- Todos los hombres nacen libres e iguales en derechos. En Honduras no hay clases privilegiadas. Todos los hondureños son iguales ante la Ley.

¿Los conocías? 

Consulta: 
Naciones Unidas Derechos Humanos, oficina del alto Comisionado, Honduras, ¿En qué consisten los derechos humanos?, disponible en: https://oacnudh.hn/derechos-humanos-2/
',
            ],
            'casillas-1' => [
                'data-1' => 'Discriminación

Lee la siguiente frase: 

La discriminación vulnera la dignidad humana 

Piensa en la frase que acabas y realiza la siguiente actividad',
                1 => [
                    'q' => '<p>¡Se trataba de mejorar la raza, no de empeorarla!</p>',
                    '1' => 'Lo he escuchado',
                    '0' => 'No lo he escuchado',
                ],
                2 => [
                    'q' => '<p>¡Es que es el mero indio!</p>',
                    '1' => 'Lo he escuchado',
                    '0' => 'No lo he escuchado',
                ],
                3 => [
                    'q' => '<p>El bebé está precioso, ¡salió chele, chele!</p>',
                    '1' => 'Lo he escuchado',
                    '0' => 'No lo he escuchado',
                ],
                4 => [
                    'q' => '<p>¡Trabajas como negro para vivir como chele!</p>',
                    '1' => 'Lo he escuchado',
                    '0' => 'No lo he escuchado',
                ],
                5 => [
                    'q' => '<p>¡Aquí chambeando como negro! </p>',
                    '1' => 'Lo he escuchado',
                    '0' => 'No lo he escuchado',
                ],
                6 => [
                    'q' => '<p>¡Los hombres no lloran!</p>',
                    '1' => 'Lo he escuchado',
                    '0' => 'No lo he escuchado',
                ],
                7 => [
                    'q' => '<p>Negro tenía que ser</p>',
                    '1' => 'Lo he escuchado',
                    '0' => 'No lo he escuchado',
                ],
                8 => [
                    'q' => '<p>Es que esos turcos caminan con los codos</p>',
                    '1' => 'Lo he escuchado',
                    '0' => 'No lo he escuchado',
                ],
                9 => [
                    'q' => '<p>Parece que vine bajando de la montaña</p>',
                    '1' => 'Lo he escuchado',
                    '0' => 'No lo he escuchado',
                ],
            ],
            'slides-2' => [
                1 => 'Todas las frases que leíste en el ejercicio hacen referencia a la discriminación. La discrimianción afecta directamente los derechos de las personas por simplemente ser, por como se ve, por sus creencias.
“La discriminación tiene lugar cuando una persona no puede disfrutar de sus derechos humanos o de otros derechos legales en condiciones de igualdad con otras personas debido a una distinción injustificada” Discriminación, Amnistía Internacional, disponible en: https://www.amnesty.org/es/what-we-do/discrimination/ 

Todas las personas tenemos derecho a ser tratados por igual, sin importar nuestra raza, nacionanidad, clase, religión, sexo, genero, orientación sexual, identdiadd de género, edad, estado de salud. 
',
                2 => '“La discriminación en América Central tiene lugar en diferentes vertientes. De un lado, persiste la discriminación racial contra los pueblos indígenas y los afrodescendientes, que permea las esferas públicas y privadas, incluidos los sectores de educación, salud, servicios y medios de comunicación. Por otro lado, también hay discriminación contra muchos otros colectivos, tales como las mujeres, los migrantes, los discapacitados y los GLBTT. En este marco, es importante recordar que cuando varios factores de discriminación convergen se produce una múltiple discriminación, que hace a la víctima aún más vulnerable a las violaciones de sus derechos. Así, en los casos más comunes, la discriminación se convierte en impedimento para el desarrollo personal y profesional y, en aquellos más extremos, las actitudes discriminatorias pueden resultar en atentados directos contra la libertad e integridad física de las personas, e incluso su vida” Discriminación, Naciones Unidas, Disponible en: https://www.oacnudh.org/areas-de-trabajo/discriminacion/ 
',
                3 => '¿Por qué hablamos de discriminación en la plataforma Derechos ESI Honduras? 

Todas las personas tenemos los mismos derechos, los derechos sexuales son derechos humanos y si se prohibe el acceso a atención medica, a metodos anticonceptivos, a información sobre embarazo, se nos niega atención médica, información acompañamiento por nuestro color de piel, por nuestra edad, todo esto es discriminación. 

Nos toca a todas las personas exigir que se garanticen y reconozcan nuestros derechos. 
',
                4 => 'Consulta 
La discriminación vulnera la dignidad humana, Gaceta UNAM, Disponible en https://www.gaceta.unam.mx/la-discriminacion-vulnera-la-dignidad-humana/
Discriminación, Naciones Unidas, Disponible en: https://www.oacnudh.org/areas-de-trabajo/discriminacion/ 

La discriminación y el derecho a la no discriminación, Disponible en https://www.cndh.org.mx/sites/all/doc/cartillas/2015-2016/43-discriminacion-dh.pdf 
'],
            'accordion-1' => [
                'data-1' => '<h4>¿Qué es la diversidad?</h4><p>Hablar de diversidad sexual no debería ser incómodo. Todas las personas merecen los mismos derechos, vivir una vida libre de violencia, sin discriminacón, acoso y eso incluye a las personas LGBTIQ+.<br>Lamentablemente…<br>Las personas LGBTIQ+ son discriminadas en la escuela, en sus familias, en sus centros laborales, esta discriminació también se ve como violencia física llegando al extremo del asesinato.<br>Para hablar de diversidad sexual, tenemos que hablar primero de estereotipos de género. Los estereotipos de género es una visión general y única que se hace sobre las mujeres y los hombres.<br>Imaginemos que los estereotipos son archiveros enormes donde se clasifican a las mujeres y a los hombres por el papel que deben de hacer según la sociedad.</p>
<table><thead><tr><th>Mujeres</th><th>Hombres</th></tr></thead><tbody><tr><td>Las niñas juegan con muñecas</td><td>Los hombres no lloran</td></tr><tr><td>Las mujeres son sensibles y delicadas</td><td>Los hombres deben ser fuertes</td></tr><tr><td>Las mujeres son débiles</td><td>Los niños juegan a las luchas</td></tr><tr><td>Las mujeres cocinan</td><td>Los hombres son toscos</td></tr><tr><td>Las mujeres solo pueden ser madres</td><td>Los hombres no deben cuidar</td></tr></tbody></table>
<p>Esto no quiere decir que ser mujer u hombre esté mal, lo que debemos hablar es que estos estereotipos pueden perjudicar cuando se impone una sola forma de ser y esto genera violencia.
No hay modelos fijos:</p>
',
                'Identidad de género' => '',
                'Identidad' => 'como tú en tu te sientes, piensas sobre ti. 
¿Te sientes mujer?, ¿hombre?, ¿queer?',
                'Orientación sexual' => 'la atracción sexual física, espiritual y emocional,  
¿Nos atraen sexualmente los hombres, las mujeres o ambos?',
                'Expresión de género' => '¿Cómo te muestras al mundo? a través de qué forma actuas, te vistes, te compartas, interactúas',
                'Sexo biologico' => 'se refiere a los órganos, por ejemplo hembra= vagina, ovarios, macho: testiculos, pene, intersexual: una combinación de ambos.',
                'data-2' => '[imagen]
1.- Dibuja en tu cuaderno la galleta
2.- Marca en tu galleta las respuestas a las siguientes preguntas: 
¿Cuál es mi identidad de género?
¿Cuál es mi expresión de género? 
¿Cuál es mi sexo biologico? 
¿Cuál es mi orientación sexual?
3.- Observa tus respuestas 
Hay distintas formas de expresarnos, de identificarnos,de ser, cada una se nombran de una forma: 
',
                'LGBTIQ+' => 'es el acrónimo de Lesbiana, gay (hombres homosexuales), bisexuales, transgénero, intersexuales, queer, el símbolo de + hace referencia para incluir a los colectivos que no estan representados en las siglas anteriores',
                'Travestí' => 'Es aquella que modifica su expresión de género (vestido, uso de accesorios, etc) por ratos, pero que vive el resto de su vida con su sexo y género, no busca cambiar de género ni de sexo puede ser hombre o mujer así como heterosexual, bisexual u homosexual.',
                'Transgenérica' => 'Es aquella que modifica permanentemente su expresión de género (Hombre a Mujer o Mujer a Hombre), vive y se relaciona con la sociedad desde su género adoptado con nombre identidad. puede o no modificar su cuerpo con el uso de hormonas, aceites o cirugías, pueden ser homosexuales, bisexuales o heterosexuales.',
                'Transexual' => 'Es aquella que modifica permanentemente tanto su identidad y expresión de género (nombre, vestido, forma de relacionarse con la sociedad) como su cuerpo a través del uso de hormonas, cirugías u otros. No tiene que modificar forzosamente sus órganos genitales. Las personas transexuales pueden cambiar de Hombre a Mujer o de Mujer a Hombre. También pueden ser Homosexuales, Bisexuales o Heterosexuales.',
                'Heterosexuales' => 'Son personas que se relacionan erótica y afectivamente principalmente con personas del otro sexo.',
                'Homosexuales' => 'Son hombres que se relacionan erótica y afectivamente principalmente con otros hombres. Para mayor información puedes consultar: www.avedemexico.org.mx o www.anodis.com',
                'Lesbianas' => 'Son mujeres que se relacionan erótica y afectivamente principalmente con otras mujeres. Para mayor información puedes consultar: www.laneta.apc.org/concilio/closet.htm',
                'Bisexuales' => 'Son personas que se relacionan erótica y afectivamente con hombres y mujeres.',
                'data-3' => 'La clave: 
“La educación puede utilizarse como un instrumento tanto para perpetuar como para eliminar desigualdades” Rodino (2009)
'
            ],
            'options-1' => [
                'data-1' => 'Mitos y realidades sobre las personas con orientaciones sexuales e identidades de género diversas. 
Lee las siguientes frases y selecciona si esa frase es mito o realidad. 
',
                1 => [
                    'q' => '<p>Las niñas visten de rosa y los niños de azul</p>',
                    '1' => 'Realidad',
                    '0' => 'Mito',
                    'a' => '0',
                    'c' => 'Mito. La orientación y la identidad, es un proceso de autodescubrimiento que se va dando a lo largo de la experiencia, no es algo que se de por influencia o por imitación, al contrario, hablar de diversidad favorece la inclusión, la justicia y ayuda a eliminar la violencia hacia personas de la diversidad, dando oportunidades a todas las personas de poder existir y tener una calidad de vida igualitaria.'
                ],
                2 => [
                    'q' => '<p>Las orientaciones sexuales son enfermedades que se pueden curar</p>',
                    '1' => 'Realidad',
                    '0' => 'Mito',
                    'a' => '0',
                    'c' => 'Mito. El 17 de mayo de 1990, la Asamblea General de la Organización Mundial de la Salud (OMS) eliminó la homosexualidad de su Clasificación Internacional de Enfermedades y en el 2018 se dejó de considerar a la transexualidad como un trastorno.'
                ],
                3 => [
                    'q' => '<p>Ser heterosexual es lo natural </p>',
                    '1' => 'Realidad',
                    '0' => 'Mito',
                    'a' => '0',
                    'c' => 'Mito. Se piensa que la heterosexualidad es la única forma de vivir, relacionarse y se considera “natural”. No hay una única forma de relacionarnos, ni hay una forma natural de ser.'
                ],
                4 => [
                    'q' => '<p>La identidad de género amenaza a la familia </p>',
                    '1' => 'Realidad',
                    '0' => 'Mito',
                    'a' => '0',
                    'c' => 'Mito. Reconocer y garantizar los derechos de todas las personas ayuda a la construcción de familias que no vivan violencia. Los derechos de las personas con orientaciones sexuales e identidades de género diversas no tienen como propósito atentar contra nadie, lo que busca es que todas las personas puedan vivir desde la dignidad y sin violencia.'
                ],
            ],
            'slides-3' => [
                1 => 'Preguntas para reflexionar 

¿Cómo deben actuar las familias con adolescentes que rompen con la apariencia femenina o masculina tradicional?


Las personas jóvenes tienen derecho a vestirse, peinarse, maquillarse, comportarse y nombrarse como se sientan más cómodas y felices, Esto simplemente puede ser una forma de manifestar y expresar su identidad y personalidad, sin que necesariamente signifique que “es gay”, pues su manera de verse y actuar nada tiene que ver con su orientación sexual, es decir, con la atracción afectiva y sexual que siente hacia alguien.



¿Cómo pueden las familias brindar apoyo y orientación a adolescentes lesbianas, gays, bisexuales, pansexuales y asexuales?

Las personas jóvenes tienen derecho a que se respete su orientación sexual, es decir, la atracción física, emocional y sexual que sienten hacia determinadas personas. Algunas personas jóvenes pueden sentirse cómodas con estas etiquetas, pero NO es forzoso que se identifiquen con alguna, sólo son una forma de nombrar experiencias similares y recordar que no están solas, pues otras personas viven algo parecido.
',
                2 => 'Consulta 


Resoluciones de las Naciones Unidas sobre orientación sexual, identidad de género y características sexuales, Disponible https://www.ohchr.org/es/sexual-orientation-and-gender-identity/united-nations-resolutions-sexual-orientation-gender-identity-and-sex-characteristics 
Naciones Unidas, Personas LGBTIQ+, Disponible en: https://www.un.org/es/lgbtiq-people
LGBTIQ+, Libres e iguales, NO criminalizad@s, Disponible en:  https://www.un.org/es/fight-racism/vulnerable-groups/lgbtqi-plus 
Glosario de las diversidades sexogenéricas.LGBTIQ+, Disponible en: https://coordinaciongenero.unam.mx/avada_portfolio/glosario-de-las-diversidades-sexogenericas-lgbtiq/ 
Cuaderno sobre diversidad sexual y derechos humanos, todas diversas, iguales en derechos, Disponible en: https://hchr.org.mx/wp/wp-content/themes/hchr/images/doc_pub/CuadernoSobreDiversidadSexualyDerechosHumanos.pdf 

Rodino, Ana María (2009), La educación con enfoque de derechos humanos como práctica constructora de inclusión social, disponible en: https://www.corteidh.or.cr/tablas/r34228.pdf 
Amnistía Internacional, LGBTIQ+: ¿Cuál es el significado de cada letra?, disponible en: https://www.es.amnesty.org/en-que-estamos/blog/historia/articulo/lgbtiq-significado-cada-letra/ 
Estereotipos de género, Disponible en: https://www.ohchr.org/es/women/gender-stereotyping#:~:text=Un%20estereotipo%20de%20g%C3%A9nero%20es,las%20mujeres%20y%20los%20hombres.'
            ],
            'slides-4' => [
                1 => '¿Conoces qué son los derechos sexuales y reproductivos?


¿Es lo mismo sexo, salud sexual, sexualidad y derechos sexuales?

Para que exista uno, deben existir los demás.
El sexo son las características biológicas que nos definen y diferencian como mujeres u hombres.
La Organización Mundial de la Salud señala: Aunque estos conjuntos de características biológicas no son excluyentes entre sí, ya que hay personas que poseen características de ambos conjuntos, estos tienden a diferenciar a los seres humanos como hombres o mujeres.En el uso general de muchos idiomas, el término «sexo» significa «actividad sexual», pero a los fines técnicos, en el contexto de las deliberaciones sobre sexualidad y salud sexual, se prefiere la definición precedente.',
                2 => 'La salud sexual hace referencia al estado de bienestar físico, mental y social en relación con la sexualidad.

La Organización Mundial de la Salud señala: La salud sexual requiere un enfoque positivo y respetuoso de la sexualidad y de las relaciones sexuales, así como la posibilidad de tener experiencias sexuales placenteras y seguras, libres de toda coacción, discriminación y violencia. Para que la salud sexual se logre y se mantenga, los derechos sexuales de todas las personas deben ser respetados, protegidos y ejercidos a plenitud.

Entonces ¿dónde queda la sexualidad? 
',
                3 => 'La sexualidad es parte importante pero debe considerarse en un sentido amplio, no como un elemento solitario:

¿Qué nos dice la Organización Mundial de la Salud?, “la salud sexual no se puede definir, comprender ni poner en práctica si no se considera la sexualidad en sentido amplio, como un elemento subyacente de importantes comportamientos y resultados relativos a la salud sexual. Según la definición de trabajo, la sexualidad es:
«...un aspecto central del ser humano, presente a lo largo de su vida. Abarca al sexo, las identidades y los papeles de género, el erotismo, el placer, la intimidad, la reproducción y la orientación sexual. Se vivencia y se expresa a través de pensamientos, fantasías, deseos, creencias, actitudes, valores, conductas, prácticas, papeles y relaciones interpersonales. La sexualidad puede incluir todas estas dimensiones, no obstante, no todas ellas se vivencian o se expresan siempre. La sexualidad está influida por la interacción de factores biológicos, psicológicos, sociales, económicos, políticos, culturales, éticos, legales, históricos, religiosos y espirituales »”
',
                4 => 'Y llegamos a los derechos sexuales, la salud sexual no se puede alcanzar y lograr sin el respeto y la protección de los derechos humanos.
“Los derechos sexuales constituyen la aplicación de los derechos humanos existentes a la sexualidad y a la salud sexual. Protegen el derecho de todas las personas a satisfacer y expresar su sexualidad y a disfrutar de la salud sexual, con el debido respeto por los derechos de los demás, dentro de un marco de protección frente a la discriminación»”
',
                5 => '¿Qué dicen los datos sobre la educación sexual integral? 
La educación sexual tiene efectos positivos, como el reforzamiento de los conocimientos de los jóvenes y la mejora de sus actitudes en relación con la salud y los comportamientos sexuales y reproductivos.


La educación sexual hace que los educandos retrasen la edad de su iniciación sexual, aumenten el uso de los preservativos y otros anticonceptivos cuando son sexualmente activos, aumenten sus conocimientos sobre su propio cuerpo y sus relaciones, disminuyan la toma de riesgos y reduzcan la frecuencia de las relaciones sexuales sin protección.


La educación sexual integral tiene cinco veces más probabilidades de éxito en la prevención de embarazos no deseados y enfermedades de transmisión sexual cuando presta atención explícita a los temas de género y poder.


Información retomada de: Educación integral en sexualidad: Para educandos sanos, informados y empoderados, disponible en https://www.unesco.org/es/health-education/cse ',
                6 => '¿Qué ideas debemos evitar respecto a la educación integral en sexualidad?

La educación integral en sexualidad no sólo es hablar de sexo, ni debe ser un tabú que sólo se habla en la intimidad de cada familia o incluso en ocasiones no se habla de ello.


Esta educación no interfiere con los valores y educación que cada familia proporciona a sus hijas e hijos, no vulnera su inocencia, ni estimula la iniciación sexual temprana.


Dar información sobre métodos antifecundativos a las y los adolescentes, no es fomentar que los usen. Las niñas, niños y adolescentes informados sobre educación integral en sexualidad no son cada vez más precoces y sexualmente irresponsables.


Creer que la educación integral en sexualidad no es prioritaria en la currícula educativa contribuye de manera negativa al desempeño de las y los estudiantes.


Creer que las adolescentes que se embarazan sin planearlo, es porque fueron irresponsables o no se cuidaron.


No todas las mujeres que se embarazan finalmente acaban deseando la maternidad y aceptando el embarazo.
'
            ],
            'options-2' => [
                'data-1' => 'Identifica la red flag (bandera roja) de cada situación 
¿Qué es una red flag?, es una señal de alerta. 
',
                1 => [
                    'q' => '<p>La falta de empatía</p>',
                    '1' => '<i class="fas fa-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '1',
                    'c' => 'La falta de empatía por parte de tu pareja es una gran red flag. La empatía es muy importante, implica ponerse en el lugar del otro, comprender sus emociones y actuar con consideración.'
                ],
                2 => [
                    'q' => '<p>Tu pareja no muestra interés en cómo te sientes o en tus emociones durante la experiencia sexual</p>',
                    '1' => '<i class="fas fa-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '1',
                    'c' => 'No pregunta, no se interesa, es una gran red flag. 
Debe existir interés en lo que sientes y deseas, en tus tiempos, comodidad.'
                ],
                3 => [
                    'q' => '<p>El espeto mutuo</p>',
                    '1' => '<i class="fas fa-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '0',
                    'c' => 'El respeto mutuo es la base de cualquier relación saludable.'
                ],
                4 => [
                    'q' => '<p>No hubo escucha activa en mi primera vez</p>',
                    '1' => '<i class="fas fa-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '1',
                    'c' => '¿Es tu primera vez?, la comunicación es importante. 
Una red flag de falta de comunicación ocurre cuando tu pareja no presta atención a tus palabras, deseos o preocupaciones.'
                ],
                5 => [
                    'q' => '<p>Falta de prevención: riesgos para la salud</p>',
                    '1' => '<i class="fas fa-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '1',
                    'c' => 'Super red flag, la falta de prevención pone en riesgo la salud de ambos desde una infección de transmisión sexual o un embarazo adolescente. 
La prevención es responsabilidad de ambas personas.'
                ],
                6 => [
                    'q' => '<p>Escucha a tu intuición y busca el bienestar emocional</p>',
                    '1' => '<i class="fas fa-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '0',
                    'c' => 'Tu bienestar físico y emocional siempre será lo más importante. Si algo no se siente bien o si percibes que tu pareja no está actuando con respeto y consideración, es importante escuchar a tu intuición.'
                ],
            ],
            'slides-5' => [
                1 => '“Cada 20 segundos 1 adolescente se convierte en madre” UNFPA en América Latina y el Caribe 
“Cada año, unos 21 millones de chicas de entre 15 y 19 años se quedan embarazadas en las regiones en desarrollo y aproximadamente 12 millones de ellas dan a luz” Sully EA, Biddlecom A, Daroch J, Riley T, Ashford L, Lince-Deroche N et al., Adding It Up: Investing in Sexual and Reproductive Health 2019. Nueva York: Guttmacher Institute; 2020.
“La encuesta de Salud Escolar realizada en el 2014 reportó que un 24% de adolescentes eran madres o estaban embarazadas al momento de realizar la encuesta, oscilando entre 19.2% en áreas urbanas y 29.3% en áreas rurales; en tanto que por quintil de riqueza, la distribución es de 10.8% en el quintil superior y de 35.4% en el quintil inferior. La última ENDESA reporta que un 3.6% de la población menor de 15 años ha dado a luz alguna vez y un 2.7% estaban embarazadas; 12 lo que legalmente se constituye en un delito, por considerarse producto de abuso sexual”
Los embarazos tempranos se pueden prevenir si brindamos información para decidir 
',
                2 => '¿Tener una hija o hijo es un riesgo?, ¿un problema?, claro que no, pero si es un riesgo para tu salud, desarrollo, bienestar tener una hija o hijo siendo adolescente. 
“El riesgo de quedar embarazada durante la adolescencia afecta desproporcionadamente a las chicas indígenas, afrodescendientes, de zonas rurales o remotas y de comunidades con bajos ingresos. Por ejemplo, las adolescentes afrodescendientes tienen un 50% más de probabilidades de ser madres que sus pares no afrodescendientes.
En las comunidades más dejadas atrás, los tabúes, silencios y normas sociales dificultan a las adolescentes recibir educación integral de la sexualidad, servicios de salud culturalmente pertinentes y opciones para hacer realidad sus proyectos de vida”  UNFPA en América Latina y el Caribe 
',
                3 => 'Te invitamos a ver el vídeo 
<iframe width="480" height="400" src="https://www.youtube.com/embed/yubGD6f8Vps?autoplay=1&mute=1" title="YouTube" frameborder="0" allowfullscreen></iframe>',
                4 => 'Seguramente te han dicho que la maternidad en la adolescencia afecta la salud física-reproductiva y mental de las mujeres jóvenes, el ritmo y la dirección del desarrollo de un país. La maternidad temprana obstaculiza las perspectivas educativas de una mujer joven, aminora su autonomía social y económica de largo plazo, y compromete tanto su salud como la de su recién nacido.',
                5 => 'La prevención del embarazo en adolescentes incluye acciones en el área de salud sexual y reproductiva, pero no se limita solamente a ellas, sino que requiere de un abordaje integral y multisectorial en el que se incorporen acciones orientadas a fortalecer la equidad de género, erradicar la violencia de género y la violencia sexual, mejorar el nivel educativo de la población, especialmente de las mujeres y crear oportunidades de generación de ingresos para jóvenes y adolescentes.
La educación, la información, el acceso al derecho a la salud son las herramientas para elegir


GAIE, para que cada persona joven alcance su pleno desarrollo https://youtu.be/d5_g_xRMAmU ',
            ],
            'slides-6' => [
                1 => '1.-Busca a una persona adulta de tu familia que tenga hijas o hijos con quien puedas platicar.
2.- Toma laìz y papel y realiza la siguiente entrevista. Las siguientes preguntas te ayudarán a guiar la conversación. 
1.- Cuándo tenías mi edad, ¿qué tipo de información te daban sobre educación sexual?
2.- ¿Alguien te habló del embarazo y tener hijas e hijos?
3.- ¿Cuáles han sido los retos de ser madre o padre?
4.- ¿Te hubiera gustado tener más información cuando tenías mi edad?
Invita a la persona adulta a consultar el bloque de información para Madres y Padres. 
3.- Agradece a la persona que ha respondido tus preguntas
4.- Lee las respuestas que la persona entrevistada te dio y reflexiona: 
¿Qué información tienes ahora que antes no había? 
¿En este momento tienes la posibilidad económica, la salud, la información suficiente para ser madre o padre?
¿Qué información necesitas o te hace falta?, no te preocupes, continua en este sitio web, tenemos más información para ti.
'
            ],
            'slides-7' => [
                1 => 'Planificar es importante y la clave para decidir, debes tener toda la información para poder decidir, nadie puede obligarte a tener relaciones sexuales si tu no quieres y no estas deacuerdo. 

¿Te gustaría casarte? 
¿A qué edad? 
¿Te gustaría tener hijas e hijos? ¿cuántos?
Hoy ¿tienes lo necesario para garantizar el bienestar de tus hijas e hijos?
¿Crees que no es momento para tener hijas o hijos?, está bien, no hay prisa. Tu sabrás cuando es el momento.
Por eso para decidir debes tener toda la información para tomar una decisión pero también debes de preguntarte que quieres., continua en este sitio web DerechosESI donde tendrás información sobre métodos anticonceptivos y enfermedades de transmisión sexual.
',
2 => 'Consulta 
Embarazo Adolescente, UNFPA en América Latina y el Caribe, disponible en: https://lac.unfpa.org/es/topics/embarazo-en-adolescentes 


Maternidad temprana y redes de afectos: ¿quiénes cuidan a las niñas que cuidan?, disponible en https://lac.unfpa.org/es/news/maternidad-temprana-redes-de-afectos-cuidar-ninas-que-cuidan 
Anahí recibe información útil para planificar su futuro como parte de un proyecto destinado a reducir los embarazos en adolescentes, disponible en https://lac.unfpa.org/es/news/anahi-recibe-informacion-para-planificar-su-futuro-proyecto-reduccion-embarazos-en-adolescentes 
Embarazo en adolescentes en América Latina y el Caribe: En busca de justicia reproductiva para mujeres y niñas afrodescendientes, disponible en https://lac.unfpa.org/es/news/embarazo-en-adolescentes-buscando-justicia-reproductiva-afrodescendientes 
La prevención del embarazo no intencional está mejorando la vida de las adolescentes en Bolivia, disponible en https://lac.unfpa.org/es/news/prevencion-embarazo-no-intencional-bolivia
'
],
'accordion-2' => [
    'data-1' => '¿Ya llegó Andres? 
Estoy en mis lunas
Ya me bajo
Anda en sus días 


¿Te acuerdas de la primera vez que tuviste tu ciclo menstrual?, es muy probable que muchas de las frases con las que iniciamos este bloque las hayas escuchado o te las han dicho en algún momento de tu juventud y es que hablar del ciclo menstrual ….
shhhhhhh no se habla o se habla en voz baja….. 
Si eres hombre y estás leyendo este bloque, te invitamos a que sigas leyendo, el ciclo menstrual también es información para ti. 
El ciclo menstrual no es un tema que nos deba dar miedo, al contrario es parte de conocer tu cuerpo, saber cómo te sientes o cómo se siente tu pareja, y que los cambios en el cuerpo son naturales, no hay nada de qué asustarnos. 
',
'¿Qué es la menstruación?' => 'Es un proceso en el cual el útero desprende sangre y tejido por la vagina durante 2 a 5 días pueden ser más días, sí sale sangre y no azul como muchos anuncios en televisión lo han mostrado por años.',
'Pre-ovulación' => 'Es la fase después de la menstruación en la que madura uno de los óvulos que se encuentra dentro de los ovarios. Se presenta entre los días 6 y 13 del ciclo. De forma natural, el cuello uterino genera un moco que lubrica la vagina ayudando a los espermatozoides a llegar al óvulo para fecundarlo. En esta fase el moco vaginal es escaso, de consistencia pegajosa y de aspecto blanquecino o amarillento.',
'Ovulación' => 'El óvulo madura y es liberado hacia el útero, a través de las Trompas de Falopio, haciendo que los niveles de hormonas aumenten y ayuden a preparar el recubrimiento del útero para el embarazo. En esta fase, el moco vaginal es abundante, elástico y tiene el aspecto de una clara de huevo.',
'Post-Ovulación' => 'En esta fase, los niveles de hormonas comienzan a bajar y algunas mujeres pueden presentar el síndrome premenstrual. Notarás que el moco vaginal vuelve a presentar características similares a las de la fase de Pre-ovulación. Si el óvulo no es fecundado, será expulsado en la próxima menstruación.'
],

        ];

        return $data;
    }
}