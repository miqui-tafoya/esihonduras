<?php
namespace Model;

use Model\Database;

class JovenesModel extends Model {

    private Database $db;

    public function getActividades() {
        $data = [
            'slides-1' => [
                1 => '<p class="cabecera-bold"> Derechos Humanos </p>
<p >Cuándo escuchas hablar de Derechos humanos, ¿qué te imaginas? </br>
Los Derechos Humanos son el conjunto de prerrogativas que todas las personas tenemos solo por ser personas, sin importar de dónde venimos, cómo somos o qué pensamos. Entre otras cosas, sirven para que podamos vivir con dignidad, seguridad, y libertad. El respeto, aplicación y protección de los derechos humanos es indispensable para el desarrollo integral de las personas. 

Este conjunto de prerrogativas se encuentra establecido dentro del orden jurídico nacional, en nuestra Constitución Política, tratados internacionales y leyes. En particular, el artículo 1 dela Declaración Universal de Derechos Humanos dice que “todos los seres humanos nacen libres e iguales en dignidad y derechos y, dotados como están de razón y conciencia, deben comportarse fraternalmente los unos con los otros”. Es decir: 

Los derechos humanos = la dignidad que todas las personas tenemos
</p>

',
                2 => '<p>Actividad: </br>

1.- Busca lápiz y papel</br>
2.- Dibuja una línea y dividela en 20 espacios </br>
3.- En la siguiente lámina, vas a encontrar una lista de frases. Cada frase tiene la cantidad de espacios que tienes que avanzar o retroceder.</p>
',
                3 => '	<p class="cabecera-bold"> ¿Comenzamos? </p>
	<p> 
1.- Avanza un espacio si eres mujer
2.- Avanza dos espacios  si eres hombre
3.-Avanza un espacio si eres heterosexual
4.- Retrocede dos espacios si perteneces a la comunidad LGBTTTIQ+
5.- Retrocede tres espacios si eres mujer u hombre trans
6.- Avanza un espacio si eres persona joven no mayor de 35 años
7.-  Retrocede un espacio si tienes más de 40 años
8.- Avanza un espacio si tienes complexión delgada
9.- Avanza un espacio adelante si tienes la piel clara
10.- Retrocede un espacio si tiene piel morena
11.- Avanza un espacio si prácticas la religión católica-cristiana
12.- Retrocede un espacio si prácticas una religión distinta a la católica-cristiana
13.- Avanza dos espacios si tienes casa propia (ya pagada)
14.- Retrocede un espacio si rentas la vivienda en la que vives
15.- Avanza un espacio si tienes vehículo propio (ya pagado)
16.- Retrocede un espacio si usas el transporte público
17.- Avanza un espacio si tienes licenciatura 
18.- Avanza dos espacios si tienes maestría 
19.- Retrocede un espacio si tienes hijas e/o hijos menores de 5 años
20.- Retrocede un espacio si tienes alguna discapacidad</p>
',
                4 => '<p> Observa la línea que dibujaste, ¿en qué parte de la línea te quedaste? 

Si bien los derechos humanos no se pueden medir en una línea recta, este ejercicio nos ayuda a entender cómo nuestras diferentes características y condiciones de vida pueden facilitarnos o no el acceso a ciertos derechos. Por ello, es importante recordar que por ley, todas las personas tenemos derechos y estos se deben reconocer y garantizar sin distinción alguna de nacionalidad, lugar de residencia, sexo, origen nacional o étnico, color de piel, religión, lengua, o cualquier otra condición. Todas y todos tenemos los mismos derechos humanos, sin discriminación alguna. 
Además, para que los derechos humanos sean efectivos, se deben aplicar en conjunto ya que se relacionan, se necesitan entre sí y no se pueden dividir. Es decir, estos derechos están interrelacionados, y son interdependientes e indivisibles.
 </p>
',
                5 => '<p>¿Sabías qué el artículo 59 y 60 de la Constitución de Honduras protege estos derechos humanos?
ARTÍCULO 59.- La persona humana es el fin supremo de la sociedad y del Estado. Todos tienen la obligación de respetarla y protegerla. La dignidad del ser humano es inviolable. Para garantizar los derechos y libertades reconocidos en esta Constitución, créase la Institución del Comisionado Nacional de los Derechos Humanos. La organización, prerrogativa y atribuciones del Comisionado Nacional de los Derechos Humanos será objeto de una ley especial.
ARTÍCULO 60.- Todos los hombres nacen libres e iguales en derechos. En Honduras no hay clases privilegiadas. Todos los hondureños son iguales ante la Ley.


¿Los conocías? 

Si quieres conocer más de los derechos humanos en Honduras, consulta: 
Naciones Unidas Derechos Humanos, oficina del alto Comisionado, Honduras, ¿En qué consisten los derechos humanos?, disponible en:
<span class="btn-enlace"><a href="https://oacnudh.hn/derechos-humanos-2/"target="_blank">Ir a información</a></span></p>

',
            ],
            'slides-17' => [
                1 => '<p>Lee la siguiente frase: 

<b>“La discriminación vulnera la dignidad humana” </b>

Piensa en la frase que acabas de leer y realiza la siguiente actividad</p>
',
                2 => '<p>Actividad: 

1.- Lee la siguiente lista de frases
2.-. Cada frase tiene una casilla, marca si has escuchado o te han dicho alguna de esas frases. 
3.- Busca lápiz y papel y responde a las siguientes preguntas: 

¿Dónde has escuchado esas frases? 
¿Quién te ha dicho esas frases? 
¿En qué contexto se mencionaron esas frases? 
¿Qué sentiste cuándo te dijeron o escuchaste esas frases? </p>
',
            ],
            'casillas-1' => [
                'data-1' => '<p class="cuerpo-texto cabecera-bold p-bottom" >Discriminación</p>

	<p class="cuerpo-texto p-bottom"> 

<br>

Lee cada una de las siguientes frases y marca si la has escuchado o te la han dicho alguna vez: </p>',
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
                    'q' => '<p>Los hombres no lloran</p>',
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
                    'q' => '<p>Parece que viene bajando de la montaña</p>',
                    '1' => 'Lo he escuchado',
                    '0' => 'No lo he escuchado',
                ],
            ],
            'slides-2' => [
                1 => '	<p> Todas las frases que leíste en el ejercicio anterior hacen referencia a la discriminación. La discrimianción afecta directamente el ejercicio de los derechos de las personas por el simple hecho de cómo se ve qué le gusta o qué  creencias tiene.

                De acuerdo con Amnistía Internacional, “la discriminación tiene lugar cuando una persona no puede disfrutar de sus derechos humanos o de otros derechos legales en condiciones de igualdad con otras personas debido a una distinción injustificada”. 

                Pero recuerda, todas las personas tenemos derecho a ser tratados por igual, sin importar nuestra raza, nacionanidad, clase, religión, sexo, genero, orientación sexual, identdiadd de género, edad, estado de salud.</p>',
                2 => '<p>¿Cómo se ve la discriminación en Honduras?

La discriminación en América Central, y Honduras en particular, se manifiesta de múltiples formas. Por una parte, continúa existiendo un trato desigual hacia los pueblos indígenas y las personas afrodescendientes, el cual se refleja tanto en la vida pública como en la privada, afectando ámbitos como la educación, la salud, el acceso a servicios y la representación en los medios de comunicación. Por otra parte, también enfrentan discriminación otros grupos, entre ellos las mujeres, las personas migrantes, las personas con discapacidad y las diversidades sexuales. 

Cuando estas formas de exclusión se combinan en una misma persona, se habla de discriminación múltiple, lo que incrementa su situación de vulnerabilidad frente a la violación de derechos. En muchos casos, estas prácticas limitan el desarrollo personal y profesional; en situaciones más graves, pueden derivar en agresiones directas contra la libertad, la integridad física e incluso la vida de las personas.

                Disponible en:
                    <span class="btn-enlace"><a href="https://www.oacnudh.org/areas-de-trabajo/discriminacion/" target="_blank">Ir a información</a></span>  
</p>',
                3 => '<p> ¿Por qué hablamos de discriminación en la plataforma Derechos ESI Honduras?

Porque todas las personas tenemos los mismos derechos, y los derechos sexuales son parte de esos derechos humanos.  Si se nos prohibe el acceso a metodos anticonceptivos, a información sobre el embarazo, o se nos niega atención médicapor nuestras características físcas (por ejemplo, por nuestro color de piel o edad), eso es discriminación. 

Mientras más información sobre el tema tengamos, menos propensos y propensas seremos a vivir discriminación. Recuerda que nos toca a todas las personas exigir que se garanticen y reconozcan nuestros derechos. 
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
                'data-1' => '<p class="cabecera-one cabecera-bold">¿Qué es la diversidad?</p><p>Hablar de diversidad sexual no debería ser incómodo.

Todas las personas merecen los mismos derechos, vivir una vida libre de violencia y sin discriminacón … ¡y eso incluye a las personas LGBTTTIQ+!

La abreviatura LGBTTTIQ+ significa Lesbianas, Gays, Bisexuales, Travestis, Transgéneros, Transexuales, Intersexuales y Queer. El signo + significa la suma de nuevas comunidades y disidencias.
<br>Lamentablemente…<br>Las personas de la comunidad LGBTTTIQ+ suelen ser discriminadas en la escuela, en sus familias y en sus centros laborales. Muchas veces, esta discriminación alcanza a la violencia física, llegando al extremo del asesinato. <br>Para hablar de diversidad sexual, tenemos que hablar primero de estereotipos de género. Los estereotipos de género son ideas o creencias generalizadas sobre cómo se deben comportar y qué deben hacer las mujeres y los hombres.<br>Imaginemos que los estereotipos de género son archiveros enormes donde se clasifican a las mujeres y a los hombres por las actividades, emociones, profesiones o actitudes que deben ejercer según la sociedad. </p>
<table><thead ><tr><th>Mujeres</th><th>Hombres</th></tr></thead><tbody><tr><td>Las niñas juegan con muñecas</td><td>Los hombres no lloran</td></tr><tr><td>Las mujeres son sensibles y delicadas</td><td>Los hombres deben ser fuertes</td></tr><tr><td>Las mujeres son débiles</td><td>Los niños juegan a las luchas</td></tr><tr><td>Las mujeres cocinan</td><td>Los hombres son toscos</td></tr><tr><td>Las mujeres solo pueden ser madres</td><td>Los hombres no deben cuidar</td></tr></tbody></table>
<p>Esto no quiere decir que tener comportamientos de  mujer u hombre esté mal, el problema es que no todas las personas encajan en estas categorías. Los estereotipos de género suelen limitar la libertad de las personas, refuerzan desigualdades y pueden generar discriminación, porque juzgan a alguien no por quién es, sino por lo que la sociedad espera de su género. En resumen, los estereotipos perjudican porque se impone una sola forma de ser y esto, eventualmente, genera violencia. </p>
',
                'Identidad de género' => 'La identidad de género es cómo cada persona se siente y se reconoce internamente en relación con su género, por ejemplo, como mujer, hombre, ambos o ninguno, y puede coincidir o no con el sexo asignado al nacer. 
¿Tú cómo te sientes? ¿Cómo te autoidentificas?',
                'Orientación sexual' => 'La orientación sexual se refiere a hacia quién sentimos atracción física, emocional, afectiva, espiritual o sexual. Puede ser a personas del mismo género, de otro género o de más de uno. 
¿A ti quién te atrae sexualmente? ¿Los hombres, las mujeres o ambos? 
',
                'Expresión de género' => 'La expresión de género es la forma en que cada persona muestra su género hacia los demás, puede ser a través de su forma de vestir, hablar, actuar o expresarse.
¿Tú cómo te muestras al mundo? ¿De qué manera actúas, te vistes, te compartas, e interactúas?',
                'Sexo biológico' => 'El sexo biológico se relaciona con las características físicas y biológicas, como los cromosomas, las hormonas y los órganos reproductivos, con las que nacemos.
                Por ejemplo: 
Hembra = vagina y ovarios 
Macho = testículos y pene
Intersexual = una combinación de ambos
',
                'data-2' => '<img src="' . URL_PUBLIC . 'recursos/imagenes/gender.png">
Vamos a hacer una actividad para poner en práctica estos conceptos:

1.- Dibuja en tu cuaderno la galleta
2.- Marca en tu galleta las respuestas a las siguientes preguntas: 
¿Cuál es tu identidad de género?
¿Cuál es tu expresión de género? 
¿Cuál es tu sexo biologico? 
¿Cuál es tu orientación sexual?


3.- Observa la galleta que dibujaste y tus respuestas.   
Te compartimos algunas preguntas que pueden servirte para reflexionar:
¿Cómo se ve tu galleta? 
¿Qué elementos dibujaste en la galleta para describir tu identidad? 
¿Qué elementos dibujaste en la galleta para describir tu orientación sexual? 
¿Crees que todas las galletas se parecen?


Las personas somos seres diversos, así como no hay una única forma de dibujar la galleta tampoco podemos encasillar a todas las personas y creer que todas las personas se van a ver igual o les gustarán las mismas cosas. Respetar las diferencias también es un derecho. 



<p 	class="p-bottom"> Hay distintas formas de expresarnos, de identificarnos,de ser, cada una se nombran de una forma: 
</p>',
                'LGBTTTIQ+' => 'El acrónimo LGBTTTIQ+ busca visibilizar las distintas formas de expresarnos, de identificarnos y de ser.
Cada letra se refiere a Lesbiana, Gay (hombres homosexuales), Bisexuales, Travestí, Transgénero, Transexual, Intersexuales, y Queer. El símbolo de + hace referencia para incluir a los colectivos que no están representados en las siglas anteriores. 

¿Qué significa cada una?:',
                'Travestí' => 'Es aquella que modifica su expresión de género (vestido, uso de accesorios, etc) por ratos, pero que vive el resto de su vida con su sexo y género, no busca cambiar de género ni de sexo puede ser hombre o mujer así como heterosexual, bisexual u homosexual.',
                'Transgenérica' => 'Es aquella que modifica permanentemente su expresión de género (Hombre a Mujer o Mujer a Hombre), vive y se relaciona con la sociedad desde su género adoptado con nombre identidad. puede o no modificar su cuerpo con el uso de hormonas, aceites o cirugías, pueden ser homosexuales, bisexuales o heterosexuales.',
                'Transexual' => 'Es aquella que modifica permanentemente tanto su identidad y expresión de género (nombre, vestido, forma de relacionarse con la sociedad) como su cuerpo a través del uso de hormonas, cirugías u otros. No tiene que modificar forzosamente sus órganos genitales. Las personas transexuales pueden cambiar de Hombre a Mujer o de Mujer a Hombre. También pueden ser Homosexuales, Bisexuales o Heterosexuales.',
                'Heterosexuales' => 'Son personas que se relacionan erótica y afectivamente principalmente con personas del otro sexo.',
                'Homosexuales' => 'Son hombres que se relacionan erótica y afectivamente principalmente con otros hombres. Para mayor información puedes consultar: www.avedemexico.org.mx o www.anodis.com',
                'Lesbianas' => 'Son mujeres que se relacionan erótica y afectivamente principalmente con otras mujeres. Para mayor información puedes consultar: www.laneta.apc.org/concilio/closet.htm',
                'Bisexuales' => 'Son personas que se relacionan erótica y afectivamente con hombres y mujeres.',

                'Intergénero/intersexual ' => 'persona que también tiene una identidad de género no binaria (no siempre ocurre).',

                'Queer' => 'persona que no se identifica como hombre o como mujer, su vestimenta, con quienes se relaciona no corresponde ni a lo femenino o a lo masculino.',


                'data-3' => '<p class="p-bottom"> La clave: 
“La educación puede utilizarse como un instrumento tanto para perpetuar como para eliminar desigualdades” Rodino (2009)
</p>'
            ],
            'options-1' => [
                'data-1' => '<p class="p-bottom" > Mitos y realidades sobre las personas con orientaciones sexuales e identidades de género diversas. 
Lee las siguientes frases y selecciona si es mito o realidad: </p>
',
                1 => [
                    'q' => '<p>Las niñas visten de rosa y los niños de azul</p>',
                    '1' => 'Realidad',
                    '0' => 'Mito',
                    'a' => '0',
                    'c' => 'Mito. Aunque es una frase aún muy común, cada persona puede vestirse del color que quiera y no define quién es. Los colores no tienen identidad sexo-genérica.'
                ],
                2 => [
                    'q' => '<p>La homosexualidades una enfermedad que se puede curar 
</p>',
                    '1' => 'Realidad',
                    '0' => 'Mito',
                    'a' => '0',
                    'c' => 'Mito. El 17 de mayo de 1990, la Asamblea General de la Organización Mundial de la Salud (OMS) eliminó la homosexualidad de su Clasificación Internacional de Enfermedades y en el 2018 se dejó de considerar a la transexualidad como un trastorno. La homosexualidad no es una enfermedad y por tanto no hay nada que curar.'
                ],
                3 => [
                    'q' => '<p>Ser heterosexual es lo natural </p>',
                    '1' => 'Realidad',
                    '0' => 'Mito',
                    'a' => '0',
                    'c' => 'Mito. Se piensa que la heterosexualidad es la única forma de vivir, relacionarse y por tanto se considera “natural”. Sin embargo, no hay una única forma de relacionarnos, ni hay una forma natural de ser. Los gustos sexuales son tan diversos como somos las personas.'
                ],
                4 => [
                    'q' => '<p>Los derechos de las personas LGBTTTIQ+amenaza a la familia</p>',
                    '1' => 'Realidad',
                    '0' => 'Mito',
                    'a' => '0',
                    'c' => 'Mito. Reconocer y garantizar los derechos de todas las personas ayuda a que las  familias no vivan violencia. Los derechos de las personas con orientaciones sexuales e identidades de género diversas no tienen como propósito atentar contra nadie, lo que busca es que todas las personas puedan vivir desde la dignidad, igualidad y sin violencia.'
                ],
            ],
            'slides-3' => [
                1 => '<p class="cabecera-bold"> Preguntas para reflexionar </p>

<p>1. ¿Cómo deben actuar las familias con adolescentes que rompen con la apariencia femenina o masculina tradicional?


Las personas jóvenes tienen derecho a vestirse, peinarse, maquillarse, comportarse y nombrarse como se sientan más cómodas y felices. Esto simplemente es  una forma de manifestar y expresar su identidad y personalidad, sin que necesariamente signifique que “es gay”. La manera de verse y actuar nada tiene que ver con su orientación sexual, es decir, con la atracción afectiva y sexual que siente hacia alguien. Pero, si así lo fuera, también debe ser respetado. 



2. ¿Cómo pueden las familias brindar apoyo y orientación a adolescentes lesbianas, gays y bisexuales

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
            'options-2' => [
                'data-1' => '<p class="p-bottom"> Identifica la red flag (bandera roja) de cada situación. ¿Qué es una red flag? Es una señal de alerta o advertencia que indica un comportamiento negativo, tóxico o dañino en una relación.</p>
',
                1 => [
                    'q' => '<p>No mostró empatía ante tus preocupaciones de una  enfermedad de transmisión sexual</p>',
                    '1' => '<i class="fas fa-flag red-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '1',
                    'c' => 'La falta de empatía por parte de tu pareja es una gran red flag. La empatía es muy importante, pues implica ponerse en el lugar del otro, comprender sus emociones y actuar con consideración.'
                ],
                2 => [
                    'q' => '<p>No tuvo interés en cómo te sentías o en tus emociones durante la experiencia sexual.</p>',
                    '1' => '<i class="fas fa-flag red-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '1',
                    'c' => 'Si no pregunta cómo te sientes o no se interesa verdaderamente por escucharte, es una gran red flag. Debe existir interés genuino en lo que sientes y deseas, en tus tiempos, y en lo que te hace sentir en comodidad. Recuerda, nadie puede obligarte a tener relaciones sexuales si tu no quieres y no estas de acuerdo.'
                ],
                3 => [
                    'q' => '<p> Escuchó tus preocupaciones y sobrepuso tu bienestar emocional </p>',
                    '1' => '<i class="fas fa-flag red-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '0',
                    'c' => 'El bienestar físico y emocional de ambos siempre será lo más importante.'
                ],
                4 => [
                    'q' => '<p>No le interesó cuando le contaste cómo podrían cuidarse durante la relación sexual </p>',
                    '1' => '<i class="fas fa-flag red-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '1',
                    'c' => 'La comunicación es importante en la primera y todas las veces que tengas relaciones sexuales. Es una gran red flag  cuando tu pareja no presta atención a tus palabras, deseos o preocupaciones.'
                ],
                5 => [
                    'q' => '<p>No usaron preservativos ni ningún otro método anticonceptivo </p>',
                    '1' => '<i class="fas fa-flag red-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '1',
                    'c' => 'Super red flag, la falta de prevención pone en riesgo la salud de ambos desde el contagio de una enfermedad de transmisión sexual hasta  un embarazo no deseado. La prevención es responsabilidad de ambas personas.'
                ],
                6 => [
                    'q' => '<p>No sentiste respeto hacia tu cuerpo durante el proceso</p>',
                    '1' => '<i class="fas fa-flag red-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '1',
                    'c' => 'El respeto mutuo es la base de cualquier relación sexual saludable. Si algo no se siente bien o si percibes que tu pareja no está actuando con respeto y consideración, es importante escuchar a tu intuición.'
                ],
            ],
            'slides-5' => [
                1 => '<p>Vamos a ver un poco de datos…
De acuerdo con el Fondo de Población de las Naciones Unidas (UNFPA), cada 20 segundos una adolescente que vive en América Latina y el Caribe se convierte en madre. Esto significa que estudios, carreras, proyectos de vida se quedan truncados por la maternidad temprana. 
América Latina y el Caribe es la segunda región del mundo con más embarazos en la adolescencia. 
La Encuesta Nacional de Demografía y Salud (ENDESA) en la sección de Fecundidad y Planificación familiar del 2019 señala que la tasa de fecundidad adolescente en Honduras es de 97 por cada 1000 mujeres, las mujeres de área rural es de 115 por cada 1000 y en la urbana 77. La tasa de fecundidad adolescente disminuye así como incrementa el nivel de estudios de las mujeres. De las mujeres de 15 a 19 años, 23 por ciento ha tenido un hijo nacido vivo o están embarazadas de su primer hijo. 
¿Y los hombres en Honduras a qué edad son padres?, la ENDESA señala que 3.8% de los hombres entre 15 a 19 años y de 20 a 24 años se convirtieron en padres antes de los 18 años. En Honduras el 23% de las mujeres de 15 a 19 años, alguna vez estuvo embarazada, en esa misma edad solo el 3% de los hombres han tenido un hijo. 

¿Qué se puede hacer? Los embarazos tempranos se pueden prevenir si brindamos información para decidir </p>
',
                2 => '	<p> ¿Esto significa que tener una hija o hijo es un riesgo o un problema? Claro que no, pero si es un riesgo para tu salud, desarrollo y bienestar siendo adolescente. 
La maternidad temprana obstaculiza las perspectivas educativas de una mujer joven, aminora su autonomía social y económica de largo plazo, y compromete tanto su salud como la de su recién nacido. 


Te invitamos a ver el siguiente vídeo para conocer la experiencia de una madre adolescente: 

</p>',
                3 => '	<p> Te invitamos a ver el vídeo </p>
<iframe width="480" height="400" src="https://www.youtube.com/embed/yubGD6f8Vps?autoplay=1&mute=1" title="YouTube" frameborder="0" allowfullscreen></iframe>',
                4 => '	<p> La ENDESA señala que el porcentaje de las adolescentes que ya son madres o están embarazadas de su primer hijo, es mayor entre las mujeres del área rural con 28% que entre las del área urbana 16.5%. En cuanto a la maternidad y paternidad temprana, 2.5% son mujeres y 0.4% hombres de 15 a 49 años han tenido un hijo nacido vivo antes de los 15 años, respectivamente. 
Son las y los adolescentes de zonas rurales y comunidades con bajos ingresos, adolescentes afrodescendientes quienes tienen mayor dificultad para acceder a su derecho a la salud por los tabúes y normas sociales que dificultan el acceso a la educación integral en sexualidad, servicios de salud y opciones para desarrollarse personal y profesionalmente.</p>',
                5 => '	<p> La prevención del embarazo en adolescentes incluye acciones en el área de salud sexual y reproductiva, pero no se limita solamente a ellas.También requiere un abordaje integral y multisectorial en el que se incorporen acciones orientadas a fortalecer la equidad de género, erradicar la violencia de género y la violencia sexual, y mejorar el nivel educativo de la población, especialmente de las mujeres. Además, es fundamental crear oportunidades de generación de ingresos para jóvenes y adolescentes.

El acceso a servicios de salud y a información sobre  educación sexual integral son herramientas que habilitan poder elegir


Te invitamos a ver el siguiente video de cómo se está implementando la educación sexual integral en otras escuelas
GAIE, para que cada persona joven alcance su pleno desarrollo:
<span class="btn-enlace"><a href=" https://youtu.be/d5_g_xRMAmU  " target="_blank">Ir a información</a></span></p>
',
            ],
            'slides-6' => [
                1 => '<p> 1.-Busca a una persona adulta de tu familia que tenga hijas o hijos con quien te sientas en confianza para  platicar.
2.- Toma lápiz y papel, y realiza la siguiente entrevista. Las siguientes preguntas te ayudarán a guiar la conversación: 

Cuándo tenías mi edad, ¿qué tipo de información te daban sobre educación sexual?
¿Alguien te habló del embarazo y lo que implicaba tener hijas e hijos?
¿Cuáles han sido los retos de ser madre o padre?
¿Te hubiera gustado tener más información cuando tenías mi edad?

3.- Agradece a la persona que ha respondido tus preguntas e invitala a consultar el bloque de información para madres, padres y tutores. 
4.- Lee las respuestas que la persona entrevistada te dio y reflexiona: 
¿Qué información tienes ahora que antes no había? 
¿En este momento tienes la posibilidad económica, la salud, y la información suficiente para ser madre o padre?
¿Qué información necesitas o te hace falta? No te preocupes, continua en este sitio web, tenemos más información para ti. 
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


¿Te acuerdas de la primera vez que tuviste tu ciclo menstrual? Es muy probable que muchas de las frases con las que iniciamos este bloque las hayas escuchado o te las hayan dicho en algún momento de tu juventud y es que hablar del ciclo menstrual…. shhhhhhh no se habla o se habla en voz baja….. 
Si eres hombre y estás leyendo este bloque, te invitamos a que sigas leyendo, el ciclo menstrual también es información para ti. 
El ciclo menstrual no es un tema que nos deba dar miedo, al contrario es parte de conocer tu cuerpo, saber cómo te sientes o cómo se siente tu pareja, y de entender que los cambios en el cuerpo son naturales. No hay nada de qué asustarnos.
</p>',
                '¿Qué es la menstruación?' => 'Es un proceso en el cual el útero desprende sangre y tejido por la vagina durante 2 a 5 días, pueden ser más días. Sí, sale sangre y no un líquido azul como muchos anuncios en televisión lo han mostrado por años.',
                'Pre-ovulación' => 'Es la fase después de la menstruación en la que madura uno de los óvulos que se encuentra dentro de los ovarios. Se presenta entre los días 6 y 13 del ciclo. De forma natural, el cuello uterino genera un moco que lubrica la vagina ayudando a los espermatozoides a llegar al óvulo para fecundarlo. En esta fase, el moco vaginal es escaso, de consistencia pegajosa y de aspecto blanquecino o amarillento.',
                'Ovulación' => 'El óvulo madura y es liberado hacia el útero, a través de las Trompas de Falopio, haciendo que los niveles de hormonas aumenten y ayuden a preparar el recubrimiento del útero para el embarazo. En esta fase, el moco vaginal es abundante, elástico y tiene el aspecto de una clara de huevo.',
                'Post-Ovulación' => 'En esta fase, los niveles de hormonas comienzan a bajar y algunas mujeres pueden presentar el síndrome premenstrual. Notarás que el moco vaginal vuelve a presentar características similares a las de la fase de pre-ovulación. Si el óvulo no es fecundado, será expulsado en la próxima menstruación.
¿Qué es el síndrome premenstrual? Los síntomas suelen empezar en la segunda mitad del ciclo menstrual (14 días o más después del primer día de su último ciclo menstrual) y suelen desaparecer de 1 a 2 días después de que el periodo menstrual comienza.
En cada cuerpo los síntomas pueden variar, algunos de los síntomas más comunes son: sensibilidad en las mamas, sensación de gases, estreñimiento o diarrea, dolor de cabeza, fatiga, sentimientos de tristeza, enojo, ansiedad, depresión. 
No existen pruebas para detectar cuáles son tus síntomas, pero llevar un diario de tu menstruación te puede ayudar a identificar cuales son tus síntomas y cuantos días duran.
Si estos síntomas son muy fuertes que no te permite levantarte de la cama o moverte es recomendable que acudas con un especialista.'
            ],
            'options-3' => [
                1 => [
                    'q' => '<p>Bañarse con el período te puede volver estéril para siempre </p>',
                    '1' => 'Realidad',
                    '0' => 'Mito',
                    'a' => '0',
                    'c' => 'Mito. Se cree que bañarse cuando estás menstruando puede causar infertilidad, pero esto no es verdad.
'
                ],
                2 => [
                    'q' => '<p>Si nadas teniendo la regla, los tiburones te atacarán </p>',
                    '1' => 'Realidad',
                    '0' => 'Mito',
                    'a' => '0',
                    'c' => 'Mito. Nadar mientras tienes la regla no aumenta el riesgo de un ataque de tiburones. '
                ],
                3 => [
                    'q' => '<p>La regla debilita</p>',
                    '1' => 'Realidad',
                    '0' => 'Mito',
                    'a' => '0',
                    'c' => 'Mito. Puede hacerte sentir más cansada o con flojera, pero no te hace más débil.'
                ],
                4 => [
                    'q' => '<p>La menstruación tiene una duración de entre  2 y 7 días, pero hay mujeres a las que les puede durar más tiempo </p>',
                    '1' => 'Realidad',
                    '0' => 'Mito',
                    'a' => '1',
                    'c' => 'Realidad. La regla puede durar un poco más.'
                ],
            ],
            'slides-8' => [
                1 => '<p class="cabecera-bold" > Diario del ciclo menstrual </p>
<p>Este diario también puedes compartirlo con tus amigas. Háganlo juntas como una forma de dialogar de lo que viven y sienten en sus ciclos menstruales. 

1.- Elige un cuaderno, y usa colores, marcadores, y pegatinas para decorarlo.
2.- En una hoja, escribe el mes y año. Por ejemplo: Enero 2026. Luego escribe los números de cada día de ese mes a manera de lista y a  lado escribe el título “Lo que observe de mi cuerpo”.
3.- Repite hasta tener los 12 meses y las 12 secciones de “Lo que observe de mi cuerpo”.
4.- En cada casilla del día ve marcando qué cambios observas: físicos, emocionales, sexuales y afectivos.  
5.- Al llegar tu menstruación, registra si aparece flujo abundante o moderado, si aparecen dolores, y cómo van cambiando cada día. 
6.- Con el paso de los meses, podrás observar qué tan recurrentes son los  síntomas  en tu cuerpo y en tus emociones, y si han ido cambiando. 

 
Para más información sobre los mitos, consulta: UNICEF, Día de la Higiene Menstrual: 10 falsos mitos sobre la regla,
Disponible en:
<span class="btn-enlace"><a href="https://www.unicef.es/blog/educacion/dia-higiene-menstrual-falsos-mitos-sobre-la-regla " target="_blank">Ir a información</a></span>
</p>',
            ],
            'slides-9' => [
                1 => '	<p class="cabecera-bold" > El derechos a la salud también es la prevención
 
	<p> La mejor manera de prevenir un embarazo es usando un método anticonceptivo. También te ayudará a prevenir una enfermedad  de transmisión sexual. 
¿Alguna vez te han dicho que al usar condón no se siente igual?, ¿O has escuchado que el condón aprieta? 
Pues no, eso no es verdad. Lo que sí es verdad, es la importancia de  hablar de los métodos anticonceptivos y cómo usarlos. Sí, puede ser incómodo pero es MUY IMPORTANTE para tu salud y la salud de tu pareja. 
</p>',
                2 => '	<p class="cabecera-bold"> ¿Te da pena hablar con tu pareja sobre métodos anticonceptivos?</p>
	<p> Te recomendamos seguir los siguientes pasos:
1.- Inhala y exhala
2.- Elige un tema de conversación, platiquen, rían, e intercambien puntos de vista 
3.- En el momento que creas más adecuado, saca el tema de los métodos anticonceptivos. Puede ser incómodo, sí, pero es importante que conversen. 
4.- No forces la conversación. Deben sentir la confianza el uno en la otra para platicar.
5.- Intercambien puntos de vista, preocupaciones y preguntas
6.- Busquen en conjunto toda la información necesaria para tomar decisiones informadas.</p>
',
                3 => '	<p> ¿Y en Honduras, dónde puedo buscar información?  
En Servicios de Salud Amigables para Adolescentes (SSAA), ubicados en hospitales y centros de salud. Ahí también distribuyen de manera gratuita condones, implantes y píldoras anticonceptivas de emergencia. 

 Módulo de Salud Sexual y Reproductiva, Módulo de atención a adolescentes. 

 
En programas escolares y campañas apoyadas por la Estrategia Nacional para la Prevención del Embarazo Adolescente (ENAPREAH).
 
En la aplicación móvil “Reproductiva” para consultas sobre salud sexual y reproductiva.</p>
',
            ],
            'accordion-3' => [
                'Preservativo masculino y femenino' => 'Los preservativos son un método de barrera que se usa una vez y se desecha. Ayudan a prevenir embarazos y proteger contra enfermedades  de transmisión sexual, incluido el VIH/SIDA.

Los preservativos más comunes son:
Condón masculino: Disponible de forma gratuita en centros de salud, hospitales y campañas educativas.
Condón femenino: Disponible de forma gratuita en algunos centros de salud y ONG. Protege también parte externa de la vulva.

 
Para asegurar un uso efectivo del condón, se debe colocar antes del contacto genital, dejar espacio en la punta, y retirar después de la eyaculación. Se usa uno nuevo en cada relación.
 
Ventajas:
 
No requieren receta médica
Es fácil de conseguir y usar
Es ideal para jóvenes por su accesibilidad y doble protección

Desventajas:

Puede romperse durante el coito sin darnos cuenta
Requiere de un uso correcto para garantizar protección

 

Más información sobre preservativos:

Preservativos
<span class="btn-enlace"><a href=" https://www.who.int/es/news-room/fact-sheets/detail/condoms " target="_blank">Ir a información</a></span>

Preservativo Femenino vs Preservativo Masculino: ¿Cuál elegir? 
<span class="btn-enlace"><a href="https://www.conlamujer.com/blog/preservativo-femenino-y-preservativo-masculino-cual-elegir#:~:text=En%20relaci%C3%B3n%20con%20su%20uso,y%20la%20vulva4%2C5." target="_blank">Ir a información</a></span>
',
                'Espermicidas (óvulos, jaleas, cremas, espumas)' => 'Los espermicidas son sustancias químicas que inmovilizan o destruyen los espermatozoides. Su presentación puede ser en óvulos, jaleas, cremas o espumas, y se aplican en la vagina antes del coito.
Su uso combinado con el condón aumenta su eficacia para prevenir embarazos.
 
Ventajas:
 
No requiere receta médica
Se puede combinar con otros métodos anticonceptivos
 
Desventajas:
 
Tiene baja eficacia para prevenir embarazos si se usan solos
No protege contra las enfermedades de transmisión sexual
Pueden causar irritación o alergias
Hay un acceso limitado en farmacias hondureñas
',
                'Anticonceptivos orales combinados (la píldora)' => 'Las píldoras anticonceptivas contienen hormonas que inhiben la ovulación. Se deben tomar diariamente por la mujer.
 
Ventajas:
 
Tiene una alta eficacia para prevenir embarazos si se toman correctamente, sin faltar un solo día
Ayudan a regular el ciclo menstrual
 
Desventajas:
 
Requieren evaluación médica previa y receta médica
No protegen contra las enfermedades de transmisión sexual
Requieren disciplina por parte de la persona 
 
En adolescentes, se recomienda iniciar su uso sólo si hay ciclos menstruales regulares por al menos dos años.
',
                'Implantes subdérmicos' => 'Los implantes subdérmicos son pequeñas barritas colocadas bajo la piel del brazo de la mujer. Liberan hormonas que previenen la ovulación.
 
Duración: 3 a 5 años, según la marca del implante.
 
Ventajas:
 
Tiene alta eficacia para prevenir embarazos
No requieren atención diaria
 
Desventajas:
 
No protegen contra las enfermedades de transmisión sexual
Requieren inserción y retiro por profesional de la salud
Puede provocar desbalances hormonales a corto plazo
',
                'Dispositivo intrauterino (DIU)' => 'Es un dispositivo en forma de "T" que se coloca dentro del útero (puede ser de cobre o hormonal).

Duración: 3 a 10 años, según el tipo.
 
Ventajas:
 
Tiene alta eficacia para prevenir embarazos
Ideal para adolescentes con actividad sexual frecuente
Requiere supervisión médica constante
 
Desventajas:
 
No protege contra las enfermedades de transmisión sexual 
Requiere colocación por profesional de la salud
Puede causar molestias o cólicos durante varios días después de la colocación
 

En Honduras, el uso del DIU y los implantes subdérmicos en adolescentes es aceptado médicamente si hay consentimiento informado, seguimiento y acompañamiento adecuado.
',
                'Píldora anticonceptiva de emergencia (PAE)' => 'Desde 2023, está autorizado y legalizado el uso de la píldora anticonceptiva de emergencia en Honduras, incluso para adolescentes mayores de 12 años.

Esta píldora es también conocida como la "pastilla o píldora del día después". Evita el embarazo si se toma dentro de las primeras 72 horas tras una relación sexual sin protección.

Se distribuye gratuitamente en centros de salud públicos, Ciudad Mujer, organizaciones como UNFPA y algunas farmacias.

Es importante tener en cuenta que este NO es un método de uso regular, solo para casos de emergencias.

Conoce más sobre el tema en:
La pastilla anticonceptiva de emergencia (PAE) en Honduras
<span class="btn-enlace"><a href="https://mdemujer.org/pae-honduras/" target="_blank">Ir a información</a></span>

La pastilla del día después vuelve a ser legal en Honduras
<span class="btn-enlace"><a href="https://elpais.com/america/sociedad/2023-03-09/la-pastilla-del-dia-despues-vuelve-a-ser-legal-en-honduras.html" target="_blank">Ir a información</a></span>

Honduras avanza en garantía de derechos al legalizar la anticoncepción oral de emergencia
<span class="btn-enlace"><a href="https://reproductiverights.org/news/honduras-anticoncepcion-oral-de-emergencia/#:~:text=Marzo%2023%20de%202023%2C%20(Declaraci%C3%B3n,de%20emergencia%2C%20conocida%20como%20PAE." target="_blank">Ir a información</a></span>
',
                'Métodos NO recomendados como opción principal' => 'Los siguientes métodos no son recomendados como opción principal, pero en ocasiones pueden acompañar otros métodos anticonceptivos: 

1. Coito interrumpido: Consiste en retirar el pene antes de la eyaculación. Sin embargo, NO es efectivo ya que el líquido preeyaculatorio puede contener espermatozoides. Este método falla con frecuencia, sobre todo en adolescentes.
 
2. Métodos naturales (ritmo, temperatura basal, moco cervical): Es un método basado en la observación del ciclo menstrual y los días fértiles. Tiene baja eficacia si no se aplican con mucha experiencia y constancia.
 
No protege contra enfermedades de transmisión sexual.

3.Métodos quirúrgicos o definitivos

Aunque efectivos para prevenir embarazos, NO se recomiendan para adolescentes. Son procedimientos permanentes y sólo deben realizarse en adultos con consentimiento informado.
 
Vasectomía (hombre): Es el corte y ligadura realizados en los conductos deferentes unos centímetros arriba de los testículos, para interrumpir el paso de los espermatozoides y su salida en la eyaculación. Es 99% segura pero solamente se realiza a adultos con la seguridad absoluta de no querer procrear otro hijo. Es definitiva.
 
Salpingoclasia (mujer): Es la ligadura de trompas de falopio para impedir el paso del óvulo. En ocasiones es reversible. 
 
Histerectomía: Extirpación del útero. Solo se practica en casos médicos graves (por ejemplo, cáncer). No debe usarse como anticonceptivo sin consentimiento pleno.
',
                'Recursos disponibles en Honduras' => 'Servicios de Salud Amigables para Adolescentes (SSAA) en hospitales y centros de salud.
 
Educación sexual integral incluida en programas escolares y campañas apoyadas por la Estrategia Nacional para la Prevención del Embarazo Adolescente (ENAPREAH).
 
Aplicación móvil “Reproductiva” para consultas sobre salud sexual y reproductiva.
 
Distribución gratuita de condones, píldoras, implantes y PAE en centros públicos.
',

                'Aborto' => 'El aborto en Honduras esta prohibido bajo cualquier circunstancia desde 1982. En el 2021 el Congreso aprobó incluir la prohibición del aborto en la Constitución en el artículo 67. 
El Código Penal de Honduras establece en el artículo 196 las diferentes sanciones en caso de aborto con o sin consentimiento. 
',
                'data-1' => '<p class="cabecera-bold" >Reflexión</p>
                <p class="p-bottom">En Honduras, las y los adolescentes tienen derecho a recibir información clara y basada en evidencia sobre su salud sexual y reproductiva. Existen métodos anticonceptivos seguros, accesibles y legales que se pueden adaptar a sus necesidades. El acompañamiento de profesionales de salud y el respeto a su autonomía son clave para prevenir embarazos no deseados y enfermedades de transmisión sexual. </p>',
            ],
            'accordion-4' => [
                'data-1' => '<p class="cabecera-one "> Las Enfermedades de Transmisión Sexual</p>
                <p class="cuerpo-texto p-bottom">Las Enfermedades de Transmisión Sexual (ETS) o Infecciones de Transmisión sexual (ITS) son padecimientos infecto contagiosos que se contraen generalmente por realizar el coito en condiciones de higiene inapropiadas y/o con personas ya infectadas.

Las adolescencias son víctimas comunes de algunas de estas enfermedades debido, entre otras razones, a la falta de información verídica sobre cómo evitarlas y sobre los síntomas asociados a ellas, y a los sentimientos de vergüenza o temor para acercarse a centros de salud o a personas adultas (padres, madres, maestros, personal médico, etc.) que puedan orientarles y acompañarles adecuadamente.

La OMS (Organización Mundial de la salud) ha clasificado como ITS/ETS los siguientes padecimientos:
</p>',
                ' VIH/SIDA (virus de la inmunodeficiencia humana)' => 'Causado por: virus.

Síntomas: incremento en la frecuencia y la severidad de las infecciones virales, fiebres, sudores nocturnos, pérdida de peso, fatiga, inflamación en los ganglios linfáticos, entre otros. Las personas seropositivas pueden presentar algunos de estos síntomas. Las personas con SIDA presentan la gran mayoría de los síntomas de forma simultánea y persistente.

Transmisión: comumenmente es por coito, ya sea anal, vaginal u oral sin protección debido al intercambio de fluidos (semen, flujo vaginal, sangre). También por  transfusión sanguínea o trasplante de órganos con  una persona infectada, de la placenta de la madre al feto durante el embarazo o por la leche materna, o por compartir agujas hipodérmicas con una persona infectada.

Existen muchos mitos sobre la transmisión del SIDA y es conveniente aclararlos:NO se transmite por tomar del mismo vaso, usar el mismo baño, usar los mismos cubiertos, un abrazo o un beso, nadar en la misma alberca, ni por contacto físico.

Existen estigmas sobre poblaciones específicas de riesgo (personas homosexuales, personas que se dedican al trabajo sexual, etc.), sin embargo, todas las personas pueden estar expuestas si no se toman los cuidados necesarios.

Tratamiento: actualmente no existe una cura específica, sin embargo existen tratamientos para mejorar la calidad de vida y disminuir los síntomas; en muchos casos sigue siendo una enfermedad mortal.
',
                'Sífilis' => 'Causada por: una bacteria (espiroqueta) llamada Treponema pallidum.
 
Causada por: una bacteria (espiroqueta) llamada Treponema pallidum.
 
Período de incubación: 3 semanas aproximadamente después del contacto sexual con una persona infectada.
 
Síntomas: transcurrido el tiempo de incubación, aparece en el lugar de penetración de la bacteria una lesión llamada chancro, que es como una úlcera, que puede pasar inadvertida pues no produce dolor ni secreción. Si no es detectada, esta enfermedad sigue su evolución dando lugar a la llamada sífilis secundaria. Los síntomas asociados con ésta son: pérdida de cabello en áreas específicas, úlceras en la garganta y glándulas inflamadas. Si aún en esta etapa la sífilis no es tratada, vuelve a ser latente y transcurridos de dos a tres años aproximadamente, la sífilis se convierte en sífilis tardía, provocando trastornos en la piel, los huesos, el corazón y a nivel del sistema nervioso central.
 
Consecuencias: trastornos en las válvulas coronarias, daños cerebrales y en la médula espinal, deformaciones y trastornos en las encías. Durante el embarazo puede pasar a través de la placenta al feto, produciendo abortos al principio de la gestación.Cuando el embarazo está más avanzado, deja lesiones al niño o niña como alteraciones en los dientes, cicatrices, lesiones en huesos, nariz, paladar y en, algunos casos, ceguera o sordera.
 
Transmisión: por contacto sexual, por contacto directo con otras áreas mucosas como la boca y el recto, o bien heridas o rozaduras infectadas con la bacteria. La sífilis también se adquiere por transfusiones sanguíneas y a través de la placenta de la madre al feto.
 
Tratamiento: aplicación de penicilina de larga duración u otros antibióticos. La pareja sexual de la persona que tiene sífilis debe ser tratada médicamente al mismo tiempo.
',
                'Gonorrea' => 'Causada por: bacterias.
 
Período de incubación: de 2 a 10 días posteriores al contagio.
 
Síntomas: las mujeres, por lo regular, no presentan ningún síntoma, aunque en algunos casos puede presentarse un flujo purulento acompañado de irritación vaginal o dolor al orinar.
 
En el hombre, puede presentarse ardor acompañado de secreción purulenta que sale a través del conducto uretral al orinar. Primero, esa secreción es amarillenta, si no hay tratamiento se puede volver verduzca, y finalmente, sanguinolenta. Ocasionalmente, se presentan inflamaciones y ardor continuo en el bajo vientre. Es pertinente aclarar que en un porcentaje reducido (alrededor de 20%) de varones no presentan síntoma alguno.
 
Consecuencias: enfermedades pélvicas inflamatorias, esterilidad, artritis, problemas cardíacos, del hígado y meningitis. Si una mujer embarazada tiene una infección por gonorrea, puede transmitir la infección al bebé cuando pasa por el canal de parto.  

Transmisión: por contacto directo con membranas mucosas infectadas como el útero, cérvix, ano, garganta y ojos.
 
Tratamiento: series de antibióticos durante una o dos semanas.
',
                'Herpes genital o herpes simple tipo II' => 'Causado por: virus.
 
Período de incubación: de 3 a 20 días después del contagio inicial, persistiendo las molestias durante 2 a 4 semanas.
 
Síntomas: sensación de ardor en el sitio del contagio. Posteriormente aparecen unas pequeñas vesículas rodeadas de tejido enrojecido. Luego, las vesículas pueden romperse convirtiéndose en pequeñas llagas húmedas y muy dolorosas. Puede aparecer fiebre, dolor de cabeza e inflamación de los ganglios.
 
Transmisión: por contacto directo con vesículas o úlceras abiertas que estén infectadas.
 
Consecuencias: se pueden sufrir recaídas durante varios años. Si la infección se presenta durante los primeros meses del embarazo, el riesgo de que la mujer tenga un aborto involuntario aumenta. El herpes se puede contagiar durante el periodo gestacional, el virus se transmite en el útero, también conocido como herpes intrauterino. Durante el parto al pasar por el canal de parto puede contagiarse.  

Asimismo, puede contagiar al hijo durante el parto.
 
Tratamiento: no existe aún tratamiento específico para eliminar el virus del herpes genital. Lo único que puede hacerse es dar tratamiento sintomático para controlar el dolor, a base de analgésicos, higiene sexual, empleo de preservativos y cirugía reconstructiva en casos extremos.
',
                'Condiloma' => 'Causada por: virus.
 
Período de incubación: de uno a tres meses.
 
Síntomas: crecimientos en forma de verrugas, usualmente en los genitales o en el ano.
 
Transmisión: por contacto directo con verrugas infectadas.
 
Consecuencias: es una infección altamente contagiosa. Las verrugas pueden  esparcirse lo suficiente como para obstruir los orificios vaginales, rectales o de la garganta. En la mujer puede predisponer su organismo para el cáncer cervical.
 
Tratamiento: no hay cura específica. Las verrugas pueden eliminarse por medios químicos o quirúrgicos.
',
                'Vaginitis monilial' => 'Causada por: hongos.
 
Período de incubación: variable.
 
Causada por: hongos.
 
Período de incubación: variable.
 
Síntomas: puede ser asintomático, la mujer es la que con mayor frecuencia la padece, sufriendo comezón en la vulva y flujo constante con apariencia de levadura, así como resequedad vaginal. En el hombre, los hongos de la especie monilias pueden eventualmente provocar inflamación del pene.
Los síntomas activos pueden surgir después de una terapia antibiótica o por contacto directo, ya sea con una persona o con ropa infectada.
 
Transmisión: el hongo puede localizarse en la boca, vagina o recto sin causar molestias. 
 
Consecuencias: infecciones secundarias por bacterias.
En caso de tener vaginitis y estar embarazada aumenta el riesgo de trabajo de parto prematuro. 
 
Tratamiento: usualmente con cremas, ungüentos o supositorios, eventualmente se prescriben medicamentos orales en los casos resistentes.
',
                'Clamidia' => 'Causada por: bacterias.
 
Período de incubación: de 1 a 4 semanas después del contagio.
 
Síntomas: algunas veces no hay síntomas, pero en la mujer puede provocar enfermedad pélvica inflamatoria, esto es, fiebre, dolor durante el coito, dolor abdominal, ardor al orinar, flujo vaginal y sangrados intermenstruales. En el hombre, puede producir dolor al orinar, secreción acuosa del pene, uretritis inespecífica o no gonocócica.
 
Transmisión: por contacto sexual vaginal, anal o bucal.
 
Consecuencias:En los hombres puede producir artritis e inflamación de los testículos. En la mujer puede afectar el cuello del útero, trompas de falopio, ovarios y uretra. Puede transmitirse al bebé durante el parto lo cual le puede infectar los ojos y causar pulmonía.
 
Tratamiento: usualmente con antibióticos se puede detener la infección.
',
                'Tricomoniasis' => 'Causada por: parásitos que pueden vivir hasta 7 horas fuera del cuerpo humano.
 
Período de incubación: de 4 a 28 días.
 
Síntomas: algunas veces no hay síntomas, pero en las mujeres puede provocar flujo vaginal verduzco acompañado de mal olor, dolor al orinar, inflamación en la vulva y vagina, y dolor abdominal. En los hombres puede generar secreción por el pene y malestar.
 
Transmisión: por contacto sexual y a través de toallas, sábanas y otros objetos personales compartidos con personas infectadas. Según datos del Organismo Mundial de la Salud, en 2020, hubo aproximadamente 156 millones de casos nuevos de infección por tricomoniasis entre personas de 15 a 49 años.
 
Consecuencias: en las mujeres puede producir inflamación y obstrucción de las trompas de falopio, lo que se convertiría en esterilidad. Si alcanza el aparato urinario, tanto del hombre como de la mujer, se puede expandir la infección allí.
 
Tratamiento: existen medicamentos locales y orales para combatir esta enfermedad.
',
                'Hepatitis tipo B' => 'Causado por: virus.
 
Período de incubación: aproximadamente de 8 a 30 días después del contacto.
 
Síntomas: dolor muscular, fiebre, cansancio, pérdida del apetito y dolor de cabeza. Algunas veces se presenta color oscuro en la orina, palidez, los ojos amarillos y malestar en el hígado.
 
Transmisión: a través de contacto sexual anal, vaginal u oral, mediante el uso de agujas infectadas y transfusión sanguínea. También puede ser transmitido por personas infectadas que no se laven las manos después de defecar y a través de los alimentos.
 
Consecuencias: altamente contagiosa en los primeros días y puede causar daño en el hígado y llevar a la muerte. Se puede transmitir de la madre al bebé durante el embarazo y parto. 
 
Tratamiento: el médico debe diagnosticarla y dar tratamiento sintomático. Existe una vacuna contra esta enfermedad. Debe guardarse reposo en casa o en el hospital, aproximadamente por dos semanas.
',
                'Pediculosis (piojo púbico, se conoce comúnmente con el nombre de ladilla)' => 'Causado por: parásitos de tamaño diminuto que habitan en las regiones vellosas del cuerpo, especialmente en el pubis.
 
Período de incubación: de una a cuatro semanas.
 
Síntomas: comezón intensa.
 
Transmisión: puede contagiarse tanto por contacto sexual como por contacto con camas, ropas, sanitarios y toallas que hayan usado personas infectadas.
 
Consecuencias: infecciones secundarias como resultado del rascado.
 
Tratamiento: lavar el área infectada con una preparación insecticida que destruye los piojos adultos y sus huevos. Esto deben hacerlo ambos miembros de la pareja. Adicionalmente, se deberán mantener limpias la ropa de cama y las toallas de baño.
',
                'data-2' => '<p class="cabecera-one ">Medidas preventivas</p>
<p class="cuerpo-texto p-bottom">EEs importante informar al adolescente que cada vez que tenga relaciones sexuales existe riesgo de contagio de una enfermedad sexualmente transmisible. Por lo tanto, una vez que el hombre y la mujer han iniciado su vida sexual, es conveniente incorporar a su vida las siguientes medidas preventivas:
</p>',
                'Medidas preventivas' => '
Tener hábitos de higiene adecuados.

Tener relaciones sexuales con una sola pareja en cierto periodo de tiempo.

Usar preservativos rutinariamente (como condón) para todo tipo de coito. y aún teniendo una pareja estable.

Evitar el intercambio de fluidos corporales tales como semen, fluidos vaginales y sangre.

Inspeccionar los genitales propios y de la pareja periódicamente.

Lavar los genitales después del coito.

Orinar después del coito.

Someterse a exámenes médicos individuales y de pareja periódicamente.

Evitar la exposición a/de lesiones en la piel a través de las cuales se puede contagiar alguna enfermedad.

Cuando haya que inyectarse, utilizar siempre agujas y jeringas desechables tirándose a la basura inmediatamente después de usarlas (previo doblado de la aguja). De no ser posible asegurarse que la aguja y la jeringa hayan sido esterilizadas adecuadamente, se puede lavar y hervir la jeringa y aguja durante 10 minutos en un recipiente limpio. El uso debe ser inmediato.

Utilizar ropa interior de algodón, no de nylon, para permitir la adecuada ventilación y transpiración del cuerpo.


Llevar a cabo estas recomendaciones es esencial para mantener en condiciones adecuadas los órganos genitales, ayudar a su buen funcionamiento, evitar enfermedades que los afecten, y preservar una vida sexual y reproductiva sana.

Consulta: 
Organización Mundial de la Salud (OMS), Salud Sexual, definiciones. 
<span class="btn-enlace"><a href="https://www.who.int/es/health-topics/sexual-health#tab=tab_2 " target="_blank">Ir a información</a></span>
'
            ],
            'slides-10' => [
                1 => '	<p> Construir relaciones sanas y seguras es muy importante para todas las personas.Tener una relación no significa tener a la novia más guapa o al novio más musculoso, significa tener un vínculo donde podamos crecer, compartir y construir.

No existe una receta mágica para construir una relación de noviazgo sana, tampoco se hace con una pócima ni contestando un cuestionario para evaluar a nuestra pareja. Debe construirse todos los días en conjunto, pues no se trata sólo de nuestro bienestar, la otra persona también tiene necesidades y deseos. 

</p>',
                2 => '	<p> ¿Responsabilidad afectiva? 

Responsabilidad afectiva es lo más cercano a una receta mágica en la pareja, y consiste en ser capaces de expresar nuestras necesidades y emociones siendo respetuosas y respetuosos de las emociones de la otra persona.

Para tener una responsabilidad afectiva es importante aplicar lo siguiente: 
- Respeto
- Honestidad
- Reciprocidad 
- Disponibilidad para dialogar
- Saber cuándo y cómo decir adiós 
</p>',
                3 => '	<p> Recomendaciones 

De nuevo, no hay una receta mágica para construir una relación de pareja sana, pero seguir las siguientes recomendaciones te ayudará a lograrlo: 

1.- Ten un proceso de autoconocimiento para identificar qué es lo que buscas en una pareja, qué puedes dar, y qué significa para ti estar en una relación. También reconoce con honestidad si la otra persona se encuentra dispuesta a ser parte de una relación contigo.

Recuerda: no puedes obligar a alguien a tener una relación si no quiere. 

2.- Asignen tiempo para que cada persona tenga espacios de esparcimiento y desarrollo personal. Esto no quiere decir que no estarán juntos, al contrario se trata de generar espacios para el crecimiento individual y de  pareja. 

3.- No tengan miedo a las conversaciones incómodas, es importante tenerlas. Esto no quiere decir que se van a pelear a cada rato; significa que van a poder construir una buena comunicación basada en la escucha, el respeto y la capacidad de llegar acuerdos. También les permitirá alinear las expectativas que tienen en su relación.

4.- Marquen límites claros y respétenlos.  Si hay un acuerdo, respeta ese acuerdo. Esto construirá la confianza en la otra persona. 

5.- Actúa con empatía, escucha de manera activa, y busca entender y apoyar a la otra persona. 

6.- Busca resolver conflictos, y no, no se pueden resolver los conflictos con violencia. La violencia nunca se debe justificar en una relación. Evita las culpas, busquen espacios para conversar y buscar soluciones. 
</p>',
            ],
            'options-4' => [
                'data-1' => '<p class="p-bottom" >Identifica la red flag (bandera roja) de cada situación. ¿Qué es una red flag? Es una señal de alerta o advertencia que indica un comportamiento negativo, tóxico o dañino en una relación.</p> 
',
                1 => [
                    'q' => '<p>Tu pareja busca controlar tus actividades</p>',
                    '1' => '<i class="fas fa-flag red-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '1',
                    'c' => 'Una pareja que te controla de alguna manera probablemente tiene problemas personales profundos en los que debe trabajar. Reconsidera tu relación si tu pareja trata de controlar a quién ves, con quién hablas, a dónde vas, cómo gastas tu dinero, qué haces en línea (redes sociales), qué ropa usas, qué escuchas o incluso qué comes.'
                ],
                2 => [
                    'q' => '<p>Has identificado que tu pareja miente sobre lo que hace o a dónde va </p>',
                    '1' => '<i class="fas fa-flag red-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '1',
                    'c' => 'Cuando una persona tiene dificultades para ser honesto consigo mismo, puede resultarle difícil ser honesto contigo. Es posible que parte de este comportamiento no sea malintencionado, sino simplemente una forma aprendida o un hábito de afrontamiento. Sin embargo, una persona que te miente sin reservas, que se considera irresponsable de sus acciones, carece de integridad y de respeto por su pareja.'
                ],
                3 => [
                    'q' => '<p>En ocasiones, tu pareja grita de más o golpea la pared cuando tienen un desacuerdo</p>',
                    '1' => '<i class="fas fa-flag red-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '1',
                    'c' => 'Toma nota de cualquier problema de ira en tu pareja, ya sea mientras están peleando o no. Si se enoja  fácil, tiene frecuentes arrebatos explosivos o cambia de emociones rápidamente (es decir, de la felicidad a la rabia), esto muestra una falta de capacidad para regular las emociones de una manera saludable., Este comportamiento te pone en riesgo y, en última instancia, es simplemente desagradable (e incluso aterrador) estar cerca de alguien así.'
                ],
                4 => [
                    'q' => '<p>Has tenido que justificar constantemente sus acciones </p>',
                    '1' => '<i class="fas fa-flag red-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '1',
                    'c' => 'Si te das cuenta que te la pasas justificando todo lo que hace o dice tu pareja, a pesar de que tu instinto te dice que está  mal, entonces es una señal de alerta infalible.

Si te encuentras justificando su mentalidad o acciones, aún cuando no estás de acuerdo con ellas, entonces es hora de hacer una pausa y dar un paso atrás. Nuestro cerebro trabaja horas extras para convencernos de que alguien que estimamos es bueno para nuestra vida, a pesar de que en nuestras entrañas sabemos que no lo es.
'
                ],
                5 => [
                    'q' => '<p> A tu pareja no le interesa tener conversaciones sobre sus deseos más profundos </p>',
                    '1' => '<i class="fas fa-flag red-flag"></i>',
                    '0' => '<i class="far fa-flag"></i>',
                    'a' => '1',
                    'c' => 'Una de las mejores partes de estar en una relación romántica es conectarse profunda y auténticamente con otra persona. Una pareja que no muestra interés en abrirse y vincularse es una sentencia de muerte para una relación.'
                ],

            ],
            'accordion-5' => [
                'data-1' => '<p class="cabecera-bold" > ¿Qué es el consentimiento?</p> 
	<p 	class="p-bottom" > El consentimiento significa hacer algo sí y sólo sí tienes el  permiso de la otra persona para hacerlo. En otras palabras, el consentimiento es cuando una persona acepta de manera clara y libre participar en algo, especialmente en situaciones que involucran su cuerpo, sus decisiones o su intimidad. 

Sí, tú puedes decidir si quieres que alguien toque tu cuerpo o si quieres que alguien te tome fotos. Pero así como tú puedes decidir, también debes pedir permiso antes de actuar.. 

Para que haya consentimiento, debe darse sin presiones, sin miedo y con información suficiente. El consentimiento también puede retirarse en cualquier momento. Nadie puede obligarte a nada y puedes cambiar de parecer cuando quieras Es decir, puedes decir primero sí y luego decir no. La otra persona debe respetar tu última decisión. 

Si alguien te hace sentir incómoda o incómodo, o actúa sin tu consentimiento, cuéntale a una persona adulta de confianza. 

El consentimiento: 

Se da libremente. 
La persona debe decidir  sin presión, sin manipulación y sin la influencia de las drogas o el alcohol.

Desde la certeza 
Pregúntate si verdaderamente quieres hacerlo, nunca hagas algo que no quieres. 

Es específico. 
Decir que sí no significa decir que sí a todo. 

Se brinda estando informado. 
Para poder decidir debes tener toda la información: pregunta, y busca más información. 

Es reversible. 
La decisión se puede cambiar en cualquier momento. Decir “sí” una vez no significa decir “sí” siempre. 


Principios del consentimiento:</p>
',
                'Respeto' => 'Así como quisieras que se respete tu decisión, debes respetar la decisión de la otra persona. Recuerda, “no” es “no”.',
                'Límites' => 'Límites: Debes comunicar de manera muy clara tus límites del consentimiento y hacerlos respetar.',
                'Comunicación' => 'El consentimiento puede darse de forma verbal, no verbal, presencial o de manera digital. Tienes que prestar atención, comprender y aceptar las señales. Por ejemplo,  si cambia de tema de conversación, probablemente no quiere. Si aún no te queda claro, pregunta de manera directa.',
                'Capacidad' => ' Si alguien no está en capacidad de decidir entonces no hay consentimiento. Por ejemplo, si está dormido, bajo la ingesta alcohólica, o no se entienden porque no hablan el mismo idioma, no hay consentimiento.',
                'Continuo' => 'Si se recibe el consentimiento una vez, no significa que siempre existirá. Cada vez debes de preguntar, no puedes asumir la existencia de un consentimiento continuo.',
            ],
            'slides-11' => [
                1 => '<p 	class="cabecera-bold" > Memes del consentimiento </p>
	<p class="p-bottom"> 1.- Busca lápices para colorear, marcadores de colores y hojas.
2.- Busca un meme que te guste, que te haga reír o te parezca gracioso. 
3.- Dibuja y edita el meme que elegiste para explicar a tus amigas y amigos qué es el consentimiento. 
4.- Compártelo en redes sociales y usa el hashtag #MisDerechosESI 

 </p>'
            ],
            'slides-12' => [
                1 => '<p class="cabecera-bold"> Elabora tu guión del consentimiento </p>

	<p> 1.- Observa los siguientes vídeos:

Consentimiento como preparar una taza de té
<span class="btn-enlace"><a href="https://www.youtube.com/watch?v=BuuyajcjFC4" target="_blank">Ir a información</a></span>

Consentimiento, tan simple como el ceviche
<span class="btn-enlace"><a href="https://www.youtube.com/watch?v=IUxUsJ36jQA" target="_blank">Ir a información</a></span> 

¿Qué es el consentimiento?
<span class="btn-enlace"><a href="https://www.youtube.com/watch?v=pI2X4jnsuos" target="_blank">Ir a información</a></span>

2.- Elabora tu propio guión para un vídeo de redes sociales explicando ¿qué es consentimiento?

3.- Compártelo en redes sociales y usa el hashtag #MisDerechosESI 
</p>'
            ],
            'accordion-6' => [
                'data-1' => '<p class="cabecera-bold"> Lee con atención la siguiente información: </p>
	<p 	class="p-bottom" > El Centro de Derechos de la Mujer en Honduras (CDM) y el Sistema Nacional de Emergencia (911) registró 13,034 denuncias de violencia doméstica y 15,647 denuncias de maltrato familiar, entre enero y abril de 2025.
Tan sólo en julio de 2025 se registraron 146 muertes violentas de mujeres y feminicidios. Según los medios de comunicación impresos y digitales, en ese mismo periodo, hubo 46 muertes violentas de mujeres a nivel nacional.

La ENDESA 2019 reporta que un 20% de mujeres de 15-49 años en Honduras han sido alguna vez golpeadas o maltratadas físicamente por alguna persona desde los 15 años. 

El 16% de las mujeres de Honduras ha experimentado algún tipo de violencia (psicológica, física o sexual) por parte del esposo/compañero.

4% de mujeres de 15-49 de Honduras han sufrido abuso sexual desde los 12 años, la persona que ejerció el abuso: un conocido en el 28% de los casos, un desconocido en el 25%, otro familiar en el 20% de los casos, el actual novio/ex novio en el 12.5%, el padre/padrastro en el 6% y al ex esposo/pareja, en el 5% de los casos. 

Probablemente en redes sociales o en alguna conversación has escuchado decir a las personas que la violencia no existe o que son pretextos para llamar la atención, después de ver y leer los datos ¿crees que se trata de una mentira? 

Hablar de la violencia que se vive en las casas, escuelas, comunidades es muy importante, porque dejamos de ver a la violencia como actitudes y comportamientos normales que son tolerados. 

Después de leer esto ¿Qué te dicen estos datos? 
 </p>
',
                'Violencia' => 'La violencia son todas aquellas acciones que buscan dañar a una, varias personas, un grupo o comunidad, la Organización Mundial de la Salud (OMS) además dice que la violencia es el uso intencional de la fuerza física o el poder y tendrá como consecuencia un daño físico, emocional, económico, la privación de la libertad, la muerte. 

La violencia también tiene consecuencias, como hacer sentir a la persona verguenza, culpable. Si tú pasas por alguna situación de violencia, recuerda: es tu culpa. 

Es importante recordar: 
La violencia no es natural ni normal.
La violencia genera graves daños a la salud física y emocional. 
Todas las personas pueden pasar por violencia, pero, generalmente los grupos vulnerables como niños, niñas, mujeres, personas con discapacidad, personas adultas mayores pasan por mayor violencia. 

',
                'Violencia de género' => '“La violencia de género se refiere a las acciones de violencia a una persona, grupo de personas, comunidad en razón de su género. 
Normalmente asociamos la violencia de género solo para hablar de violencia a las mujeres pero este tipo de violencia también se da contra otras identidades sexogenericas. 
La violencia de género tiene como base la desigualdad de género, el abuso de poder y la existencia de creencias dañinas que justifican la violencia, por ejemplo, las mujeres deben “soportar” la violencia por que es lo que les toca hacer. 

Las Naciones Unidas señalan que si bien las mujeres y niñas sufren violencia de género de manera desproporcionada, los hombres y los niños también pueden vivir algún tipo de violencia.
',
                'data-2' => '<p class="p-bottom"> Tipos de violencia
La violencia se puede dar de varias formas. A continuación, encontrarás información sobre cada una de ellas. </p>',
                'Psicológica' => '“La violencia psicológica busca generar miedo y control en una persona mediante la intimidación. Puede manifestarse a través de amenazas de causar daño físico a la persona, a sus hijas o hijos, así como de dañar a sus mascotas o pertenencias. También incluye el maltrato emocional constante y las conductas que obligan a la persona a aislarse de sus amistades, su familia, la escuela o el trabajo.
',
                'Física' => '“La violencia física es cualquier acción que busca dañar a una persona usando la fuerza física o algún tipo de objeto para generar intencionalmente un daño, este tipo de violencia puede darse desde las patadas, quemándola, pellizcándola, empujándola, dándole bofetadas, tirándole del cabello, mordiéndole, así como empleando cualquier otro tipo de fuerza física contra ella.',

                'Económica' => '“La violencia económica busca supervisar los recursos económicos de la pareja, limitando a su pareja de gastar en necesidades personales, controlando los ingresos económicos, quitarle su tarjeta o el sobre donde le paguen su salario, no dejar que tenga un trabajo. La violencia económica busca crear una dependencia económica. 
',
                'Sexual' => '“La violencia sexual es -lamentablemente- una de las violencias más comunes en mujeres, niñas y adolescentes. La violencia sexual consiste en degradar, dañar el cuerpo y/o sexualidad de la persona, este tipo de violencia afecta su libertad pero también sy dignidad, integridad, su salud. 

La violencia sexual se puede dar de varias formas, por ejemplo: 

Acoso sexual
Violación 
Explotación sexual
Manipular, enganchar, forzar a tener relaciones sexuales 

',
                'Digital' => '“La violencia digital es cualquier acción violenta realizada desde Internet o usando dispositivos tecnológicos que buscan agredir, violentar, vulnerar o exhibir la intimidad de una persona.      
 Es importante  recordar que  la violencia digital:
1.- La violencia digital es esa misma violencia que se da en las calles, escuelas, casas, pero ahora en otro lugar: Internet, las redes sociales, los videojuegos, etc.
2.- La violencia digital se puede dar de muchas formas como ciberbullying, acoso, extorsión, fraude, suplantación de la identidad, etc. Este tema lo vamos a ver más adelante.
3.-La violencia digital no sólo se queda en el celular o redes sociales, también sale de ahí,  afectando nuestro cuerpo, y lo que sentimos.
4.- La violencia digital tiene efectos, causa daños, dolor, sufrimiento.
5.- La violencia digital se puede viralizar.
6.- No es necesario que te peguen para que sea violencia. 
Existen diferentes tipos de violencia digital, te compartimos algunos: 
Acceso o control no autorizado
Cuando alguien entra a tus cuentas sin que tú estés de acuerdo o le dieras autorización.
A veces decimos: ¡me hackearon!
Este tipo de violencia también se puede dar dentro de la violencia en el noviazgo como una forma de control, pedir compartir cuenta de redes sociales, compartir  la contraseña con el pretexto de “seguridad”
También esta presente como fraude desde el engaño solicitando información o enviando links para acceder a las cuentas sin autorización y suplantar la identidad.

Control y manipulación de la información
Alteran o modifican información que tenías en tus redes sociales, en tu correo o en cualquier plataforma, sin que tú estuvieras de acuerdo o te dieras cuenta. Buscan dañar tu reputación.
Ese chismecito de pasillo cuando llegas a la escuela.
La manipulación de la información o contenido se puede realizar con cualquier editor incluyendo herramientas de Inteligencia artificial.

Suplantación y robo de identidad
Se hacen pasar por ti, crean un perfil idéntico al tuyo.
Por ejemplo, crean perfiles casi igualitos en Instagram, usan las mismas fotos, nombre, stories para hacerse pasar por ti.
También desde el acceso no autorizado, pidiendo dinero desde WhatsApp.
Acoso
Se puede dar de varias formas, por ejemplo, el envío reiterado de mensajes, comentarios en tus redes sociales, que te manden fotos o imágenes que tú no solicitaste, incluso aunque tú hayas pedido que dejaran de hacerlo.
 
Amenazas
Recibir mensajes de contenido violento o también que hagan comentarios agresivos con la intención de dañarte, amenazándote a ti o a tus personas cercanas.
 
Difusión de información personal:
Compartir o publicar información privada o datos tuyos (dirección, teléfono, nombre completo), por supuesto ¡sin tu autorización!
En redes sociales y plataformas suelen mencionar esta violencia como Doxxing o me doxearon.
 
Difusión de contenido íntimo:
Compartir o publicar fotografías, vídeos, o capturas de pantalla tuyas donde sales en ropa interior, desnuda o semi desnuda, sin tu consentimiento
También pueden ser fotografías o vídeos donde aparezca tu rostro pero usando alguna herramienta digital la editan para desnudar el cuerpo. 
',
                'Obstétrica' => '“La violencia obstétrica se da en la atención o falta de atención a los servicios de salud públicos y privados. Son las acciones, por ejemplo hacer comentarios ofensivos por estar embarazada de un tercer hijo o por un embarazo temprano y las omisiones por ejemplo, negar la atención médica por ser una mujer indigena. 
La violencia obstétrica se da por parte del personal de Salud y causa daño físico, psicológico, emocional durante el embarazo, en el trabajo de parto, en una consulta ginecológica.  
 ',
                'Vicaría' => '“La violencia vicaria es una forma de violencia de género por la cual los hijos e hijas de las mujeres víctimas de violencia de género son instrumentalizados como objeto para maltratar y ocasionar dolor a sus madres.
La violencia vicaria puede tener diversas manifestaciones, pero entre las más comunes se encuentran:
Amenazas de llevarse a los niños y niñas, quitarle la custodia o incluso matarlos.
Aprovechar la presencia de los hijos e hijas para insultar a la madre, hablar mal de ella, humillarla y amenazarla.
Interrumpir los tratamientos médicos o farmacológicos de los niños y niñas cuando deberían de estar en tratamiento.
Utilizar los momentos del régimen de visitas para inventarse información dolorosa acerca de las hijas e hijos o la ausencia de información durante esos días.
',
                'Feminicida' => 'El feminicidio se refiere al asesinato intencionado de una mujer por el hecho de serlo En la mayoría de los casos, por ejemplo, quienes cometen los feminicidios son parejas o ex parejas de la víctima, y suponen la culminación de un proceso de abusos, amenazas o intimidación constantes en la relación.
',
                'Riesgos en el Noviazgo' => 'Las conductas violentas en el noviazgo producen dependencia y aislamiento. El riesgo con ellas es que no se perciben como agresivas o alarmantes puesto que se interpretan como “pruebas de amor”, desarrollando así una situación de vulnerabilidad e inferioridad por parte de la otra persona.
',
            ],
            'slides-13' => [
                1 => '<p class="cabecera-bold"> 1.- Lee los siguientes párrafos</p>',
                2 => ' 
	<p> Quieres que te ponga la capilla blanca
Quieres que te ponga la capilla azul
Quieres que te ponga el gorro colorado
Quieres que te ponga lo que quieras tú.
 
No me mates, no me mates
Con pistola ni puñal
Mátame con un besito
De tus labios de coral.
A la capotin tin tin tin… (bis)</p>
',
                3 => '	<p> Ya no sé qué hacer
No sé con cuál quedarme
Todas saben en la cama maltratarme
Me tienen bien, de sexo me tienen bien
Estoy enamora`o de cuatro babies
Siempre me dan lo que quiero
Chingan cuando yo le` digo
Ninguna me ponen pero</p>',
                4 => '	<p> Cuando estoy cerca de ella
la estoy cuidando, la estoy cuidando,(bis)
que hay muchos envidiosos
la están deseando, la están deseando.(bis)
 
La mujer que está queriendo
se pone viva, se pone viva,(bis)
y el hombre la solicita
si se descuida, si se descuida.(bis)</p>
',
                5 => '	<p>Amigo, voy a darte un buen consejo
Si quieres disfrutar de sus placeres
Consigue una pistola si es que quieres
O cómprate una daga si prefieres
Y vuélvete asesino de mujeres
Mátalas
Con una sobredosis de ternura
Asfixialas con besos y dulzuras
Contagialas de todas tus locuras </p>',
                6 => '	<p> Una flor me está matando
que es un terrible pesar
y tan cerca que la miro
y sin poderla cortar.
 
Yo les digo a mis amigos
los que ya saben de amor,
qué consejo me darían
para cortar esa flor.</p>
',
                7 => '	<p>2.-¿Identificaste que son?Todos los párrafos que acabas de leer son fragmentos de canciones 
3.- Vuelve a leer los párrafos a ver si ubicas a qué canción hace referencia cada una. 
4.- Responde y reflexiona sobre las siguientes preguntas: 
¿Qué mensaje transmiten las canciones?
¿El mensaje que transmiten es positivo?
¿De qué tipo de relaciones hablan las canciones?
¿Cómo describen a las mujeres en esas canciones?
¿Cómo describen a los hombres en esas canciones?
¿Conocen otras canciones que presenten el amor como una excusa para tolerar las violencias? ¿Cuáles?

 </p>',
            ],
            'quiz-1' => [
                1 => [
                    'q' => '<p>Los hombres poseen un incontrolable instinto sexual</p>',
                    'a' => false,
                    'c' => '<p>Falso.La sexualidad humana y el instinto sexual no es exclusivo de los varones. 
</p>'
                ],
                2 => [
                    'q' => '<p>Las mujeres tienen la culpa de ser acosadas por ser provocadoras </p>',
                    'a' => false,
                    'c' => '<p>Falso. La forma en la que las mujeres se visten o comportan no justifica ningún tipo de violencia. </p>'
                ],
                3 => [
                    'q' => '<p>Es “normal” que las personas hagan bromas de tipo sexual en público </p>',
                    'a' => false,
                    'c' => '<p>Falso. Los comentarios donde se burlan del cuerpo, la sexualidad y la apariencia de las personas también es violencia pero sigue viéndose como normal. La próxima vez, antes de hacer esas bromas, pregúntate si la otra persona estaría cómoda leyendo o escuchándolas. Si no dice nada,puede ser porque  teme más violencia. 
</p>'
                ],
                4 => [
                    'q' => '<p>A las mujeres les gusta el maltrato, de lo contrario que se separarían al primer golpe.</p>',
                    'a' => false,
                    'c' => '<p>Falso. Las mujeres que viven con violencia pueden tener una dependencia económica y emocional con su pareja, lo que no les permite dejar la casa, poner una denuncia, etc. Es posible que no tenga redes de apoyo, desconozca a dónde acudir, sientan vergüenza o miedo, y/o teman por la seguridad de sus hijas e hijos. Cada caso de violencia es muy distinto, si tu escuchas o sabes de una mujer que pasa por violencia apoyala, creele. 
</p>'
                ],
                5 => [
                    'q' => '<p>Si tu novio o esposo te cela y te controla es por que se preocupa por ti y te ama 
</p>',
                    'a' => false,
                    'c' => '<p>Falso. Hemos crecido creyendo que para demostrar el amor debe existir control y las actitudes posesivas están bien, pero no es así. Recordemos que el amor no debe doler, ni tenernos preocupadas y preocupados por lo que hacemos, decimos o vestimos. 
</p>'
                ]
            ],
            'slides-14' => [
                1 => '<p class="cabecera-bold"> Actos que nos deben tener en alerta pues pueden ser riesgosas:
</p>
	<p> Recibir mensajes de acoso o amenazas (de alguien conocido o de un desconocido)
Tener miedo de que esas amenazas se cumplan
Tener miedo de estar en casa cuando llegue la pareja
Escuchar insultos y/o recibir golpes, no importa que tan mínimos sean
No poder decidir qué vestir, cómo gastar tu dinero y/o con quien hablar 

Si identificas alguna de estas señales, busca apoyo inmediatamente, recuerda no es exageración, es violencia. 
</p>',
                2 => '<p class="cabecera-bold">¿Qué podemos hacer contra la violencia? </p>

	<p> Infórmate
Infórmate sobre los tipos de violencia y cómo solicitar apoyo en caso de necesitarlo 
Fomenta en todos los espacios (laboral, hogar, vía pública) el respeto
No aceptes malos tratos, alejate desde la primera señal
Escucha a las personas, y si te cuenta que pasa por violencia no le juzgues ni culpes, mejor acompañale
Comparte información de prevención con tu comunidad 
Sé red de apoyo y creerle a las personas que pasan por violencia 
 

</p>',
                3 => '<p class="cabecera-bold" > Consulta </p>

	<p> ONU Mujeres, Preguntas frecuentes: Tipos de violencia contra las mujeres y las niñas, Disponible en: https://www.unwomen.org/es/articulos/preguntas-frecuentes/preguntas-frecuentes-tipos-de-violencia-contra-las-mujeres-y-las-ninas 

ONU Mujeres, Violencia de género, Mujeres y niñas en riesgo, 
Disponible en: 
<span class="btn-enlace"><a href="https://www.unwomen.org/es/hq-complex-page/covid-19-rebuilding-for-resilience/gender-based-violence" target="_blank">Ir a información</a></span>

¿Qué es la violencia vicaria?, 
Disponible en:
<span class="btn-enlace"><a href="https://www.es.amnesty.org/en-que-estamos/blog/historia/articulo/que-es-la-violencia-vicaria/" target="_blank">Ir a información</a></span>

La violencia obstétrica también es violencia contra la mujer, 
Disponible en: 
<span class="btn-enlace"><a href="https://www.insp.mx/avisos/5138-dia-violencia-mujer-obstetrica.html" target="_blank">Ir a información</a></span> 

Revictimización y desconocimiento legal limitan denuncias por violencia en el noviazgo, 
Disponible en:
<span class="btn-enlace"><a href="https://www.dgcs.unam.mx/boletin/bdboletin/2022_547.html" target="_blank">Ir a información</a></span> 
</p>',
            ],
            'slides-15' => [
                1 => '	<p>
Seguramente hay personas que te han preguntado ¿para cuándo las hijas y los hijos? ¿cuándo te casas? ¿te vas a quedar sola?.

Tarde o temprano tendremos que tomar estas y más decisiones, pero para eso, es importante construir tu proyecto de vida, es decir armar un plan. 

El plan de vida busca la autorrealización y por tanto debe considerar tus necesidades, objetivos personales, expectativas, entorno en el que te desenvuelves, entre otros factores. 

Tranqui, inhala y exhala, un plan de vida no es algo que se resuelva de un día a otro, es un plan a largo plazo que puede irse adecuando a lo que va sucediendo en tu vida. 

Comienza por preguntarte: ¿cómo me quiero ver dentro de 10, 15 o 20 años? ¿qué quiero estar haciendo en ese entonces?
</p>
',
                2 => '	<p> Con base en esa respuesta, considera los siguientes elementos: 
Identifica cómo se encuentra tu vida actualmente y valora tus  circunstancias.

Identifica los aspectos prioritarios para alcanzar  tu plan de vida. 

Define y lleva a cabo acciones dirigidas a lograr tu proyecto de vida. Piensa qué puedes empezar a hacer tú hoy mismo. 

Da seguimiento periódico a este plan de vida. Cada cierto tiempo evalúa qué has logrado, qué falta por hacer y ajusta tu plan de vida si es necesario 
</p> 
',
                3 => '<p> Si quieres más información consulta Construcción de Plan de vida disponible en: https://repositorio-uapa.cuaed.unam.mx/repositorio/moodle/pluginfile.php/2555/mod_resource/content/3/UAPA-Construccion-Plan-Vida/index.html 

Consideraciones. Para un plan de vida también es importante observar la realidad de nuestro entorno. 

1.- Lo que te puede frenar: sabemos que nos gustaría lograrlo todo, pero seamos sinceras y sinceros con nuestro plan de vida. Siempre habrá circunstancias que pueden cambiar o retrasar algún elemento de nuestro plan de vida. No se trata solo de decir “sí se puede”, es identificar qué es factible y qué puede vulnerar nuestro plan. 

2.- El rol que juegan otras personas: el éxito o fracaso de nuestro plan de vida dependerá en gran parte de la gente que nos rodea. Pregúntate si  tus personas cercanas abonan a tu vida o si generan una influencia negativa. 

</p>',
            ],
            'slides-16' => [
                1 => '<p class="cabecera-bold"> Para construir tu plan de vida, te compartimos algunas preguntas que pueden servir como guía:</p>

<p>1. ¿Cuál es mi realidad en estos momentos?

2. ¿Qué es lo más importante o lo que más valoro en mi vida?

3.¿Cuáles son mis objetivos a corto, mediano y largo plazo?

4. ¿Qué necesito para alcanzar esos objetivos?

5. ¿Cuáles son los valores que siempre quiero tener presentes en mi vida?

6. ¿Cuáles son los siguientes pasos para lograr mi plan de vida? </p>
'
            ]
        ];
        return $data;
    }
}