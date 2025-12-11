<?php
namespace Model;

use Model\Database;

class JovenesModel extends Model {

    private Database $db;

    public function getActividades() {
        $data = [
            'slides-1' => [
                1 => '<p class="cabecera-bold"> Derechos Humanos </p>
<p >Cuándo escuchas hablar de Derechos humanos ¿Qué te imaginas? </br>
Los Derechos Humanos son el conjunto de prerrogativas sustentadas en la dignidad humana, cuya realización efectiva resulta indispensable para el desarrollo integral de la persona. Este conjunto de prerrogativas se encuentra establecido dentro del orden jurídico nacional, en nuestra Constitución Política, tratados internacionales y leyes.</p>

',
                2 => '<p>Actividad: </br>

1.- Busca lápiz y papel</br>
2.- Dibuja una línea y dividela en 20 espacios </br>
3.- Vas a encontrar una lista de frases y cada frase tiene la cantidad de espacios que tienes que avanzar o retroceder.</p>
',
                3 => '	<p class="cabecera-bold"> ¿Comenzamos? </p>
	<p> 
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
20.- Retrocede un espacio si tienes alguna discapacidad</p>
',
                4 => '<p> Observa la línea que dibujaste, ¿en qué parte de la línea te quedaste? 
Los derechos de las personas no se pueden medir como una línea de espacios, todas las personas tenemos derechos y se deben reconocer y garantizar sin distinción alguna de nacionalidad, lugar de residencia, sexo, origen nacional o étnico, color, religión, lengua, o cualquier otra condición. Todas y todos tenemos los mismos derechos humanos, sin discriminación alguna. Estos derechos son interrelacionados, interdependientes e indivisibles.
La Declaración Universal de Derechos Humanos en su artículo 1 dice “Todos los seres humanos nacen libres e iguales en dignidad y derechos y, dotados como están de razón y conciencia, deben comportarse fraternalmente los unos con los otros”

Los derechos humanos = la dignidad que todas las personas tenemos </p>
',
                5 => '<p>¿Sabes qué dice el artículo 59 y 60 de la Constitución de Honduras? 
ARTÍCULO 59.- La persona humana es el fin supremo de la sociedad y del Estado. Todos tienen la obligación de respetarla y protegerla. La dignidad del ser humano es inviolable. Para garantizar los derechos y libertades reconocidos en esta Constitución, créase la Institución del Comisionado Nacional de los Derechos Humanos. La organización, prerrogativa y atribuciones del Comisionado Nacional de los Derechos Humanos será objeto de una ley especial.
ARTÍCULO 60.- Todos los hombres nacen libres e iguales en derechos. En Honduras no hay clases privilegiadas. Todos los hondureños son iguales ante la Ley.

¿Los conocías? 

Consulta: 
Naciones Unidas Derechos Humanos, oficina del alto Comisionado, Honduras, ¿En qué consisten los derechos humanos?, disponible en:
<span class="btn-enlace"><a href="https://oacnudh.hn/derechos-humanos-2/"target="_blank">Ir a información</a></span></p>

',
            ],
            'casillas-1' => [
                'data-1' => '<p class="cuerpo-texto cabecera-bold p-bottom" >Discriminación</p>

	<p class="cuerpo-texto p-bottom"> Lee la siguiente frase: 

La discriminación vulnera la dignidad humana <br>

Piensa en la frase que acabas y realiza la siguiente actividad </p>',
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
                1 => '	<p> Todas las frases que leíste en el ejercicio hacen referencia a la discriminación. La discrimianción afecta directamente los derechos de las personas por simplemente ser, por como se ve, por sus creencias.
“La discriminación tiene lugar cuando una persona no puede disfrutar de sus derechos humanos o de otros derechos legales en condiciones de igualdad con otras personas debido a una distinción injustificada” Discriminación, Amnistía Internacional,<br> 
Disponible en:
<span class="btn-enlace"><a href="https://www.amnesty.org/es/what-we-do/discrimination/" target="_blank">Ir a información</a></span>
 
Todas las personas tenemos derecho a ser tratados por igual, sin importar nuestra raza, nacionanidad, clase, religión, sexo, genero, orientación sexual, identdiadd de género, edad, estado de salud. 
</p>',
                2 => '	<p> “La discriminación en América Central tiene lugar en diferentes vertientes. De un lado, persiste la discriminación racial contra los pueblos indígenas y los afrodescendientes, que permea las esferas públicas y privadas, incluidos los sectores de educación, salud, servicios y medios de comunicación. Por otro lado, también hay discriminación contra muchos otros colectivos, tales como las mujeres, los migrantes, los discapacitados y los GLBTT. En este marco, es importante recordar que cuando varios factores de discriminación convergen se produce una múltiple discriminación, que hace a la víctima aún más vulnerable a las violaciones de sus derechos. Así, en los casos más comunes, la discriminación se convierte en impedimento para el desarrollo personal y profesional y, en aquellos más extremos, las actitudes discriminatorias pueden resultar en atentados directos contra la libertad e integridad física de las personas, e incluso su vida” Discriminación, Naciones Unidas, <br>
                Disponible en:
                    <span class="btn-enlace"><a href="https://www.oacnudh.org/areas-de-trabajo/discriminacion/" target="_blank">Ir a información</a></span>  
</p>',
                3 => '<p> ¿Por qué hablamos de discriminación en la plataforma Derechos ESI Honduras? 

Todas las personas tenemos los mismos derechos, los derechos sexuales son derechos humanos y si se prohibe el acceso a atención medica, a metodos anticonceptivos, a información sobre embarazo, se nos niega atención médica, información acompañamiento por nuestro color de piel, por nuestra edad, todo esto es discriminación. 

Nos toca a todas las personas exigir que se garanticen y reconozcan nuestros derechos. 
</p>',
                4 => '<p class="cabecera-bold"> Consulta </p>
	<p> La discriminación vulnera la dignidad humana, Gaceta UNAM, 
    Disponible en: 
    <span class="btn-enlace"><a href="https://www.gaceta.unam.mx/la-discriminacion-vulnera-la-dignidad-humana/" target="_blank">Ir a información</a></span>
     
Discriminación, Naciones Unidas,
Disponible en:
<span class="btn-enlace"><a href=" https://www.oacnudh.org/areas-de-trabajo/discriminacion/" target="_blank">Ir a información</a></span>
 
La discriminación y el derecho a la no discriminación,
Disponible en:
<span class="btn-enlace"><a href="https://www.cndh.org.mx/sites/all/doc/cartillas/2015-2016/43-discriminacion-dh.pdf" target="_blank">Ir a información</a></span>
 
</p>'],
            'accordion-1' => [
                'data-1' => '<p class="cabecera-one cabecera-bold">¿Qué es la diversidad?</p><p>Hablar de diversidad sexual no debería ser incómodo. Todas las personas merecen los mismos derechos, vivir una vida libre de violencia, sin discriminacón, acoso y eso incluye a las personas LGBTIQ+.<br>Lamentablemente…<br>Las personas LGBTIQ+ son discriminadas en la escuela, en sus familias, en sus centros laborales, esta discriminació también se ve como violencia física llegando al extremo del asesinato.<br>Para hablar de diversidad sexual, tenemos que hablar primero de estereotipos de género. Los estereotipos de género es una visión general y única que se hace sobre las mujeres y los hombres.<br>Imaginemos que los estereotipos son archiveros enormes donde se clasifican a las mujeres y a los hombres por el papel que deben de hacer según la sociedad.</p>
<table><thead ><tr><th>Mujeres</th><th>Hombres</th></tr></thead><tbody><tr><td>Las niñas juegan con muñecas</td><td>Los hombres no lloran</td></tr><tr><td>Las mujeres son sensibles y delicadas</td><td>Los hombres deben ser fuertes</td></tr><tr><td>Las mujeres son débiles</td><td>Los niños juegan a las luchas</td></tr><tr><td>Las mujeres cocinan</td><td>Los hombres son toscos</td></tr><tr><td>Las mujeres solo pueden ser madres</td><td>Los hombres no deben cuidar</td></tr></tbody></table>
<p>Esto no quiere decir que ser mujer u hombre esté mal, lo que debemos hablar es que estos estereotipos pueden perjudicar cuando se impone una sola forma de ser y esto genera violencia.
No hay modelos fijos:</p>
',
                'Identidad de género' => 'como tú en tu te sientes, piensas sobre ti. 
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
<p 	class="p-bottom"> Hay distintas formas de expresarnos, de identificarnos,de ser, cada una se nombran de una forma: 
</p>',
                'LGBTIQ+' => 'es el acrónimo de Lesbiana, gay (hombres homosexuales), bisexuales, transgénero, intersexuales, queer, el símbolo de + hace referencia para incluir a los colectivos que no estan representados en las siglas anteriores',
                'Travestí' => 'Es aquella que modifica su expresión de género (vestido, uso de accesorios, etc) por ratos, pero que vive el resto de su vida con su sexo y género, no busca cambiar de género ni de sexo puede ser hombre o mujer así como heterosexual, bisexual u homosexual.',
                'Transgenérica' => 'Es aquella que modifica permanentemente su expresión de género (Hombre a Mujer o Mujer a Hombre), vive y se relaciona con la sociedad desde su género adoptado con nombre identidad. puede o no modificar su cuerpo con el uso de hormonas, aceites o cirugías, pueden ser homosexuales, bisexuales o heterosexuales.',
                'Transexual' => 'Es aquella que modifica permanentemente tanto su identidad y expresión de género (nombre, vestido, forma de relacionarse con la sociedad) como su cuerpo a través del uso de hormonas, cirugías u otros. No tiene que modificar forzosamente sus órganos genitales. Las personas transexuales pueden cambiar de Hombre a Mujer o de Mujer a Hombre. También pueden ser Homosexuales, Bisexuales o Heterosexuales.',
                'Heterosexuales' => 'Son personas que se relacionan erótica y afectivamente principalmente con personas del otro sexo.',
                'Homosexuales' => 'Son hombres que se relacionan erótica y afectivamente principalmente con otros hombres. Para mayor información puedes consultar: www.avedemexico.org.mx o www.anodis.com',
                'Lesbianas' => 'Son mujeres que se relacionan erótica y afectivamente principalmente con otras mujeres. Para mayor información puedes consultar: www.laneta.apc.org/concilio/closet.htm',
                'Bisexuales' => 'Son personas que se relacionan erótica y afectivamente con hombres y mujeres.',
                'data-3' => '<p class="p-bottom"> La clave: 
“La educación puede utilizarse como un instrumento tanto para perpetuar como para eliminar desigualdades” Rodino (2009)
</p>'
            ],
            'options-1' => [
                'data-1' => '<p class="p-bottom" > Mitos y realidades sobre las personas con orientaciones sexuales e identidades de género diversas. 
Lee las siguientes frases y selecciona si esa frase es mito o realidad. </p>
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
                1 => '<p class="cabecera-bold"> Preguntas para reflexionar </p>

<p>¿Cómo deben actuar las familias con adolescentes que rompen con la apariencia femenina o masculina tradicional?

Las personas jóvenes tienen derecho a vestirse, peinarse, maquillarse, comportarse y nombrarse como se sientan más cómodas y felices, Esto simplemente puede ser una forma de manifestar y expresar su identidad y personalidad, sin que necesariamente signifique que “es gay”, pues su manera de verse y actuar nada tiene que ver con su orientación sexual, es decir, con la atracción afectiva y sexual que siente hacia alguien.


¿Cómo pueden las familias brindar apoyo y orientación a adolescentes lesbianas, gays, bisexuales, pansexuales y asexuales?

Las personas jóvenes tienen derecho a que se respete su orientación sexual, es decir, la atracción física, emocional y sexual que sienten hacia determinadas personas. Algunas personas jóvenes pueden sentirse cómodas con estas etiquetas, pero NO es forzoso que se identifiquen con alguna, sólo son una forma de nombrar experiencias similares y recordar que no están solas, pues otras personas viven algo parecido.
</p>',
                2 => '	<p class="cabecera-bold"> Consulta  </p>

<p>Resoluciones de las Naciones Unidas sobre orientación sexual, identidad de género y características sexuales, 
Disponible en:
<span class="btn-enlace"><a href="https://www.ohchr.org/es/sexual-orientation-and-gender-identity/united-nations-resolutions-sexual-orientation-gender-identity-and-sex-characteristics" target="_blank">Ir a información</a></span>

Naciones Unidas, Personas LGBTIQ+, 
Disponible en: 
<span class="btn-enlace"><a href="https://www.un.org/es/lgbtiq-people" target="_blank">Ir a información</a></span>
LGBTIQ+, Libres e iguales, NO criminalizad@s, 
Disponible en: 
<span class="btn-enlace"><a href="https://www.un.org/es/fight-racism/vulnerable-groups/lgbtqi-plus" target="_blank">Ir a información</a></span> 
 
Glosario de las diversidades sexogenéricas.LGBTIQ+, 
Disponible en: 
<span class="btn-enlace"><a href="https://coordinaciongenero.unam.mx/avada_portfolio/glosario-de-las-diversidades-sexogenericas-lgbtiq/" target="_blank">Ir a información</a></span>

Cuaderno sobre diversidad sexual y derechos humanos, todas diversas, iguales en derechos, 
Disponible en: 
<span class="btn-enlace"><a href="https://hchr.org.mx/wp/wp-content/themes/hchr/images/doc_pub/CuadernoSobreDiversidadSexualyDerechosHumanos.pdf" target="_blank">Ir a información</a></span>

Rodino, Ana María (2009), La educación con enfoque de derechos humanos como práctica constructora de inclusión social, 
Disponible en: 
<span class="btn-enlace"><a href="https://www.corteidh.or.cr/tablas/r34228.pdf " target="_blank">Ir a información</a></span>

Amnistía Internacional, LGBTIQ+: ¿Cuál es el significado de cada letra?, 
Disponible en: 
<span class="btn-enlace"><a href="https://www.es.amnesty.org/en-que-estamos/blog/historia/articulo/lgbtiq-significado-cada-letra/" target="_blank">Ir a información</a></span>

Estereotipos de género, 
Disponible en:
<span class="btn-enlace"><a href="https://www.ohchr.org/es/women/gender-stereotyping#:~:text=Un%20estereotipo%20de%20g%C3%A9nero%20es,las%20mujeres%20y%20los%20hombres." target="_blank">Ir a información</a></span> 
</p>'
            ],
            'slides-4' => [
                1 => '<p class="cabecera-bold" > ¿Conoces qué son los derechos sexuales y reproductivos?</p>


	<p> ¿Es lo mismo sexo, salud sexual, sexualidad y derechos sexuales?

Para que exista uno, deben existir los demás.
El sexo son las características biológicas que nos definen y diferencian como mujeres u hombres.
La Organización Mundial de la Salud señala: Aunque estos conjuntos de características biológicas no son excluyentes entre sí, ya que hay personas que poseen características de ambos conjuntos, estos tienden a diferenciar a los seres humanos como hombres o mujeres.En el uso general de muchos idiomas, el término «sexo» significa «actividad sexual», pero a los fines técnicos, en el contexto de las deliberaciones sobre sexualidad y salud sexual, se prefiere la definición precedente.</p>',
                2 => '	<p> La salud sexual hace referencia al estado de bienestar físico, mental y social en relación con la sexualidad.

La Organización Mundial de la Salud señala: La salud sexual requiere un enfoque positivo y respetuoso de la sexualidad y de las relaciones sexuales, así como la posibilidad de tener experiencias sexuales placenteras y seguras, libres de toda coacción, discriminación y violencia. Para que la salud sexual se logre y se mantenga, los derechos sexuales de todas las personas deben ser respetados, protegidos y ejercidos a plenitud.

Entonces ¿dónde queda la sexualidad? </p>
',
                3 => '	<p>La sexualidad es parte importante pero debe considerarse en un sentido amplio, no como un elemento solitario:

¿Qué nos dice la Organización Mundial de la Salud?, “la salud sexual no se puede definir, comprender ni poner en práctica si no se considera la sexualidad en sentido amplio, como un elemento subyacente de importantes comportamientos y resultados relativos a la salud sexual. Según la definición de trabajo, la sexualidad es:
«...un aspecto central del ser humano, presente a lo largo de su vida. Abarca al sexo, las identidades y los papeles de género, el erotismo, el placer, la intimidad, la reproducción y la orientación sexual. Se vivencia y se expresa a través de pensamientos, fantasías, deseos, creencias, actitudes, valores, conductas, prácticas, papeles y relaciones interpersonales. La sexualidad puede incluir todas estas dimensiones, no obstante, no todas ellas se vivencian o se expresan siempre. La sexualidad está influida por la interacción de factores biológicos, psicológicos, sociales, económicos, políticos, culturales, éticos, legales, históricos, religiosos y espirituales »”
 </p>',
                4 => '	<p> Y llegamos a los derechos sexuales, la salud sexual no se puede alcanzar y lograr sin el respeto y la protección de los derechos humanos.
“Los derechos sexuales constituyen la aplicación de los derechos humanos existentes a la sexualidad y a la salud sexual. Protegen el derecho de todas las personas a satisfacer y expresar su sexualidad y a disfrutar de la salud sexual, con el debido respeto por los derechos de los demás, dentro de un marco de protección frente a la discriminación»”
</p>',
                5 => '	<p>¿Qué dicen los datos sobre la educación sexual integral? 
La educación sexual tiene efectos positivos, como el reforzamiento de los conocimientos de los jóvenes y la mejora de sus actitudes en relación con la salud y los comportamientos sexuales y reproductivos.

La educación sexual hace que los educandos retrasen la edad de su iniciación sexual, aumenten el uso de los preservativos y otros anticonceptivos cuando son sexualmente activos, aumenten sus conocimientos sobre su propio cuerpo y sus relaciones, disminuyan la toma de riesgos y reduzcan la frecuencia de las relaciones sexuales sin protección.

La educación sexual integral tiene cinco veces más probabilidades de éxito en la prevención de embarazos no deseados y enfermedades de transmisión sexual cuando presta atención explícita a los temas de género y poder.

Información retomada de: Educación integral en sexualidad: Para educandos sanos, informados y empoderados, 
Disponible en 
<span class="btn-enlace"><a href="https://www.unesco.org/es/health-education/cse" target="_blank">Ir a información</a></span>
 </p>',
                6 => '<p> ¿Qué ideas debemos evitar respecto a la educación integral en sexualidad?

La educación integral en sexualidad no sólo es hablar de sexo, ni debe ser un tabú que sólo se habla en la intimidad de cada familia o incluso en ocasiones no se habla de ello.

Esta educación no interfiere con los valores y educación que cada familia proporciona a sus hijas e hijos, no vulnera su inocencia, ni estimula la iniciación sexual temprana.

Dar información sobre métodos antifecundativos a las y los adolescentes, no es fomentar que los usen. Las niñas, niños y adolescentes informados sobre educación integral en sexualidad no son cada vez más precoces y sexualmente irresponsables.

Creer que la educación integral en sexualidad no es prioritaria en la currícula educativa contribuye de manera negativa al desempeño de las y los estudiantes.

Creer que las adolescentes que se embarazan sin planearlo, es porque fueron irresponsables o no se cuidaron.

No todas las mujeres que se embarazan finalmente acaban deseando la maternidad y aceptando el embarazo.
</p>'
            ],
            'options-2' => [
                'data-1' => '<p class="p-bottom"> Identifica la red flag (bandera roja) de cada situación 
¿Qué es una red flag?, es una señal de alerta. </p>
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
                1 => '<p> “Cada 20 segundos 1 adolescente se convierte en madre” UNFPA en América Latina y el Caribe 
“Cada año, unos 21 millones de chicas de entre 15 y 19 años se quedan embarazadas en las regiones en desarrollo y aproximadamente 12 millones de ellas dan a luz” Sully EA, Biddlecom A, Daroch J, Riley T, Ashford L, Lince-Deroche N et al., Adding It Up: Investing in Sexual and Reproductive Health 2019. Nueva York: Guttmacher Institute; 2020.
“La encuesta de Salud Escolar realizada en el 2014 reportó que un 24% de adolescentes eran madres o estaban embarazadas al momento de realizar la encuesta, oscilando entre 19.2% en áreas urbanas y 29.3% en áreas rurales; en tanto que por quintil de riqueza, la distribución es de 10.8% en el quintil superior y de 35.4% en el quintil inferior. La última ENDESA reporta que un 3.6% de la población menor de 15 años ha dado a luz alguna vez y un 2.7% estaban embarazadas; 12 lo que legalmente se constituye en un delito, por considerarse producto de abuso sexual”
Los embarazos tempranos se pueden prevenir si brindamos información para decidir </p>
',
                2 => '	<p> ¿Tener una hija o hijo es un riesgo?, ¿un problema?, claro que no, pero si es un riesgo para tu salud, desarrollo, bienestar tener una hija o hijo siendo adolescente. 
“El riesgo de quedar embarazada durante la adolescencia afecta desproporcionadamente a las chicas indígenas, afrodescendientes, de zonas rurales o remotas y de comunidades con bajos ingresos. Por ejemplo, las adolescentes afrodescendientes tienen un 50% más de probabilidades de ser madres que sus pares no afrodescendientes.
En las comunidades más dejadas atrás, los tabúes, silencios y normas sociales dificultan a las adolescentes recibir educación integral de la sexualidad, servicios de salud culturalmente pertinentes y opciones para hacer realidad sus proyectos de vida”  UNFPA en América Latina y el Caribe 
</p>',
                3 => '	<p> Te invitamos a ver el vídeo </p>
<iframe width="480" height="400" src="https://www.youtube.com/embed/yubGD6f8Vps?autoplay=1&mute=1" title="YouTube" frameborder="0" allowfullscreen></iframe>',
                4 => '	<p> Seguramente te han dicho que la maternidad en la adolescencia afecta la salud física-reproductiva y mental de las mujeres jóvenes, el ritmo y la dirección del desarrollo de un país. La maternidad temprana obstaculiza las perspectivas educativas de una mujer joven, aminora su autonomía social y económica de largo plazo, y compromete tanto su salud como la de su recién nacido.</p>',
                5 => '	<p> La prevención del embarazo en adolescentes incluye acciones en el área de salud sexual y reproductiva, pero no se limita solamente a ellas, sino que requiere de un abordaje integral y multisectorial en el que se incorporen acciones orientadas a fortalecer la equidad de género, erradicar la violencia de género y la violencia sexual, mejorar el nivel educativo de la población, especialmente de las mujeres y crear oportunidades de generación de ingresos para jóvenes y adolescentes.
La educación, la información, el acceso al derecho a la salud son las herramientas para elegir

GAIE, para que cada persona joven alcance su pleno desarrollo:
<span class="btn-enlace"><a href=" https://youtu.be/d5_g_xRMAmU  " target="_blank">Ir a información</a></span></p>
',
            ],
            'slides-6' => [
                1 => '<p> 1.-Busca a una persona adulta de tu familia que tenga hijas o hijos con quien puedas platicar.
2.- Toma lapíz y papel y realiza la siguiente entrevista. Las siguientes preguntas te ayudarán a guiar la conversación. 
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
</p>'
            ],
            'slides-7' => [
                1 => '	<p> Planificar es importante y la clave para decidir, debes tener toda la información para poder decidir, nadie puede obligarte a tener relaciones sexuales si tu no quieres y no estas deacuerdo. 

¿Te gustaría casarte? 
¿A qué edad? 
¿Te gustaría tener hijas e hijos? ¿cuántos?
Hoy ¿tienes lo necesario para garantizar el bienestar de tus hijas e hijos?
¿Crees que no es momento para tener hijas o hijos?, está bien, no hay prisa. Tu sabrás cuando es el momento.
Por eso para decidir debes tener toda la información para tomar una decisión pero también debes de preguntarte que quieres., continua en este sitio web DerechosESI donde tendrás información sobre métodos anticonceptivos y enfermedades de transmisión sexual.
</p>',
                2 => '	<p> Consulta 
Embarazo Adolescente, UNFPA en América Latina y el Caribe, 
Disponible en:
<span class="btn-enlace"><a href="https://lac.unfpa.org/es/topics/embarazo-en-adolescentes " target="_blank">Ir a información</a></span> 

Maternidad temprana y redes de afectos: ¿Quiénes cuidan a las niñas que cuidan?, 
Disponible en:
<span class="btn-enlace"><a href="https://lac.unfpa.org/es/news/maternidad-temprana-redes-de-afectos-cuidar-ninas-que-cuidan" target="_blank">Ir a información</a></span>
 
Anahí recibe información útil para planificar su futuro como parte de un proyecto destinado a reducir los embarazos en adolescentes, 
Disponible en:
<span class="btn-enlace"><a href="https://lac.unfpa.org/es/news/anahi-recibe-informacion-para-planificar-su-futuro-proyecto-reduccion-embarazos-en-adolescentes" target="_blank">Ir a información</a></span>
 
Embarazo en adolescentes en América Latina y el Caribe: En busca de justicia reproductiva para mujeres y niñas afrodescendientes, 
Disponible en:
<span class="btn-enlace"><a href="https://lac.unfpa.org/es/news/embarazo-en-adolescentes-buscando-justicia-reproductiva-afrodescendientes " target="_blank">Ir a información</a></span>

La prevención del embarazo no intencional está mejorando la vida de las adolescentes en Bolivia, 
Disponible en:
<span class="btn-enlace"><a href="https://lac.unfpa.org/es/news/prevencion-embarazo-no-intencional-bolivia" target="_blank">Ir a información</a></span>

</p>'
            ],
            'accordion-2' => [
                'data-1' => '<p class="p-bottom"> ¿Ya llegó Andres? 
Estoy en mis lunas
Ya me bajo
Anda en sus días 


¿Te acuerdas de la primera vez que tuviste tu ciclo menstrual?, es muy probable que muchas de las frases con las que iniciamos este bloque las hayas escuchado o te las han dicho en algún momento de tu juventud y es que hablar del ciclo menstrual ….
shhhhhhh no se habla o se habla en voz baja….. 
Si eres hombre y estás leyendo este bloque, te invitamos a que sigas leyendo, el ciclo menstrual también es información para ti. 
El ciclo menstrual no es un tema que nos deba dar miedo, al contrario es parte de conocer tu cuerpo, saber cómo te sientes o cómo se siente tu pareja, y que los cambios en el cuerpo son naturales, no hay nada de qué asustarnos. 
</p>',
                '¿Qué es la menstruación?' => 'Es un proceso en el cual el útero desprende sangre y tejido por la vagina durante 2 a 5 días pueden ser más días, sí sale sangre y no azul como muchos anuncios en televisión lo han mostrado por años.',
                'Pre-ovulación' => 'Es la fase después de la menstruación en la que madura uno de los óvulos que se encuentra dentro de los ovarios. Se presenta entre los días 6 y 13 del ciclo. De forma natural, el cuello uterino genera un moco que lubrica la vagina ayudando a los espermatozoides a llegar al óvulo para fecundarlo. En esta fase el moco vaginal es escaso, de consistencia pegajosa y de aspecto blanquecino o amarillento.',
                'Ovulación' => 'El óvulo madura y es liberado hacia el útero, a través de las Trompas de Falopio, haciendo que los niveles de hormonas aumenten y ayuden a preparar el recubrimiento del útero para el embarazo. En esta fase, el moco vaginal es abundante, elástico y tiene el aspecto de una clara de huevo.',
                'Post-Ovulación' => 'En esta fase, los niveles de hormonas comienzan a bajar y algunas mujeres pueden presentar el síndrome premenstrual. Notarás que el moco vaginal vuelve a presentar características similares a las de la fase de Pre-ovulación. Si el óvulo no es fecundado, será expulsado en la próxima menstruación.'
            ],
            'options-3' => [
                1 => [
                    'q' => '<p>Bañarse con el período te puede volver estéril para siempre</p>',
                    '1' => 'Realidad',
                    '0' => 'Mito',
                    'a' => '0',
                    'c' => 'Mito. Se cree que bañarse cuando están menstruando les puede causar infertilidad
'
                ],
                2 => [
                    'q' => '<p>Si nadas teniendo la regla, los tiburones te atacarán</p>',
                    '1' => 'Realidad',
                    '0' => 'Mito',
                    'a' => '0',
                    'c' => 'Mito. Nadar mientras tienes la regla no aumenta el riesgo de un ataque de tiburones'
                ],
                3 => [
                    'q' => '<p>La regla debilita</p>',
                    '1' => 'Realidad',
                    '0' => 'Mito',
                    'a' => '0',
                    'c' => 'Mito. Puedes sentirte cansada, con flojera pero no te hace menos débil.'
                ],
                4 => [
                    'q' => '<p>La menstruación puede durar desde 2 días hasta 7 pero hay mujeres que les puede durar más tiempo</p>',
                    '1' => 'Realidad',
                    '0' => 'Mito',
                    'a' => '1',
                    'c' => 'Realidad. La regla puede durar desde 2 y 7 días, pero puede durar un poco más.'
                ],
            ],
            'slides-8' => [
                1 => '<p class="cabecera-bold" > Diario del ciclo menstrual </p>
<p>Este diario también puedes compartirlo con tus amigas, hágalo juntas como una forma de dialogar de lo que viven y sienten en sus ciclos menstruales. 
1.- Elige un cuaderno, usa colores, marcadores, pegatinas para decorarlo.
2.-  En una hoja escribe el nombre del mes, ejemplo: Enero y escribe los números de cada día de ese mes,  en la hoja de al lado escribe el título “Lo que observe de mi cuerpo”
3.- Repite hasta tener los 12 meses y las 12 secciones de “Lo que observe de mi cuerpo”
4.- En cada casilla del día ve marcando qué cambios observas: físicos, emocionales, afectivos.  
5.- Al llegar tu menstruación, registra si aparece flujo abundante o moderado, si aparecen dolores, y como van cambiando con el paso de los días. 
6.- Con el paso de los meses podrás observar si los cambios presentes cada mes en tu cuerpo y en tus emociones. 
 
Para más información sobre los mitos, consulta: UNICEF, Día de la Higiene Menstrual: 10 falsos mitos sobre la regla,
Disponible en:
<span class="btn-enlace"><a href="https://www.unicef.es/blog/educacion/dia-higiene-menstrual-falsos-mitos-sobre-la-regla " target="_blank">Ir a información</a></span>
</p>',
            ],
            'slides-9' => [
                1 => '	<p class="cabecera-bold" > El derechos a la salud también es la prevención
 
	<p> La mejor manera de prevenir un embarazo  es usar un método anticonceptivo por un método anticonceptivo también te ayudará a prevenir una infección de transmisión sexual. 
¿Te han dicho que al usar condón no se siente igual?, ¿que el condón aprieta? 
Pues no, es importante hablar de los métodos anticonceptivos, puede ser incómodo pero es MUY IMPORTANTE para tu salud y la salud de tu pareja. 
</p>',
                2 => '	<p class="cabecera-bold"> ¿Te da pena hablar con tu pareja, novio, novia sobre métodos anticonceptivos?</p>
	<p> Te recomendamos:
1.- Inhala y exhala
2.- Elige un tema de conversación, platiquen, rían, intercambien puntos de vista 
3.- En el momento que creas más adecuado, saca el tema de los métodos anticonceptivos
Puede ser incómodo, sí, pero es importante que conversen. 
4.- No fuerces la conversación, deben sentir la confianza el uno y la otra para platicar.
5.- intercambiar puntos de vista
6.- Busca toda la información necesaria para tomar decisiones informadas.</p>
',
                3 => '	<p> ¿Y en Honduras, dónde puedo buscar información? 
Servicios de Salud Amigables para Adolescentes (SSAA) en hospitales y centros de salud.
 
Educación sexual integral incluida en programas escolares y campañas apoyadas por la Estrategia Nacional para la Prevención del Embarazo Adolescente (ENAPREAH).
 
Aplicación móvil “Reproductiva” para consultas sobre salud sexual y reproductiva.
 
Distribución gratuita de condones, píldoras, implantes y PAE en centros públicos.</p>
',
            ],
            'accordion-3' => [
                'Preservativo masculino y femenino' => 'Conocido como un Método de barrera, se usa una vez y se desecha. 
Previene embarazos y protege contra infecciones de transmisión sexual (ITS), incluido el VIH.

Condón masculino: Disponible de forma gratuita en centros de salud, hospitales y campañas educativas.
Condón femenino: Disponible en algunos centros de salud y ONG. Protege también parte externa de la vulva.

Uso correcto: Colocar antes del contacto genital, dejar espacio en la punta, retirar después de la eyaculación. Se usa uno nuevo en cada relación.
Ventajas:
 
Sin receta.
Fácil de conseguir y usar.
Ideal para jóvenes por su accesibilidad y doble protección.

Desventajas:

Puede romperse.
Requiere de un uso correcto para garantizar protección.

Más información sobre preservativos:

Preservativos
<span class="btn-enlace"><a href=" https://www.who.int/es/news-room/fact-sheets/detail/condoms " target="_blank">Ir a información</a></span>

Preservativo Femenino vs Preservativo Masculino: ¿Cuál elegir? 
<span class="btn-enlace"><a href="https://www.conlamujer.com/blog/preservativo-femenino-y-preservativo-masculino-cual-elegir#:~:text=En%20relaci%C3%B3n%20con%20su%20uso,y%20la%20vulva4%2C5." target="_blank">Ir a información</a></span>
',
                'Espermicidas (óvulos, jaleas, cremas, espumas)' => 'Sustancias químicas que inmovilizan o destruyen espermatozoides.
Se aplican en la vagina antes del coito.
Uso combinado con condón aumenta su eficacia.
 
Ventajas:
 
Sin receta médica.
Combinables con otros métodos.
 
Desventajas:
 
Baja eficacia si se usan solos.
Pueden causar irritación o alergias.
Acceso limitado en farmacias hondureñas.
',
                'Anticonceptivos orales combinados (la píldora)' => 'Contienen hormonas que inhiben la ovulación.
Se toman diariamente, con descansos según el tipo (21 o 28 días).
 
Ventajas:
 
Alta eficacia si se toman correctamente.
Regulan el ciclo menstrual.
 
Desventajas:
 
No protegen contra ITS.
Requieren motivación diaria.
Requieren evaluación médica previa.
 
En adolescentes, se recomienda iniciar su uso sólo si hay ciclos menstruales regulares por al menos dos años.
',
                'Implantes subdérmicos' => 'Pequeñas barritas colocadas bajo la piel del brazo.
Liberan hormonas que previenen la ovulación.
 
Duración: 3 a 5 años.
 
Ventajas:
 
Alta eficacia.
No requieren atención diaria.
 
Desventajas:
 
No protegen contra ITS.
Requieren inserción y retiro médico.
',
                'Dispositivo intrauterino (DIU)' => 'Dispositivo en forma de "T" que se coloca dentro del útero (puede ser de cobre o hormonal).
Duración: 3 a 10 años, según el tipo.
 
Ventajas:
 
Muy eficaz.
Ideal para adolescentes con actividad sexual frecuente y supervisión médica.
 
Desventajas:
 
No protege contra ITS.
Requiere colocación por profesional de salud.
Puede causar molestias o cólicos.
 

En Honduras, el uso del DIU y los implantes en adolescentes es aceptado médicamente si hay consentimiento informado, seguimiento y acompañamiento adecuado.
',
                'Píldora anticonceptiva de emergencia (PAE)' => 'Desde 2023, su uso está autorizado y legalizado en Honduras, incluso para adolescentes mayores de 12 años.

También conocida como "pastilla del día después".
Evita el embarazo si se toma dentro de las primeras 72 horas tras una relación sexual sin protección.
 
Se distribuye gratuitamente en centros de salud públicos, Ciudad Mujer, organizaciones como UNFPA y algunas farmacias.
No es un método de uso regular, solo en emergencias.


Conoce más sobre el tema en:
La pastilla anticonceptiva de emergencia (PAE) en Honduras
<span class="btn-enlace"><a href="https://mdemujer.org/pae-honduras/" target="_blank">Ir a información</a></span>

La pastilla del día después vuelve a ser legal en Honduras
<span class="btn-enlace"><a href="https://elpais.com/america/sociedad/2023-03-09/la-pastilla-del-dia-despues-vuelve-a-ser-legal-en-honduras.html" target="_blank">Ir a información</a></span>

Honduras avanza en garantía de derechos al legalizar la anticoncepción oral de emergencia
<span class="btn-enlace"><a href="https://reproductiverights.org/news/honduras-anticoncepcion-oral-de-emergencia/#:~:text=Marzo%2023%20de%202023%2C%20(Declaraci%C3%B3n,de%20emergencia%2C%20conocida%20como%20PAE." target="_blank">Ir a información</a></span>
',
                'Métodos NO recomendados como opción principal' => '1.Coito interrumpido
Consiste en retirar el pene antes de la eyaculación.
 
NO es efectivo: el líquido preeyaculatorio puede contener espermatozoides.
 
Requiere control muy alto y falla con frecuencia, sobre todo en adolescentes.
 
2.Métodos naturales (ritmo, temperatura basal, moco cervical)
Basados en la observación del ciclo menstrual y los días fértiles.
 
Baja eficacia si no se aplican con mucha experiencia y constancia.
 
No protegen contra ITS.
 
No recomendados como método principal en adolescentes.
 

3.Métodos quirúrgicos o definitivos

NO se recomiendan para adolescentes. Son procedimientos permanentes y sólo deben realizarse en adultos con consentimiento informado.
 
Vasectomía (hombre): Es el corte y ligadura realizados en los conductos deferentes unos centímetros arriba de los testículos, para interrumpir el paso de los espermatozoides y su salida en la eyaculación. Es 99% segura pero solamente se realiza a adultos con la seguridad absoluta de no querer procrear otro hijo. Es definitiva.
 
Salpingoclasia (mujer): Ligadura de trompas. Impide el paso del óvulo.
 
Histerectomía: Extirpación del útero. Solo se practica en casos médicos graves (ej. cáncer). No debe usarse como anticonceptivo sin consentimiento pleno.',
                'Recursos disponibles en Honduras' => 'Servicios de Salud Amigables para Adolescentes (SSAA) en hospitales y centros de salud.
 
Educación sexual integral incluida en programas escolares y campañas apoyadas por la Estrategia Nacional para la Prevención del Embarazo Adolescente (ENAPREAH).
 
Aplicación móvil “Reproductiva” para consultas sobre salud sexual y reproductiva.
 
Distribución gratuita de condones, píldoras, implantes y PAE en centros públicos.
',
                'data-1' => '<p class="cabecera-bold" >Reflexión</p>
                <p class="p-bottom">En Honduras, los adolescentes tienen derecho a recibir información clara y basada en evidencia sobre su salud sexual y reproductiva. Existen métodos anticonceptivos seguros, accesibles y legales que se pueden adaptar a sus necesidades. El acompañamiento de profesionales de salud y el respeto a su autonomía son clave para prevenir embarazos no deseados y enfermedades de transmisión sexual.</p>',
            ],
            'accordion-4' => [
                'data-1' => '<p class="cabecera-one "> Las infecciones de Transmisión Sexual</p>
                <p class="cuerpo-texto p-bottom">Las Infecciones de Transmisión sexual  son padecimientos infectocontagiosos que se contraen generalmente por realizar el coito en condiciones de higiene inapropiadas y/o con personas ya infectadas.
Las adolescencias son víctimas comunes de algunas de estas enfermedades debido, entre otras razones a la falta de información verídica sobre cómo evitarlas y sobre los síntomas asociados a ellas, a los sentimientos de vergüenza o temor para acercarse a centros de salud o a personas adultas (padres, madres, maestros, médicos etc) que puedan orientarles y acompañarles adecuadamente.
La OMS (Organización Mundial de la salud) ha clasificado como ETS los siguientes padecimientos:
</p>',
                'SIDA VIH (virus inmunodeficiencia humana)' => 'Los síntomas son el incremento en la frecuencia y la severidad de las infecciones virales, fiebres, sudores nocturnos, pérdida de peso, fatiga, inflamación en los ganglios linfáticos entre otros síntomas.
Las personas ceropositivas pueden presentar algunos de estos síntomas. Las personas enfermas de SIDA presentan la gran mayoría de los síntomas de forma simultánea y persistente.
Transmisión: es por coito, ya sea anal, vaginal u oral sin protección debido al intercambio de fluidos (semen, flujo vaginal, sangre).
Transfusión sanguínea si viene de una persona infectada, trasplante de órganos de una persona infectada, de la madre al feto durante el embarazo o al nacer, por la leche materna, por compartir agujas hipodérmicas con una persona infectada.
Existen muchos mitos sobre la transmisión del SIDA y es conveniente aclararlos:
No se transmite por tomar del mismo vaso, usar el mismo baño, usar los mismos cubiertos, un abrazo o un beso, nadar en albercas, ni por contacto físico.
Existen también estigmas sobre poblaciones específicas de riesgo (homosexuales, personas que se dedican al trabajo sexual, etc) sin embargo todas las personas si no se toman los cuidados necesarios pueden estar expuestas.
Actualmente no existe una cura específica ,sin embargo existen tratamientos para esta enfermedad para mejorar la calidad de vida y disminuir los síntomas, en muchos casos sigue siendo una enfermedad mortal.
',
                'Sífilis' => 'Causada por: una bacteria (espiroqueta) llamada Treponema pallidum.
 
Período de incubación: 3 semanas aproximadamente después del contacto sexual con una persona infectada.
 
Síntomas: transcurrido el tiempo de incubación, aparece en el lugar de penetración de la bacteria una lesión llamada chancro, que es como una úlcera, que puede pasar inadvertida pues no produce dolor ni secreción. Si no es detectada, esta enfermedad sigue su evolución dando lugar a la llamada sífilis secundaria. Los síntomas asociados con ésta son: pérdida de cabello en áreas específicas, úlceras en la garganta y glándulas inflamadas. Si aún en esta etapa la sífilis no es tratada, vuelve a ser latente y transcurridos de dos a tres años aproximadamente, la sífilis se convierte en sífilis tardía, provocando trastornos en la piel, los huesos, el corazón y a nivel del sistema nervioso central.
 
Consecuencias: trastornos en las válvulas coronarias, daños cerebrales y en la médula espinal, deformaciones y trastornos en las encías. Durante el embarazo puede pasar a través de la placenta al feto, produciendo abortos al principio de la gestación, y cuando el embarazo está más avan- zado, deja lesiones al niño como alteraciones en los dientes, cicatrices, lesiones en huesos, nariz, paladar y en algunos casos ceguera o sordera.
 
Transmisión: principalmente por contacto sexual. Por contacto directo con otras áreas mucosas como la boca y el recto o bien heridas o rozaduras infectadas con la bacteria. La sífilis también se adquiere por transfusiones sanguíneas y a través de la placenta de la madre al feto.
 
Tratamiento: aplicación de penicilina de larga duración u otros antibióticos. La pareja sexual de la persona que tiene sífilis debe ser tratada médicamente al mismo tiempo.
',
                'Gonorrea' => 'Causada por: bacterias.
 
Período de incubación: de 2 a 10 días posteriores al contagio.
 
Síntomas: las mujeres, por lo regular, no presentan ningún síntoma, aunque en algunos casos puede presentarse un flujo purulento acompañado de irritación vaginal o dolor al orinar.
 
En el hombre puede presentarse ardor, acompañado de secreción purulenta que sale a través del conducto uretral al orinar. Primero esa secreción es amarillenta, si no hay tratamiento se puede volver verduzca, y finalmente, sanguinolenta. Ocasionalmente, se presentan inflamaciones y ardor continuo en el bajo vientre. Es pertinente aclarar que en un porcentaje reducido (alrededor de 20%) de varones no presentan síntoma alguno.
 
Consecuencias: enfermedades pélvicas inflamatorias, esterilidad, artritis, problemas cardíacos, del hígado y meningitis. En los bebés produce ceguera.
 
Transmisión: por contacto directo con membranas mucosas infectadas como el útero, cérvix, ano, garganta y ojos.
 
Tratamiento: series de antibióticos durante una o dos semanas.
',
                'Herpes genital o herpes simple tipo II' => 'Causado por: virus.
 
Período de incubación: de 3 a 20 días después del contagio inicial, persistiendo las molestias durante 2 a 4 semanas.
 
Síntomas: sensación de ardor en el sitio del contagio. Posteriormente aparecen unas pequeñas vesículas rodeadas de tejido enrojecido. Luego, las vesículas pueden romperse convirtiéndose en pequeñas llagas húmedas y muy dolorosas. Fiebre, dolor de cabeza e inflamación de los ganglios.
 
Transmisión por contacto directo con vesículas o úlceras abiertas que estén infectadas.
 
Consecuencias: se pueden sufrir recaídas durante varios años. Si la infección se presenta durante los primeros meses del embarazo, el riesgo de que la mujer aborte aumenta. Asimismo, puede contagiar al hijo durante el parto.
 
Tratamiento: no existe aún tratamiento específico para eliminar el virus
 del herpes genital. Lo único que puede hacerse es dar tratamiento sintomático para controlar el dolor, a base de analgésicos, higiene sexual, empleo de preservativos y cirugía reconstructiva en casos extremos.
',
                'Condiloma' => 'Causada por: virus.
 
Período de incubación: de uno a tres meses.
 
Síntomas: crecimientos en forma de verrugas, usualmente en los genitales o en el ano.
 
Transmisión: por contacto directo con verrugas infectadas.
 
Consecuencias: son altamente contagiosas. Pueden esparcirse lo suficiente como para obstruir los orificios vaginales, rectales o de la garganta. En la mujer puede predisponer su organismo para el cáncer cervical.
 
Tratamiento: no hay cura específica. Las verrugas pueden eliminarse por medios químicos o quirúrgicos.
',
                'Vaginitis monilial' => 'Causada por: hongos.
 
Período de incubación: variable.
 
Síntomas: la mujer es la que con mayor frecuencia la padece, sufriendo comezón en la vulva y flujo constante con apariencia de levadura, así como resequedad vaginal; en el hombre, los hongos de la especie monilias pueden eventualmente provocar inflamación del pene.
 
Transmisión: el hongo puede localizarse en la boca, vagina o recto sin causar molestias. Los síntomas activos pueden surgir después de una terapia antibiótica o por contacto directo, ya sea con una persona o con ropa infectadas.
 
Consecuencias en la mujer: infecciones secundarias por bacterias. En bebés, infecciones en la boca y la garganta.
 
Tratamiento: usualmente con cremas, ungüentos o supositorios, eventualmente se prescriben medicamentos orales en los casos resistentes.
',
                'Clamidia' => 'Causada por: bacterias.
 
Período de incubación: de 1 a 4 semanas después del contagio.
 
Síntomas: algunas veces no hay síntomas pero al presentarse produce en la mujer enfermedad pélvica inflamatoria, esto es, fiebre, dolor durante el coito, dolor abdominal y ardor al orinar; flujo vaginal y sangrados intermenstruales. En el hombre, dolor al orinar y secreción acuosa del pene; puede llevar a la uretritis inespecífica o nogonococica.
 
Transmisión: por contacto sexual vaginal, anal o bucal.
 
Consecuencias: causa esterilidad. En los hombres puede producir artritis e inflamación de los testículos. En la mujer puede afectar el cuello del útero, útero, trompas, ovarios y uretra. Puede transmitirse al bebé durante el parto lo cual le puede infectar los ojos y causar pulmonía.
 
Tratamiento: usualmente con antibióticos puede detener la infección.
',
                'Tricomoniasis' => 'Causada por: parásitos que pueden vivir hasta 7 horas fuera del cuerpo humano.
 
Período de incubación: de 4 a 28 días.
 
Síntomas: flujo vaginal verduzco acompañado de mal olor, dolor al orinar, inflamación en la vulva y vagina y dolor abdominal. En los hombres secreción por el pene y malestar. Pueden no presentar síntomas.
 
Transmisión: por contacto sexual y a través de objetos como toallas, sábanas y otros, compartidos con personas infectadas. Del 10 al 25% de las mujeres la padecen.
 
Consecuencias: puede producir inflamación y obstrucción de las trompas, lo que se convertiría en esterilidad. Si alcanza el aparato urinario se puede expandir la infección allí.
 
Tratamiento: Existen medicamentos locales y orales para combatir esta enfermedad.
',
                'Hepatitis tipo B' => 'Causado por: virus.
 
Período de incubación: aproximadamente de 8 a 30 días después del contacto.
 
Síntomas: dolor muscular, fiebre, cansancio, pérdida del apetito y dolor de cabeza. Algunas veces se presenta color oscuro en la orina, palidez, los ojos amarillos y malestar en el hígado.
 
Transmisión: a través de contacto sexual anal, vaginal u oral, mediante el uso de agujas infectadas y transfusión sanguínea. También puede ser transmitido por personas infectadas que no se laven las manos después de defecar y a través de los alimentos.
 
Consecuencias: altamente contagiosa en los primeros días. Puede transmitirse de la madre al bebé durante el embarazo y parto. Puede causar daño en el hígado y llevar a la muerte.
 
Tratamiento: el médico debe diagnosticarla y dar tratamiento sintomático. Existe una vacuna contra ésta. Debe guardarse reposo en casa o en el hospital, aproximadamente por dos semanas.
',
                'Pediculosis (piojo púbico, se conoce comúnmente con el nombre de ladilla)' => 'Causado por: parásitos de tamaño diminuto que habitan en las regiones vellosas del cuerpo, especialmente en el pubis.
 
Período de incubación: de una a cuatro semanas.
 
Síntomas: comezón intensa.
 
Transmisión: puede contagiarse tanto por contacto sexual como por contacto con camas, ropas, sanitarios y toallas que hayan usado personas infectadas.
 
Consecuencias: infecciones secundarias como resultado del rascado.
 
Tratamiento: lavar el área infectada con una preparación insecticida que destruye los piojos adultos y sus huevos. Esto deben hacerlo ambos miembros de la pareja. Adicionalmente, se deberán mantener limpias la ropa de cama y las toallas de baño.
 Precauciones generales
',
                'data-2' => '<p class="cabecera-one ">Medidas preventivas</p>
<p class="cuerpo-texto p-bottom">Es importante informar al adolescente que cada vez que tenga relaciones sexuales existe riesgo de contagio de una enfermedad sexualmente transmisible. Por lo tanto, una vez que el hombre y la mujer han iniciado su vida sexual, es conveniente incorporar a su vida las siguientes medidas preventivas:</p>',
                'Medidas preventivas' => '
Tener hábitos de higiene adecuados.

Tener relaciones sexuales con una sola pareja.

Usar preservativos rutinariamente, aún con una pareja estable y para todo tipo de coito.

Evitar el intercambio de fluidos corporales tales como semen, fluidos vaginales y sangre.

Inspeccionar los genitales propios y de la pareja periódicamente.

Lavar los genitales después del coito.

Orinar después del coito.

Someterse a exámenes médicos periódicamente.

Evitar la exposición a/de lesiones en la piel a través de las cuales se puede contagiar alguna enfermedad.

Cuando haya que inyectarse, utilizar siempre agujas y jeringas desechables tirándose a la basura inmediatamente después de usarlas (previo doblado de la aguja). De no ser posible, asegurarse que la aguja y la jeringa hayan sido esterilizadas adecuadamente (hervir durante 10 minutos en un recipiente limpio, tanto jeringa como agujas, previamente lavadas. El uso debe ser inmediato).

Utilizar ropa interior de algodón, no de nylon, para permitir la adecuada ventilación y transpiración del cuerpo.
Un componente esencial en la preservación de la salud sexual es la higiene. Ésta se refiere a una serie de medidas que es necesario llevar a cabo para mantener en condiciones adecuadas los órganos genitales, ayudar a su buen funcionamiento, evitar enfermedades que los afecten y preservar una vida sexual y reproductiva sana.
Consulta: 
Organización Mundial de la Salud (OMS), Salud Sexual, definiciones. 
<span class="btn-enlace"><a href="https://www.who.int/es/health-topics/sexual-health#tab=tab_2 " target="_blank">Ir a información</a></span>
'
            ],
            'slides-10' => [
                1 => '	<p> Construir relaciones sanas y seguras es muy importante para todas las personas, tener una relación no significa tener a la novia más guapa o al novio más musculoso, significa tener un vínculo donde podamos crecer, compartir, construir.

Construir una relación no es una receta mágica, no se resuelve con una pócima ni contestando un cuestionario para evaluar a nuestra pareja, debe de construirse todos los días, no podemos olvidar que no se trata solo de nuestro bienestar, la otra persona tiene necesidades y es parte de la relación.
</p>',
                2 => '	<p> ¿Responsabilidad afectiva? 

No hay una receta mágica para una relación pero sí “Responsabilidad afectiva”, eso significa ser capaces de expresar nuestras necesidades y emociones siendo respetuosas y respetuosos de las emociones de la o el otro.

Para tener una responsabilidad afectiva es importante tomar en cuenta: 
-Respeto
-Honestidad
-Reciprocidad 
-Dialogar
-Saber decir adiós 
</p>',
                3 => '	<p> Recomendaciones 

1.- Conocernos, es un proceso de autoconocimiento y de autocuidado, qué es lo que buscamos, qué podemos dar, qué significa para mí estar con una persona, la otra persona se encuentra dispuesta a participar y ser parte de una relación .

Recuerda: no puedes obligar a alguien a tener una relación. 

2.- Cada persona debe tener también sus espacios para crecimiento, esparcimiento, desarrollo, esto no quiere decir que no estarán juntos, ni que te va a quitar tiempo, al contrario es construir espacios para el crecimiento, intercambio. 

3.- La comunicación y las conversaciones incómodas son importantes, esto no quiere decir que se van a pelear y tendrán discusiones significa escuchar, conversar y llegar acuerdos. 

4.- Marcar límites claros y respetarlos: si hay un acuerdo, respeta ese acuerdo.Ambas personas deben de estar de acuerdo en las expectativas que tiene en su relación. 

5.- Empatía, escuchar, entender a la otra persona y ser su apoyo. 

6.- Resolver conflictos, y no, no se pueden resolver los conflictos con violencia, nunca la violencia se debe justificar en una relación. Evita las culpas, busquen espacios para conversar y buscar soluciones. 
</p>',
            ],
            'options-4' => [
                'data-1' => 'Identifica la red flag (bandera roja) de cada situación 
¿Qué es una red flag?, es una señal de alerta. 
',
                1 => [
                    'q' => '<p>Celos, desconfianza y control</p>',
                    '1' => '<i class="fas fa-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '1',
                    'c' => 'Una pareja que te controla de alguna manera probablemente tiene problemas personales profundos en los que debe trabajar. Reconsidera tu relación si tu pareja trata de controlar a quién ves, con quién hablas, a dónde vas, cómo gastas tu dinero, qué haces en línea (redes sociales), qué ropa usas, qué escuchas o incluso qué comes.'
                ],
                2 => [
                    'q' => '<p>Falta de confianza</p>',
                    '1' => '<i class="fas fa-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '1',
                    'c' => 'Cuando una persona tiene dificultades para ser honesto consigo mismo, puede resultarle difícil ser honesto contigo. Es posible que parte de este comportamiento no sea malintencionado, sino simplemente una forma aprendida o un hábito de afrontamiento. Sin embargo, una persona que te miente sin reservas, que se considera irresponsable de sus acciones, carece de integridad y de respeto por su pareja.'
                ],
                3 => [
                    'q' => '<p>Problemas de ira</p>',
                    '1' => '<i class="fas fa-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '1',
                    'c' => 'Al igual que en las peleas, toma nota de cualquier problema de ira en tu pareja. Si alguien es fácil de enojar, tiene frecuentes arrebatos explosivos o cambia de emociones rápidamente (es decir, de la felicidad a la rabia), esto muestra una falta de capacidad para regular las emociones de una manera saludable y, en última instancia, es simplemente desagradable (e incluso aterrador) estar cerca de alguien así.'
                ],
                4 => [
                    'q' => '<p>Tienes que justificar constantemente sus acciones</p>',
                    '1' => '<i class="fas fa-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '1',
                    'c' => 'Si te das cuenta que te pasas justificando todo lo que hace o dice tu pareja, a pesar de que lo sientes mal en tu instinto, entonces es una señal de alerta infalible.

Si te encuentras justificando su mentalidad o acciones, aun cuando no estás de acuerdo con ellas, entonces es hora de hacer una pausa y dar un paso atrás. Nuestro cerebro trabaja horas extras para convencernos de que alguien que estimamos es bueno, aun cuando sabemos en nuestras entrañas que no lo es.
'
                ],
                5 => [
                    'q' => '<p>Falta de comunicación</p>',
                    '1' => '<i class="fas fa-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '1',
                    'c' => 'Una de las mejores partes de estar en una relación romántica es conectarse profunda y auténticamente con otra persona. Una pareja que no muestra interés en abrirse y vincularse es una sentencia de muerte para una relación.'
                ],

            ],
            'accordion-5' => [
                'data-1' => '¿Qué es el consentimiento? 

El consentimiento significa pedirle permiso a alguien para hacer algo, sí, tú puedes decidir si quieres que alguien toque tu cuerpo, si no quieres que alguien te tome fotos.
Así como tú puedes decidir, también se debe pedir permiso antes de tocar. 
Nadie puede obligarte y puedes cambiar de parecer en cualquier momento. 
Si alguien te hace sentir incómoda o incómodo, cuéntale a una persona de confianza. 

El consentimiento: 

Se da libremente. 
Se debe tomar sin presión, sin manipulación o sin la influencia de las drogas o el alcohol.

Es entusiasta. 
Pregúntate, ¿quieres hacerlo?, nunca hagas algo que no quieres. 

Es específico. 
Decir que sí no significa decir que sí a todo. 

Se brinda estando informado. 
Para poder decidir debes tener toda la información, pregunta, busca más información. 

Es reversible. 
La decisión se puede cambiar en cualquier momento.

Principios del consentimiento:
',
                'Respeto' => 'así como pides consentimiento, debes respetar la decisión de la otra persona.',
                'Límites' => 'para este principio es importante la “comunicación”, como defines tus límites del consentimiento.',
                'Comunicación' => 'El consentimiento puede darse de forma verbal, no verbal hasta digital. El lenguaje corporal también es comunicación, cambiar de tema de conversación también es una forma de comunicarse.',
                'Capacidad' => 'comprender y aceptar, si no te queda claro pregunta. Si alguien no está en capacidad de decidir entonces no hay consentimiento. Por ejemplo, si está dormido, si no hablan el mismo idioma.',
                'Continuo' => 'que se reciba el consentimiento una vez no significa que siempre existirá consentimiento.',
            ],
            'slides-11' => [
                1 => 'Memes del consentimiento 

1.- Busca lápices para colorear, marcadores de colores, hojas
2.- Busca un meme que te guste, que te haga reír o te parezca gracioso. 
3.- El meme que elegiste editalo, adaptalo para explicar a tus amigas y amigos “qué es el consentimiento” 
4.- Compártelo en redes sociales y usa el hashtag #MisDerechosESI '
            ],
            'slides-12' => [
                1 => 'Elabora tu guión del consentimiento 

1.- Observa los siguientes vídeos:

Consentimiento como preparar una taza de té
https://www.youtube.com/watch?v=BuuyajcjFC4

Consentimiento, tan simple como el ceviche 
https://www.youtube.com/watch?v=IUxUsJ36jQA

¿Qué es el consentimiento?
https://www.youtube.com/watch?v=pI2X4jnsuos

2.- Elabora tu propio guión para un vídeo de redes sociales explicando ¿qué es consentimiento?

3.- Compártelo en redes sociales y usa el hashtag #MisDerechosESI 
'
            ],
            'accordion-6' => [
                'data-1' => 'Lee con atención la siguiente información: 

El Centro de Derechos de la mujer en Honduras CDM; del 01 de enero al 30 de abril del 2025, el Sistema Nacional de Emergencia (911) registró 13,034 denuncias de violencia doméstica y 15,647 denuncias de maltrato familiar en Honduras

Durante el 01 al 31 de julio de 2025 se registraron 146 muertes violentas de mujeres y femicidios, según los medios de comunicación impresos y digitales 46 muertes violentas de mujeres.
Cada 10 minutos muere una mujer por violencia 
A nivel mundial, hasta el 38% de los asesinatos de mujeres son cometidos por su pareja.
Más de una cuarta parte de las mujeres de entre 15 y 49 años que han tenido una relación de pareja han sido objeto de violencia física y/o sexual de pareja al menos una vez en su vida (desde los 15 años). 

¿Qué te dicen estos datos? 
',
                'Violencia' => 'La Organización Mundial de la Salud (OMS) define la violencia como “el uso deliberado de la fuerza física o el poder, ya sea en grado de amenaza o efectivo, contra uno mismo, otra persona o un grupo o comunidad, que cause o tenga muchas probabilidades de causar lesiones, muerte, daños psicológicos, trastornos del desarrollo o privaciones. ',
                'Violencia de género' => '“violencia dirigida contra una mujer por el hecho de ser mujer o que afecta a las mujeres de manera desproporcionada. Incluye actos que infligen daño o sufrimiento físico, mental o sexual, amenazas de tales actos, coacción y otras privaciones de libertad.
La discriminación contra la mujer y la desigualdad en la distribución del poder y los recursos entre hombres y mujeres son causas fundamentales de la violencia contra la mujer” ONU Mujeres
',
                'data-2' => 'Tipos de violencia
La violencia a las mujeres se puede dar de varias formas, a continuación descubre de qué trata cada uno de los siguientes tipos de violencia.',
                'Psicológica' => '“provocar miedo a través de la intimidación; en amenazar con causar daño físico a una persona, su pareja o sus hijas o hijos, o con destruir sus mascotas y bienes; en someter a una persona a maltrato psicológico o en forzarla a aislarse de sus amistades, de su familia, de la escuela o del trabajo” ONU Mujeres',
                'Física' => '“causar o intentar causar daño a una pareja golpeándola, propinándole patadas, quemándola, agarrándola, pellizcándola, empujándola, dándole bofetadas, tirándole del cabello, mordiéndole, denegándole atención médica u obligándola a consumir alcohol o drogas, así como empleando cualquier otro tipo de fuerza física contra ella. Puede incluir daños a la propiedad” ONU Mujeres',
                'Económica' => '“Consiste en lograr o intentar conseguir la dependencia financiera de otra persona, manteniendo para ello un control total sobre sus recursos financieros, impidiéndole acceder a ellos y prohibiéndole trabajar o asistir a la escuela” ONU Mujeres',
                'Sexual' => '“obligar a una pareja a participar en un acto sexual sin su consentimiento. Véase infra para obtener más información sobre la violencia sexual” ONU Mujeres 

La violencia sexual puede incluir: 
Acoso sexual
Violación 
Explotación sexual
',
                'Digital' => '“La violencia en línea o digital contra las mujeres es cualquier acto dañino cometido, facilitado, agravado o amplificado mediante herramientas digitales o tecnologías de la información y comunicación. Estos actos pueden causar o tener el potencial de causar daños físicos, sexuales, psicológicos, sociales, políticos o económicos, y también vulneran derechos y libertades. Esta violencia puede manifestarse en espacios en línea o fuera de línea mediante el uso de tecnologías, como el control del paradero de una mujer mediante un rastreador GPS”

La violencia digital puede incluir: 
Acoso 
Manipulación de la información 
Creación de contenido íntimo sin consentimiento 
Difundir contenido íntimo sexual sin consentimiento 
',
                'Obstétrica' => '“Se genera en el ámbito de la atención obstétrica en los servicios de salud públicos y privados. Consiste en cualquier acción u omisión por parte del personal del Sistema Nacional de Salud. que cause un daño físico o psicológico durante el embarazo, parto y puerperio. Cualquier acción u omisión que se exprese en la falta de acceso a servicios de salud reproductiva, un trato cruel, inhumano o degradante, o un abuso de medicalización” Gire, grupo de información en reproducción elegida ',
                'Vicaría' => '“una forma de violencia de género por la cual los hijos e hijas de las mujeres víctimas de violencia de género son instrumentalizados como objeto para maltratar y ocasionar dolor a sus madres” Amnistía Internacional',
                'Feminicida' => 'El feminicidio se refiere al asesinato intencionado de una mujer por el hecho de serlo, si bien se puede definir de un modo más amplio como cualquier asesinato de mujeres o niñas. Existen diferencias específicas entre el feminicidio y el asesinato de hombres. En la mayoría de los casos, por ejemplo, quienes cometen los feminicidios son parejas o ex parejas de la víctima, y suponen la culminación de un proceso de abusos, amenazas o intimidación constantes en el hogar, violencia sexual o situaciones en las que las mujeres se encuentran en una situación de inferioridad con respecto a su pareja en términos de poder o disponibilidad de recursos.',
                'Noviazgo' => 'Conductas producen dependencia y aislamiento, pero no se perciben como agresivas o alarmantes puesto que se interpretan como pruebas de amor, desarrollando así una situación de vulnerabilidad por parte de la mujer hacia el hombre.',
            ],
            'slides-13' => [
                1 => '1.- Le los siguientes párrafos',
                2 => ' 
Quieres que te ponga la capilla blanca
Quieres que te ponga la capilla azul
Quieres que te ponga el gorro colorado
Quieres que te ponga lo que quieras tú.
 
No me mates, no me mates
Con pistola ni puñal
Mátame con un besito
De tus labios de coral.
A la capotin tin tin tin… (bis)
',
                3 => 'Ya no sé qué hacer
No sé con cuál quedarme
Todas saben en la cama maltratarme
Me tienen bien, de sexo me tienen bien
Estoy enamora`o de cuatro babies
Siempre me dan lo que quiero
Chingan cuando yo le` digo
Ninguna me ponen pero',
                4 => 'Cuando estoy cerca de ella
la estoy cuidando, la estoy cuidando,(bis)
que hay muchos envidiosos
la están deseando, la están deseando.(bis)
 
La mujer que está queriendo
se pone viva, se pone viva,(bis)
y el hombre la solicita
si se descuida, si se descuida.(bis)
',
                5 => 'Amigo, voy a darte un buen consejo
Si quieres disfrutar de sus placeres
Consigue una pistola si es que quieres
O cómprate una daga si prefieres
Y vuélvete asesino de mujeres
Mátalas
Con una sobredosis de ternura
Asfixialas con besos y dulzuras
Contagialas de todas tus locuras',
                6 => 'Una flor me está matando
que es un terrible pesar
y tan cerca que la miro
y sin poderla cortar.
 
Yo les digo a mis amigos
los que ya saben de amor,
qué consejo me darían
para cortar esa flor.
',
                7 => '2.-¿Identificaste que son?, todos los párrafos que acabas de leer son fragmentos de canciones 
3.- Vuelve a leer los párrafos a ver si ubicas a qué canción hace referencia cada una. 
4.- Responde y reflexiona sobre las siguientes preguntas: 
¿Qué mensaje transmiten las canciones?
¿El mensaje que transmites es positivo?
¿De qué tipo de relaciones hablan las canciones?
¿Cómo describen a las mujeres en esas canciones?
¿Cómo describen a los hombres esas canciones?
¿Conocen otras canciones que hablen presenten el amor como tolerar violencias?
¿Cuáles?
',
            ],
            'quiz-1' => [
                1 => [
                    'q' => '<p>Los hombres poseen un incontrolable instinto sexual</p>',
                    'a' => false,
                    'c' => '<p>Falso.La sexualidad humana y el instinto sexual no es exclusivo de los varones</p>'
                ],
                2 => [
                    'q' => '<p>Las mujeres tienen la culpa de ser acosadas por ser provocadoras</p>',
                    'a' => false,
                    'c' => '<p>Falso. La forma en la que te vistes no justifica ningún tipo de violencia</p>'
                ],
                3 => [
                    'q' => '<p>Es “normal” que las personas hagan bromas de tipo sexual en público</p>',
                    'a' => false,
                    'c' => '<p>Falso. Preguntar, ¿crees que la persona estará cómoda leyendo o escuchando esas bromas?, tal vez no dice nada pero no decirlo puede ser porque  teme más violencia. Las bromas y los comentarios donde se burlan del cuerpo, la sexualidad, la apariencia de las personas también es violencia pero sigue viéndose como normal. 
</p>'
                ],
                4 => [
                    'q' => '<p>A las mujeres les gusta el maltrato, de lo contrario que se separen al primer golpe.</p>',
                    'a' => false,
                    'c' => '<p>Falso. Las mujeres que pasan por violencia pueden tener una dependencia económica y emocional lo que no les permite salir de esa violencia, que les impide dejar la casa, poner una denuncia, etc. Es posible que no tenga redes de apoyo, desconocen a dónde acudir, sienten vergüenza, miedo 
Cada caso de violencia es muy distinto, si tu escuchas o sabes de una mujer que pasa por violencia apoyala, creele.
</p>'
                ],
                5 => [
                    'q' => '<p>Si tu novio o esposo te cela y te controla es por que se preocupa por ti y te ama</p>',
                    'a' => false,
                    'c' => '<p>Falso. Hemos crecido creyendo que para demostrar el amor debe existir control y las actitudes posesivas y de control están bien. Recordemos que el amor no debe doler, ni tenernos preocupadas y preocupados por lo que hacemos, decimos, vestimos.</p>'
                ]
            ],
            'slides-14' => [
                1 => 'Actos de riesgo que nos deben tener alertas:
Recibir mensajes de acoso o amenazas (de alguien conocido o de un desconocido).
Tener miedo de que esas amenazas se cumplan
Tener miedo de estar en casa cuando llegue la pareja
No importa que tan mínimos sean, escuchar insultos, recibir golpes. 
No poder decidir qué vestir, cómo gastar tu dinero, con quien hablar 


Si identificas alguna de estas señales, busca apoyo inmediatamente, recuerda no es exageración, es violencia. 
',
                2 => '¿Qué podemos hacer contra la violencia? 

Infórmate
Fomenten en todos los espacios (laboral, hogar, vía pública) el respeto
No aceptar los malos tratos
Escucha a las personas y si te cuenta que pasa por violencia no le juzgues, ni culpes.
Comparte información con tu comunidad 
Ser red de apoyo y creerle a las personas que pasan por violencia
',
                3 => 'Consulta 

ONU Mujeres, Preguntas frecuentes: Tipos de violencia contra las mujeres y las niñas, Disponible en: https://www.unwomen.org/es/articulos/preguntas-frecuentes/preguntas-frecuentes-tipos-de-violencia-contra-las-mujeres-y-las-ninas 

ONU Mujeres, Violencia de género, Mujeres y niñas en riesgo, disponible en: https://www.unwomen.org/es/hq-complex-page/covid-19-rebuilding-for-resilience/gender-based-violence
¿Qué es la violencia vicaria?, Disponible en https://www.es.amnesty.org/en-que-estamos/blog/historia/articulo/que-es-la-violencia-vicaria/  

La violencia obstétrica también es violencia contra la mujer, disponible en: https://www.insp.mx/avisos/5138-dia-violencia-mujer-obstetrica.html 

Revictimización y desconocimiento legal limitan denuncias por violencia en el noviazgo, disponible en https://www.dgcs.unam.mx/boletin/bdboletin/2022_547.html 
',
            ],
            'slides-15' => [
                1 => 'Si has llegado a esta parte del viaje por los derechos sexuales, seguramente hay personas que te han preguntado ¿para cuándo las hijas y los hijos?, ¿cuándo te casas?, ¿te vas a quedar sola?.

Tarde o temprano tendremos que tomar decisiones, para eso es importante construir tu proyecto de vida, es decir un plan. 
El plan de vida busca la autorrealización y debe considerar necesidades, objetivos, expectativas, el entorno, etc. 

Inhala y exhala, un plan de vida no es algo que se resuelva de un día a otro, es un plan a largo plazo que puede irse adecuando a lo que va sucediendo en tu vida, en el entorno, etc. 

¿Cómo te visualizas?
',
                2 => 'Y aunque no hay una receta para un proyecto de vida, si podemos considerar algunos elementos:

Realiza y actualiza, ¿cómo se encuentra tu vida?,  mediante la identificación y valoración de circunstancias.

Identifica prioridades de los aspectos de abordaje estratégicos de tu plan de vida. 

Lleva a cabo acciones dirigidas a lograr tu proyecto de vida, ¿qué puedo hacer yo?, 

Da seguimiento, ¿qué he logrado?, ¿qué ha cambiado de mi proyecto de vida? 
',
                3 => 'Si quieres más información consulta Construcción de Plan de vida disponible en: https://repositorio-uapa.cuaed.unam.mx/repositorio/moodle/pluginfile.php/2555/mod_resource/content/3/UAPA-Construccion-Plan-Vida/index.html 

Para un plan de vida también es importante observar la realidad de nuestro entorno: 

1.- Lo que te puede frenar: sabemos que nos gustaría lograrlo todo, pero seamos sinceras y sinceros con nuestro plan de vida, existen circunstancias que pueden cambiar algún elemento de nuestro plan de vida o retrasarlo. 
No se trata solo de decir “sí se puede” es identificar que puede vulnerar nuestro plan y prevenir. 

2.- El rol que juegan otras personas: ¿hay personas que no aportan?, ¿generan una influencia negativa?
',
            ],
            'slides-16' => [
                1 => 'Para construir tu plan de vida te compartimos algunas preguntas que pueden servir como guía:


1. ¿Cuál es mi realidad en estos momentos?



2. ¿Qué es importante en la vida? 


3.¿Qué es importante en mi vida?
4. ¿Cuáles son mis necesidades?
5. ¿Cuáles son mis objetivos?
6. ¿Cuáles son mis valores?
7. ¿Cómo puedo proceder?
'
            ]
        ];

        return $data;
    }
}