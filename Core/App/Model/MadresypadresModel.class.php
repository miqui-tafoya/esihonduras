<?php
namespace Model;

use Model\Database;

class MadresypadresModel extends Model {

    private Database $db;

    public function getActividades() {
        $data = [
            'quiz-1' => [
                1 => [
                    'q' => '<p>Con madres y padres no se debe hablar de sexualidad</p>',
                    'a' => false,
                    'c' => '<p><b>Falso.</b><br>Hace algunas generaciones no se hablaba de sexualidad ya que era un tema que se evadía, causaba conflicto, se consideraba falta de respeto o generaba vergüenza o miedo. El hablar de sexualidad con hijas e hijos permite romper la barrera de la vergüenza, ayuda a generar confianza y cercanía con hijos e hijas.
Es mejor que como madres y padres seamos quienes demos información clara.Es importante que ante cualquier duda o situación relacionada con su sexualidad, las y los jóvenes puedan acudir con personas adultas de confianza para orientarles y acompañarles.</p>
'
                ],
                2 => [
                    'q' => '<p>Aunque padres y madres no tengan estudios, pueden hablar con sus hijas e hijos sobre sexualidad</p>',
                    'a' => true,
                    'c' => '<p><b>Verdad.</b><br>Si bien es cierto que se pueden adquirir conocimientos a través de cursos, lecturas e internet, también es cierto que se va aprendiendo del tema por experiencia propia. Lo más importante es el deseo de tener una comunicación abierta, directa y sincera sobre la sexualidad. 
El conocimiento y la actualización sobre temas de sexualidad se pueden adquirir poco a poco. Incluso te proponemos revisar materiales junto a tus hijas e hijos, que les permita conversar y buscar más información. Lo más importante es hacer saber a las hijas e hijos que pueden confiar, que mamá y papá siempre les escucharán y querrán.</p>

'
                ],
                3 => [
                    'q' => '<p>Solo las madres deben hablar con las hijas de sexualidad y los padres deben hablar con los hijos</p>',
                    'a' => false,
                    'c' => '<p><b>Falso.</b><br>No necesariamente tiene que ser así, tanto padres como madres pueden hablar con sus hijos e hijas. Se puede generar confianza y apertura para hablar con ambos o bien con alguna persona adulta de confianza.
Además, cuando madre y padre se involucran en la formación de las hijas e hijos también se rompe el mito o la creencia de que hay cosas que solo se hablan entre hombres o mujeres. Con esto también contribuimos a una cultura de la igualdad y no reforzamos estereotipos de género.</p>'
                ],
                4 => [
                    'q' => '<p>Es verdad que los hijos e hijas hablarán con madres y padres con la misma confianza que con los amigos y amigas.</p>',
                    'a' => 'both',
                    'c' => '<p><b>Verdadero y Falso.</b><br>Algunas veces, los hijos e hijas pueden tener apertura y confianza para comunicar sus sentimientos, dudas y experiencias con padres y madres. Sin duda, habrá cosas que son privadas y que quizá den vergüenza y solo quieran compartirlas con sus amistades. 
Sin embargo, depende mucho de la actitud de madres y padres para que hijas e hijos sean más abiertos y sientan más confianza.</p>'
                ],
            ],
            'accordion-1' => [
                'data-1' => '<p class="cabecera-one">¿Cuáles son los órganos sexuales masculinos?</p>
                <p class="cuerpo-texto p-bottom">El sexo se refiere a los órganos sexuales primarios que se presentan al nacer, pero existen también personas con órganos sexuales ambiguos al nacer (personas intersexuales).
Con el curso de los años, al llegar a la pubertad, el hipotálamo actúa sobre la glándula hipófisis dando lugar a que las hormonas actúen sobre los testículos y los ovarios.Estas hormonas dan lugar a los caracteres sexuales secundarios, que son todos los cambios que se presentan en la adolescencia. Por ejemplo, en los hombres se presenta mayor desarrollo del tejido muscular.</p>',
                'El pene' => 'Es uno de los órganos sexuales masculinos. Por su interior pasa la uretra, conducto por donde se excreta tanto la orina como el semen. Su tamaño varía. A lo largo del pene existen tres columnas del tejido eréctil: dos cuerpos cavernosos juntos y un cuerpo esponjoso, por debajo, que aloja la uretra. En la punta del pene el cuerpo esponjoso se agranda para formar el glande y su corona.
 
Una capa de piel, llamada prepucio, sobrepasa el pene cubriendo al glande cuando el pene se encuentra flácido. Los cuerpos del pene tienen una rica provisión de vasos sanguíneos, los cuales están vacíos cuando el pene está flácido, pero que se llenan de sangre cuando hay erección. Ésta se puede producir por medio de la manipulación física del pene, por pensamientos sexuales, por la presión producida por la vejiga o el recto cuando se encuentran llenos, por usar ropa muy ajustada o por cualquier otro motivo que origine una congestión sanguínea en la región del pene.',
                'La eyaculación' => 'Es el proceso mediante el cual sale el semen. La salida se hace a través de la abertura en el glande, gracias a la contracción de todos los órganos genitales (epidídimo, conducto deferente, próstata, vesículas seminales y uretra). La eyaculación puede ocurrir durante el sueño (sueños mojados o húmedos), como resultado de caricias, por masturbación y por coito. Cabe aclarar que no siempre que hay erección se presenta la eyaculación.',
                'Escroto' => 'Es una bolsa de piel en cuyo interior están contenidos los testículos. Posee varias capas dentro de las cuales se encuentran fibras musculares como el cremáster que provoca la elevación y descenso de los testículos. Funciona como regulador de la temperatura (la cual es de dos grados menos que la del resto del cuerpo) proporcionando la adecuada para la producción de los espermatozoides.',
                'Testículo' => 'Es un órgano par de forma ovoide que se desarrolla en la cavidad abdominal y que en el momento del nacimiento debe estar en el escroto. Su función es la producción de la hormona testosterona y de los espermatozoides dentro de los túbulos seminíferos. Si no descienden los testículos (lo que se denomina criptorquidia) se atrofian y causan esterilidad. Su tamaño es de 4 cm de largo por 3 cm de ancho aproximadamente. Normalmente el testículo izquierdo es un poco más grande y pesado que el derecho.',
                'Los epidídimos' => 'Se encuentran en la parte superior y rodeando los testículos. En ellos terminan su maduración y se almacenan los espermatozoides hasta el momento de la eyaculación los cuales, si no se eyaculan, son absorbidos por el tejido que los rodea.',
                'Conducto deferente' => 'Existe un conducto por cada testiculo y su función es conducir los espermatozoides desde el epidídimo hasta la vesícula seminal. Su longitud es de 40 a 45 cm.',
                'Vesículas seminales' => 'Son dos estructuras en forma de saco de unos 7 cm que se encuentran situadas detrás de la vejiga a los lados de la próstata. Poseen una capa muscular y otra secretora. Sus funciones son proteger y nutrir a los espermatozoides.',
                'Próstata' => 'Es una glándula que rodea a la uretra. Se encuentra abajo y delante de la vejiga, está formada por tejido glandular y es atravesada por los conductos eyaculadores. Su función es producir un líquido alcalino, clam y lechoso, que nutre a los espermatozoides y los protege de la acidez de la uretra producida por la orina y de la vagina. Esta secreción, junto con el líquido de las vesículas seminales, forma el semen. Como se encuentra apoyada en el cuello de la vejiga, si se hincha a causa de un tumor infección puede obstaculizar a ésta y a la uretra. Los tratamientos para los tumores generalmente son quirúrgicos.',
                'Glándulas de Cowper' => 'También se les conoce como glándulas bulbo-uretrales. Estas dos glándulas se encuentran debajo de la próstata y su función es secretar un líquido alcalino que lubrica y neutraliza la acidez de la uretra antes del paso del semen en la eyaculación y que sale a través del pene durante la excitación. Este líquido contiene espermatozoides, por lo cual la práctica de retirar el pene de la vagina antes de la eyaculación no es un método anticonceptivo efectivo.',
                'Uretra' => 'Conducto que se inicia en el cuello de la vejiga y termina a nivel del glande en el meato urinario. Su función es doble: elimina la orina y conduce el semen en el momento de la eyaculación.',
                'Espermatozoides' => 'Están compuestos por cabeza, cuello y cola. En la cabeza están los 23 pares de cromosomas que representan la mitad de la herencia biológica del nuevo ser. La producción de espermatozoides, que dura entre 60 y 70 días, se inicia en la pubertad y termina con la muerte. Cada eyaculación contiene aproximadamente 100 millones de espermatozoides y tiene un volumen aproximado de 3 mililitros. Los espermatozoides pueden sobrevivir hasta cinco días en un moco cervical que ayuda a proteger los espermatozoides y los mantiene vivos para que lleguen al óvulo.',
                'data-2' => '<p class="cabecera-one">¿Cuáles son los órganos sexuales femeninos?</p>
<p class="cuerpo-texto p-bottom">El cambio más obvio que ocurre en la mujer al llegar a la pubertad es el desarrollo de los senos o mamas, cuya función será alimentar al bebé con la leche que producen antes y después del parto. El tamaño de los senos no tiene ninguna relación con la capacidad de producir leche. Comúnmente se han identificado como fuente de placer erótico y a menudo juegan un papel importante en la autoimagen de la mujer.</p>',
                'Los senos' => 'Están formados por seis elementos: el pezón, la areola (parte oscura que rodea el pezón), las glándulas mamarias, los conductos galactóforos (que transportan la leche desde las glándulas hasta el pezón), tejido muscular y tejido graso.',
                'La vulva' => 'Es el conjunto de órganos y estructuras genitales externas, como son: el llamado monte de venus o monte púbico, los pliegues de piel llamados labios mayores y labios menores, el clítoris y el vestíbulo. Durante la pubertad empieza a crecer vello en algunas zonas de la vulva.',
                'Monte de Venus o monte púbico' => 'Es un abultamiento de tejido graso que se encuentra sobre el hueso del pubis, en la parte inferior del abdomen; está cubierto de vello.',
                'Labios mayores' => 'Son dos pliegues cutáneos de color un poco más obscuro que el resto de la piel, los más prominentes de la vulva, cuyas paredes externas se recubren de vello; al separarlos dejan al descubierto las demás estructuras anatómicas de la vulva.',
                'Labios menores' => 'Son formaciones de tejido de color rosado (que cambia a rojo fuerte durante la excitación) y con cierta humedad; en la parte anterior conforman el prepucio y el frenillo del clítoris y continúan hacia atrás para formar el vestíbulo. En este vestíbulo se encuentra el meato urinario y el introito u orificio vaginal, y las glándulas de Bartholin.',
                'Clítoris' => 'Es un órgano muy sensible, del tamaño de un chícharo o arveja, y sobresale en la parte anterior de los pliegues de los labios menores, arriba del meato urinario. Su conformación es similar a la del pene, con glande, cuerpo, tejido eréctil y gran cantidad de terminaciones nerviosas. Esto se debe a que tanto el clítoris como el pene se desarrollan a partir de la misma estructura. Su función se hace evidente durante el coito o la masturbación, en los cuales presenta variaciones en tamaño y posición de acuerdo con los niveles de excitación.',
                'Meato urinario' => 'Es el orificio donde termina la uretra y por el cual sale la orina.',
                'Introito u orificio vaginal' => 'Está ubicado en la parte posterior del vestíbulo y es la puerta que comunica los genitales externos con los internos. Generalmente este orificio se encuentra parcialmente cubierto por una membrana llamada himen.',
                'Himen' => 'Es una membrana cuya forma y elasticidad varían de mujer a mujer. En su porción central tiene orificios que permiten el paso de los fluidos vaginales y uterinos como por ejemplo la menstruación. Biológicamente no se le ha encontrado función, sin embargo, su significado social y psicológico es importante para algunos grupos y culturas. Hay mujeres que nacen sin himen, a otras se les rompe al hacer ejercicio y otras lo rompen al introducir algún objeto como, por ejemplo, un tampón.',
                'Glándulas de Bartholin' => 'Son dos y están en los labios menores, a cada lado del introito vaginal. Éstas secretan líquido durante la excitación sexual pero no son las responsables de la lubricación vaginal.',
                'Vagina' => 'Es un conducto músculo-membranoso, de 8 a 12 centímetros de largo, que comunica al útero con la vulva. Sus paredes están cubiertas por membranas mucosas y rugosas las cuales por lo general están juntas, cerrando el espacio, pero que durante la excitación producen un líquido resultado del trasudado de las paredes y se van separando abriendo un espacio que albergará al pene durante el coito. También es llamada canal del parto.',
                'Útero o matriz' => 'Es un órgano hueco que se encuentra en la parte baja del abdomen entre la vejiga y el recto y que está compuesto por tres capas. La capa interna, compuesta por membranas, es el endometrio cuya función es importante durante el ciclo menstrual y el embarazo. La capa del medio es el miometrio, compuesta por tejido muscular. El miometrio permite al útero crecer y volver a su tamaño, así como contraerse para ayudar a la expulsión del peritoneo, la cual es la capa que protege las dos anteriores. 
La forma del útero es similar a la de una pera invertida y su tamaño es de 8 a 10 cm de largo por 5 de capa es ancho, aproximadamente. Gracias a las características de sus tejidos durante el embarazo puede multiplicar su tamaño. Tiene tres orificios, dos de ellos en la parte superior los cuales comunican el útero con las trompas de Falopio; el tercero está localizado en la parte inferior, más delgada y alargada del útero, con el cual se comunica con la vagina. A esta parte se le denomina cuello del útero o cérvix. La función principal del útero es albergar y proveer de las condiciones necesarias al huevo fecundado para que, implantándose en una de sus paredes, se multiplique y conforme un nuevo ser humano.',
                'Trompas de Falopio' => 'Son dos tubos que se localizan en la parte superior del útero y que miden de 10 a 12 cm de largo por 1,62 mm de ancho. Su función consiste en atrapar con sus fimbrias el óvulo expulsado de los ovarios y transportarlo hasta el útero. Es en las trompas donde se produce la fecundación.',
                'Ovarios' => 'Son órganos pares que se localizan debajo y cerca de cada uno de los extremos de las trompas de Falopio. Tienen forma de almendra de color blanco y opaco y miden aproximadamente 4 cm de largo. Los ovarios cumplen dos funciones: es el lugar donde se hallan los ovocitos que se convertirán en óvulos maduros y en ellos se producen las hormonas femeninas, a saber, estrógenos y progesterona, que provocan cambios secundarios durante la pubertad y preparan al útero para la fecundación.',
                'Óvulos' => 'Se encuentran en forma de folículos desde el nacimiento y se dejan de producir durante la menopausia. Existen alrededor de trescientos mil entre los dos ovarios de los cuales sólo unos 400 llegan a madurar. Los folículos que no maduran se convierten en cuerpos cicatriciales. El óvulo es la célula que el espermatozoide fecunda y puede producir la gestación de un ser humano. En los óvulos está el material genético que, junto con la otra mitad aportada por el espermatozoide, dará las características al nuevo ser. Su vida para ser fecundado es de 24 horas, luego se deteriora.',
                'Ovulación' => 'Es un proceso que comienza entre los 10 y 14 años y termina entre los 45 y 50. En este proceso un ovario libera un óvulo casi maduro. Si este óvulo se une con un espermatozoide se da la fecundación. Si no ocurre la fecundación, es decir, si no queda embarazada la mujer, vuelve a madurar otro óvulo aproximadamente a los 28 a 30 días. La causa de la ovulación es básicamente hormonal. Las gonadotropinas producen el crecimiento y la ruptura del folículo y estimulan al ovario para la producción de progesterona y estrógenos y para que se enriquezca el endometrio, el cual, si no hay fecundación, se desprende con la menstruación.'
            ],
            'slides-1' => [
                1 => '	<p class="cabecera-bold">Menstruación </p>
<p 	class="cuerpo-texto">Aproximadamente cada 28 a 30 días, un ovario libera un óvulo. El óvulo viaja por una de las trompas de falopio hacia el útero; al mismo tiempo, el útero empieza a fabricar un revestimiento más grueso en el endometrio, formando una capa en la que se implantará el óvulo en caso de ser fecundado. De no haber fecundación, el óvulo se desintegra y los vasos sanguíneos del revestimiento del útero se van abriendo y liberando sangre. Este proceso dura de 3 a 7 días. Una vez concluido, se libera un óvulo y vuelve a empezar el proceso: el endometrio engrosa, se libera un óvulo que se dirige al útero y si no es fecundado se vuelve a presentar la menstruación entre 25 y 35 días después. A este proceso se le conoce como ciclo menstrual. 
<strong>El organismo de cada mujer funciona de manera particular, lo que hace que no se pueda hablar de días exactos entre una menstruación y la siguiente como tampoco de un momento particular para la ovulación.><strong></p>
',
                2 => '	<p> En este ciclo se toman 28 como el promedio de días intermenstruales y 14 los días desde la ovulación hasta la menstruación. Por esta razón, los días fértiles del ciclo aproximadamente son los 9 días comprendidos entre el día 10 y el 18 a partir del día que comienza la menstruación.
La menstruación puede provocar en algunas mujeres malestar (dolor en el vientre, aumento de peso, cefalea e hipersensibilidad en los senos) a lo cual los médicos denominan dismenorrea. También puede producir cambios emocionales y de conducta, lo cual se denomina Síndrome Premenstrual.
Pueden aparecer irregularidades en la menstruación, sobre todo los dos primeros años a partir de que se inicia (menarquia) y los anteriores a la menopausia. Frecuentemente en esta época los períodos varían en duración (2 a 8 días) y cantidad de flujo. </p>
 
',
                3 => '	<p> Por otro lado, puede darse la menstruación sin ovulación, lo cual es llamado ciclo anovulatorio. La menstruación comienza normalmente entre los 10 y 14 años (menarquia) aunque puede presentarse también entre los 9 y los 18. Se prolonga hasta la menopausia.
Durante la menstruación la mujer se protege con toallas sanitarias cuya presentación varía en tamaño y forma; también es común el empleo de tampones y de algodón. Estos productos se consiguen en cualquier farmacia o tienda de autoservicio. 
No hay ninguna actividad que se deba suspender como consecuencia de la menstruación: se puede nadar, bañar, hacer ejercicio y coito en cualquier etapa del ciclo menstrual, inclusive durante la menstruación.</p>
'
            ],
            'slides-2' => [
                1 => '<p 	class="cabecera-bold"> Fecundación, embarazo, parto y lactancia</p>
<p>Honduras, al igual que muchos países Latinoamericanos, refleja un aumento en la maternidad entre adolescentes. Datos de la ENDESA indican que entre 2005-2006 y 2011-2012 el porcentaje de adolescentes que alguna vez estuvo embarazada pasó de 21.5% a 24%, lo que refleja un crecimiento de 2.5 puntos porcentuales. El mayor porcentaje de embarazos adolescentes se presenta en el área rural, en donde la cohabitación y la formación de familias se realizan de manera más temprana, lo que expone a las adolescentes a embarazos y a tener mayor número de hijos e hijas a lo largo de su vida reproductiva.</p>
',
                2 => '<p> La fecundación ocurre cuando un óvulo es fertilizado por un espermatozoide y se forma una nueva célula, que se implanta en la pared del útero y allí comienza a dividirse y crecer. El período de embarazo dura aproximadamente 9 meses y generalmente es resultado del coito.
Los síntomas físicos asociados con el embarazo se pueden clasificar en tres tipos:
a) Signos presuntivos. Varían de mujer a mujer y aunque no son definitivos para diagnosticar un embarazo, son los primeros cambios corporales que se presentan. Éstos son: suspensión de la menstruación, náuseas en la mañana, cambios en el tamaño y sensibilidad de los senos, oscurecimiento de la zona que rodea al pezón (areola), fatiga, aumento en la frecuencia de orinar y cambio en el color de la vulva.
b) Signos probables. Aumento del tamaño del útero y del abdomen, el cual comienza a notarse alrededor del tercer mes; también se presenta reblandecimiento del cuello del útero.
c) Signos de certeza. Son tres y la presencia de cualquiera de ellos confirma el embarazo: detección de latidos del corazón del feto, movimientos notorios del feto, detección del esqueleto fetal por radiografía o ultrasonido.
Otras formas para saber si hay un embarazo son: la exploración pélvica que puede realizarla un médico dos semanas después del retraso menstrual, el análisis de orina, el análisis de sangre y las pruebas de embarazo a realizar en casa.</p>
',
                3 => '<p> Gestación. Normalmente, el embarazo (gestación o gravidez) tiene una duración de 9 meses. Después de la fecundación, la cual ocurre en una trompa, el óvulo se implanta en el útero y comienza a desarrollarse la placenta. Ella filtra el alimento y el oxígeno que el embrión recibe a través del cordón umbilical. Asimismo, los desechos del niño pasan a la madre por el cordón. Otra función de la placenta es crear hormonas que ayudan al proceso del embarazo.
El saco amniótico también se forma pocos días después de la implantación. Éste rodea al embrión y se llena de un líquido que se renueva diariamente y protege al producto.
Los nueve meses de gestación se pueden dividir en tres trimestres. En el primer trimestre, el embrión alcanza a medir unos 3 cm y ya tiene un corazón definido completamente; ojos, nariz, boca, orejas, manos y pies se desarrollan.</p>
',
                4 => '<p> En el segundo trimestre se continúan formando estas estructuras, se forman las cejas y las pestañas y los ojos ya empiezan a abrirse y cerrarse. El feto mueve algunos músculos, los brazos y piernas, haciendo especialmente importante esta segunda etapa para los padres pues es cuando pueden sentir verdaderamente su presencia.
En el tercer trimestre el feto da vueltas y su crecimiento alcanza aproximadamente 50 cm. Sus órganos están tan desarrollados que ya pueden funcionar independientemente.</p>
',
                5 => '<p> Trabajo de parto. Éste es el proceso por medio del cual la madre expulsa el producto de la concepción. Se divide en tres fases: dilatación, expulsión o nacimiento del niño y alumbramiento o expulsión de la placenta.
Primera etapa. Este período empieza con las primeras contracciones y dura hasta que el cérvix o cuello del útero se dilata unos 10 cm para que pase el producto. Las primeras contracciones son cortas y suaves, separadas por intervalos de diez o veinte minutos. Conforme progresa el trabajo, las contracciones se hacen más frecuentes (cada tres o cinco minutos) y las que preceden a la dilatación completa pueden ser bastante dolorosas.
Segunda etapa. La expulsión empieza con la abertura total del cérvix y finaliza con el nacimiento del niño o niña. Las contracciones son fuertes y la presión de éstas generalmente provoca la ruptura del saco amniótico. Durante las contracciones, la madre empuja con fuerza. Cuando el cérvix se abre el niño o niña empieza a deslizarse hacia la vagina. Después de que aparece la cabeza, se gira y se acomoda para que con la siguiente contracción salgan el cuello y los hombros. En este punto el cuerpo del bebé es expulsado rápidamente, e inmediatamente después sale el resto del líquido amniótico.</p>
',
                6 => '<p> Tercera etapa. Las contracciones cesan durante un momento después que ha nacido el niño o niña, para empezar de nuevo a intervalos regulares hasta que la placenta se separa del útero y es expulsada.
La etapa posterior al parto se denomina puerperio. El organismo de la madre regresa al estado previo al embarazo. Este período puede durar de 4 a 5 semanas. Algunas mujeres se deprimen en este período, llamándose “depresión post-parto”.
En algunos casos se practica la cesárea que consiste en abrir el abdomen de la embarazada y su útero para sacar al bebé. Las razones para ello son diversas, algunas de las cuales pueden ser: sufrimiento del feto o la madre, que el cordón esté enredado en el bebé, mala posición del bebé, etcétera.
Lactancia. Es el resultado de la acción de la hormona llamada prolactina, la cual estimula a las mamas para la secreción de leche. Este proceso se inicia normalmente de 24 a 48 horas después del parto. La leche materna contiene importantes elementos nutritivos y anticuerpos.</p>
'
            ],
            'quiz-2' => [
                1 => [
                    'q' => '<p>Las mujeres menstruando no deben nadar</p>',
                    'a' => false,
                    'c' => '<p><b>Falso.</b><br>No existe ninguna razón física que impida a las mujeres realizar actividades durante la menstruación.</p>'
                ],
                2 => [
                    'q' => '<p> El tamaño del pene es importante para que los hombres tengan mayor placer sexual</p>',
                    'a' => false,
                    'c' => '<p><b>Falso.</b><br>Es un mito que el tamaño del pene influye en el placer sexual. No existe ninguna relación entre el tamaño del pene y el gozo.</p>'
                ],
                3 => [
                    'q' => '<p>No se debe tener contacto sexual durante la menstruación</p>',
                    'a' => false,
                    'c' => '<p><b>Falso.</b><br>Sí es posible el contacto sexual durante la menstruación si ambas personas se sienten a gusto con ello.No hay ningún problema físico, lo importante es que ambas partes estén de acuerdo; para eso, la comunicación y el consentimiento es importante.</p>'
                ],
                4 => [
                    'q' => '<p>Una chica puede quedar embarazada durante la menstruación</p>',
                    'a' => true,
                    'c' => '<p><b>Verdadero.</b><br>Es posible que una mujer se embarace en cualquier momento durante su ciclo menstrual, incluso durante el sangrado.</p>'
                ],
                5 => [
                    'q' => '<p>Se puede quedar embarazada, aun si un muchacho no eyacula, no se viene dentro o retiró su pene antes de venirse dentro de ella</p>',
                    'a' => true,
                    'c' => '<p><b>Verdadero.</b><br>Aunque es baja la probabilidad, es posible que en el líquido preeyaculatorio exista la posibilidad de un embarazo. El líquido preeyaculatorio es una pequeña cantidad de fluido que sale del pene cuando una persona está excitada.Este fluido actúa como lubricante natural y sale de forma involuntaria, es decir, no se puede controlar, a veces ni cuenta se dan que ha salido. Usualmente no contiene espermas, pero puede tener una cantidad menor.Si no está en tus planes ser madre o padre, es importante usar condón.</p>'
                ],
                6 => [
                    'q' => '<p>La virginidad le da valor a la mujer</p>',
                    'a' => false,
                    'c' => '<p><b>Falso.</b><br>El darle valor a las mujeres por su virginidad es una creencia que pone a las mujeres en una situación de desventaja y las priva de su derecho al placer y a la libre elección de cómo vivir su sexualidad. Las mujeres tienen los mismos derechos sexuales que los hombres y no les quita valor por experimentar su vida erótica. Es importante que sea libre y tome sus propias  decisiones.</p>'
                ]
            ],
            'slides-3' => [
                1 => '<p> La adolescencia es una de las etapas más críticas del ser humano porque es el momento anterior a asumir una responsabilidad social adulta. Es por esto que una de las preguntas más recurrentes durante la  adolescencia está enfocada en buscar la propia identidad: ¿quién soy?
Uno de los procesos cruciales durante la adolescencia es el descubrimiento de cambios en su cuerpo y el despertar  de un cúmulo de sensaciones sexuales  que desconoce. Todo este proceso se da en un contexto de una sociedad que presiona, directa o indirectamente, a las adolescencias para reproducir patrones y cumplir expectativas de vida vigentes.
</strong> Culturalmente, la palabra sexualidad se reduce a la genitalidad o al acto sexual, quedando fuera otros aspectos que también están involucrados. Entre ellos se encuentran la forma en cómo nos vinculamos entre hombres y mujeres, el cómo establecer relaciones afectivas sanas, la diversidad de identidades sexuales, las diferentes orientaciones sexuales -es decir, hacia quienes nos podemos sentir atraídos romántica o sexualmente-, entre otras.</strong> </p>
',
                2 => '<p>Los comportamientos sexuales y las alternativas para ejercer la sexualidad pueden ser desde cómo cada adolescente decide explorar las sensaciones de su cuerpo y autoconocerse, hasta cómo acercarse a otra persona y compartir su sexualidad.
Existen muchos mitos o creencias limitantes acerca de cómo debemos ejercer nuestra sexualidad. Estos mitos o creencias pueden variar según la edad, la cultura específica de cada comunidad, el género, la personalidad,  las emociones, etc. 
Un ejemplo de estos mitos es que la masturbación, también conocida como autoerotismo, es mala. Otro ejemplo es que los hombres siempre deben estar dispuestos a tener  relaciones sexuales (coito) solo por el hecho de ser hombres, o que todo contacto erótico debe terminar en la penetración para ser complaciente.</p>
',
                3 => '<p>¿Cuáles conoces mitos conoces o has escuchado?
Para comenzar a desmitificar la sexualidad, es importante preguntarnos: 
¿Qué tanto ciertas han sido estas creencias sobre la sexualidad según mi experiencia?  
¿Qué información tengo para verificar si esas creencias sobre la sexualidad son reales?
¿Cuándo tengo dudas sobre sexualidad, dónde busco información o a quién le pregunto?
Existen muchos mitos, pero aquí te vamos a compartir cinco verdades: 
1.- Todas las personas somos seres sexuados
2.- En sexualidad, nadie lo sabe todo.
3.- Preguntar sobre inquietudes en sexualidad está muy bien. 
4.- La educación sexual integral también es aprender sobre el respeto a las diferencias. 
5.- Nadie puede obligarnos a mantener relaciones sexuales si no queremos, no es no. 
Es importante hablar con las adolescencias sobre consentimiento. 
El consentimiento es tener un acuerdo voluntario para participar en algún acto sexual o erótico.</p>
',
                4 => '<iframe width="480" height="400" src="https://www.youtube.com/embed/IUxUsJ36jQA?autoplay=1&mute=1" title="YouTube" frameborder="0" allowfullscreen></iframe>',
                5 => '<p> Es importante que el consentimiento ocurra en un entorno de libertad, consciencia e igualdad.
LLas alternativas para ejercer la sexualidad también implican autoconocerse para saber qué se quiere elegir y con quién, reconocer el derecho a la propia sexualidad y el placer.
Normalmente la educación sexual es en torno a la salud reproductiva (anticonceptivos, embarazo, menstruación, etc.) que está muy bien, pero pocas veces se nos educa para el placer.
Como personas adultas, es importante que abramos canales de comunicación sin juicios para poder acompañar y hablar de las alternativas con las adolescencias que acompañamos.</p>
',
                6 => '	<p>A continuación, algunas preguntas que puedes explorar con tus hijos o hijas:
Alternativas para ejercer la sexualidad
¿Qué es el consentimiento?
¿Qué hago  si después de haber dicho que sí, me arrepiento y/o cambio de opinión?
¿Cómo puedo conocer mejor mi cuerpo y lo que siento?
¿Te sientes lista o listo para tener experiencias eróticas con alguien?
¿Siento algún temor al explorar mi sexualidad?
¿Qué dudas tengo sobre la sexualidad? </p>
'
            ],
            'accordion-2' => [
                'data-1' => '<p class="cabecera-one "> Enfermedades de Transmisión Sexual</p>
                <p class="cuerpo-texto p-bottom">Las Enfermedades de Transmisión Sexual (ETS) o Infecciones de Transmisión sexual (ITS) son padecimientos infecto contagiosos que se contraen generalmente por realizar el coito en condiciones de higiene inapropiadas y/o con personas ya infectadas.
Las adolescencias son víctimas comunes de algunas de estas enfermedades debido, entre otras razones, a la falta de información verídica sobre cómo evitarlas y sobre los síntomas asociados a ellas, y a los sentimientos de vergüenza o temor para acercarse a centros de salud o a personas adultas (padres, madres, maestros, personal médico, etc.) que puedan orientarles y acompañarles adecuadamente.
La OMS (Organización Mundial de la Salud) ha clasificado como ITS/ETS los siguientes padecimientos:
</p>',
                'VIH/SIDA (virus de la inmunodeficiencia humana)' => 'Síntomas: incremento en la frecuencia y la severidad de las infecciones virales, fiebres, sudores nocturnos, pérdida de peso, fatiga, inflamación en los ganglios linfáticos, entre otros. Las personas seropositivas pueden presentar algunos de estos síntomas. Las personas con SIDA presentan la gran mayoría de los síntomas de forma simultánea y persistente.
Transmisión: comumenmente es por coito, ya sea anal, vaginal u oral sin protección debido al intercambio de fluidos (semen, flujo vaginal, sangre). También por  transfusión sanguínea o trasplante de órganos con  una persona infectada, de la placenta de la madre al feto durante el embarazo o por la leche materna, o por compartir agujas hipodérmicas con una persona infectada.
Existen muchos mitos sobre la transmisión del SIDA y es conveniente aclararlos:NO se transmite por tomar del mismo vaso, usar el mismo baño, usar los mismos cubiertos, un abrazo o un beso, nadar en la misma alberca, ni por contacto físico.
Existen estigmas sobre poblaciones específicas de riesgo (personas homosexuales, personas que se dedican al trabajo sexual, etc.), sin embargo, todas las personas pueden estar expuestas si no se toman los cuidados necesarios.
Tratamiento: actualmente no existe una cura específica, sin embargo existen tratamientos para mejorar la calidad de vida y disminuir los síntomas; en muchos casos sigue siendo una enfermedad mortal.
',
                'Sífilis' => 'Causada por: una bacteria (espiroqueta) llamada Treponema pallidum.
 
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
 
Síntomas: puede ser asintomático, la mujer es la que con mayor frecuencia la padece, sufriendo comezón en la vulva y flujo constante con apariencia de levadura, así como resequedad vaginal. En el hombre, los hongos de la especie monilias pueden eventualmente provocar inflamación del pene.
Los síntomas activos pueden surgir después de una terapia antibiótica o por contacto directo, ya sea con una persona o con ropa infectada.
 
Transmisión: el hongo puede localizarse en la boca, vagina o recto sin causar molestias. 
 
Consecuencias: infecciones secundarias por bacterias.
En caso de tener vaginitis y estar embarazada aumenta el riesgo de trabajo de parto prematuro. 
 
Tratamiento: usualmente con cremas, ungüentos o supositorios, eventualmente se prescriben medicamentos orales en los casos resistentes.
',
                'Clamidia' => 'Causada por: bacterias.
 
Período de incubación: de 1 a 4 semanas después del contagio.
 
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
<p class="cuerpo-texto p-bottom">Es importante informar al adolescente que cada vez que tenga relaciones sexuales existe riesgo de contagio de una enfermedad sexualmente transmisible. Por lo tanto, una vez que el hombre y la mujer han iniciado su vida sexual, es conveniente incorporar a su vida las siguientes medidas preventivas:</p>',
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
'
            ],
            'quiz-3' => [
                1 => [
                    'q' => '<p>¿Es posible tener alguna enfermedad de transmisión sexual sin tener síntomas?</p>',
                    'a' => true,
                    'c' => '<p><b>Verdadero.</b><br>Mientras las ETS pueden ser completamente identificadas por sus síntomas, otras no son tan evidentes. 
La gonorrea, por ejemplo, típicamente no desarrolla ningún síntoma en las mujeres  y frecuentemente no es detectada en el hombre, por eso es importante ser examinada o examinado por un profesional de la salud si se ha tenido contacto sexual sin protección o se tiene sospecha de haber contraído alguna enfermedad.'
                ],
                2 => [
                    'q' => '<p> ¿Las ETS se pueden contraer de nuevo una vez que ya se está curado(a)?</p>',
                    'a' => true,
                    'c' => '<p><b>Verdadero.</b><br>Se puede contagiar tantas veces como se tengan relaciones sexuales con una persona infectada. Por lo tanto, es importante que cualquiera que se haya tratado de cualquier enfermedad sexualmente transmisible se asegure de que su compañera o compañero sexual reciba atención médica.</p>'
                ],
                3 => [
                    'q' => '<p>¿Los condones ayudan a un alto porcentaje de casos a prevenir el contagio de enfermedades sexualmente transmisibles?</p>',
                    'a' => true,
                    'c' => '<p><b>Verdadero.</b><br>Efectivamente, los condones no solo sirven como método para evitar un embarazo, también pueden ser útiles para prevenir la difusión de la mayoría de las  enfermedades de transmisión sexual.</p>'
                ],
                4 => [
                    'q' => '<p>¿Es verdad que el VIH/SIDA se contagia por usar los mismos cubiertos, dar un beso o estar en una alberca con alguien?</p>',
                    'a' => false,
                    'c' => '<p><b>Falso.</b><br>El virus que produce el SIDA únicamente se puede transmitir por cambio de fluidos en el cuerpo, tales como, sangre, semen y secreciones vaginales, no por contacto de otro tipo.</p>'
                ],
                5 => [
                    'q' => '<p>¿Es verdad que el VIH/SIDA solo afecta a personas homosexuales?</p>',
                    'a' => false,
                    'c' => '<p><b>Falso.</b><br>Esta enfermedad no es exclusiva de personas de la diversidad sexual, la puede contraer cualquier persona. Existen muchos mitos al respecto, por eso lo ideal es siempre tomar medidas de precaución para tener relaciones sexuales de manera segura.</p>'
                ]
            ],
            'accordion-3' => [
                'data-1' => '<p class="cabecera-one">¿Por qué es un tema importante hablar del embarazo adolescente?</p>
                <p class="cuerpo-texto p-bottom"">El embarazo durante la adolescencia puede cambiar profundamente la vida de las y los jóvenes. No se trata solo del bebé, sino de su salud, sus estudios, su futuro y sus emociones. Consecuencias principales:</p>',
                'Salud física' => 'El cuerpo de una adolescente muchas veces no está listo para un embarazo. Esto puede causar anemia, partos prematuros o riesgos para el bebé.',
                'Emociones' => 'Muchas y muchos jóvenes enfrentan miedo, ansiedad o tristeza. Si no tienen apoyo, pueden sufrir depresión o sentirse solas.
                Entre los aspectos psicológicos provocados por el embarazo en adolescentes se encuentran:
La posibilidad de tener que asumir responsabilidades de una persona adulta sin sentirse lista o listo.
Miedo al abandono familiar. 
Tensiones familiares y no contar con una red de apoyo.
Rechazo por parte de la comunidad o de la familia. 
',
                'Educación' => 'La mayoría de las mamás o papás adolescentes dejan la escuela y  no regresan, lo que limita sus oportunidades de empleo y de tener un mejor futuro.',
                'Economía' => 'Tener un bebé requiere mucho tiempo, dinero y apoyo. Muchas madres y padres adolescentes dependen de otras personas y no logran ser económicamente independientes.',
                'Vida social' => 'El embarazo adolescente aún es mal visto y juzgado por la sociedad. Esto puede generar rechazo en la familia, la escuela o la comunidad.',
                'El bebé también se ve afectado' => 'El bebé puede nacer con bajo peso o tener menos acceso a atención médica y educación si no hay apoyo familiar y del sistema de salud.',
                'data-2' => '<p class="cuerpo-texto p-bottom">Prevenir el embarazo adolescente no se trata de controlar a las y los jóvenes, sino de darles información, herramientas, apoyo y opciones.</p>',
            ],
            'quiz-4' => [
                1 => [
                    'q' => '<p>Si tu hija se embarazó de su novio significa que se va a quedar  para siempre con esa pareja</p>',
                    'a' => false,
                    'c' => '<p><b>Falso.</b><br>Tener un hijo o hija no garantiza el amor eterno, ni la estabilidad en la pareja, un embarazo adolescente puede llevar a la presión de mantener una relación con la pareja aunque la persona ya no quiera continuar con la relación, esto puede dificultar más la vida en pareja o familiar si no se tienen los recursos sociales, económicos, psicológicos o del entorno para criar.</p>'
                ],
                2 => [
                    'q' => '<p>Basta con querer tener un hijo o hija para estar lista para la maternidad o paternidad</p>',
                    'a' => false,
                    'c' => '<p><b>Falso.</b><br>Para maternar y paternar de manera adecuada se necesita más que el deseo de ser madre o padre. Para criar a un hijo o hija se necesita una comunidad que te sostenga, consciencia plena de la responsabilidad  que implica y condiciones psicosociales que favorezcan que el hijo o hija crezca de una buena manera.</p>'
                ],
                3 => [
                    'q' => '<p>Todas las mujeres quieren ser madres</p>',
                    'a' => false,
                    'c' => '<p><b>Falso.</b><br>No todas las mujeres quieren ser madres, todavía hoy existe una carga social y cultural que sigue fomentando la idea de que para ser una “buena mujer” se debe ser madre; por lo tanto, no ser madre significa ser una “mala mujer”. La elección de ser o no ser madres es una decisión personal, no debe ser resultado de presión, chantajes o desinformación.</p>'
                ],
                4 => [
                    'q' => '<p>Las repercusiones sociales, psicológicas y emocionales son más fuertes sobre las chicas que los chicos en el embarazo adolescente </p>',
                    'a' => true,
                    'c' => '<p><b>Verdadero.</b><br>Se suele responsabilizar más a la mujer de la crianza, culparla de lo que pase con el hijo o hija, hay más exigencia social y más dificultades para estudiar, trabajar o desarrollarse de manera personal o económica que para los hombres.  A ellos simplemente no se les exige ejercer su paternidad de la misma manera. Por lo tanto, el embarazo en la adolescencia representa una situación de mayor riesgo para las chicas.</p>'
                ]
            ],
            'accordion-4' => [
                'data-1' => '<p class="cabecera-one">Anticoncepción en Honduras</p>
                <p 	class="cuerpo-texto p-bottom">La anticoncepción en adolescentes debe estar basada en el respeto a sus derechos sexuales y reproductivos, y adaptarse a sus necesidades físicas, emocionales y sociales. En Honduras, los servicios de salud ofrecen diferentes métodos anticonceptivos, orientación médica y materiales educativos a través de los Servicios de Salud Amigables para Adolescentes (SSAA), promovidos por la Secretaría de Salud, el Fondo de Población de las Naciones Unidas (UNFPA) y otras instituciones. </p>',
                'Preservativo masculino y femenino' => 'Los preservativos son un método de barrera que se usa una vez y se desecha. Ayudan a prevenir embarazos y proteger contra enfermedades  de transmisión sexual, incluido el VIH/SIDA.

Los preservativos más comunes son:
Condón masculino: Disponible de forma gratuita en centros de salud, hospitales y campañas educativas.
Condón femenino: Disponible de forma gratuita en algunos centros de salud. Protege también parte externa de la vulva.

Para asegurar un uso efectivo del condón, se debe colocar antes del contacto genital, dejar espacio en la punta, y retirar después de la eyaculación. Se usa uno nuevo en cada relación.
 
Ventajas:
 
No requieren receta médica
Es fácil de conseguir y usar
Es ideal para jóvenes por su accesibilidad y doble protección

Desventajas:

Puede romperse durante el coito sin darnos cuenta
Requiere de un uso correcto para garantizar protección

Más información sobre preservativos:

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
https://mdemujer.org/pae-honduras/

La pastilla del día después vuelve a ser legal en Honduras
https://elpais.com/america/sociedad/2023-03-09/la-pastilla-del-dia-despues-vuelve-a-ser-legal-en-honduras.html
Honduras avanza en garantía de derechos al legalizar la anticoncepción oral de emergencia
https://reproductiverights.org/news/honduras-anticoncepcion-oral-de-emergencia/#:~:text=Marzo%2023%20de%202023%2C%20(Declaraci%C3%B3n,de%20emergencia%2C%20conocida%20como%20PAE.
',
                'Métodos NO recomendados como opción principal' => 'Los siguientes métodos no son recomendados como opción principal, pero en ocasiones pueden acompañar otros métodos anticonceptivos: 

1. Coito interrumpido: Consiste en retirar el pene antes de la eyaculación. Sin embargo, NO es efectivo ya que el líquido preeyaculatorio puede contener espermatozoides. Este método falla con frecuencia, sobre todo en adolescentes.
 
2. Métodos naturales (ritmo, temperatura basal, moco cervical): Es un método basado en la observación del ciclo menstrual y los días fértiles. Tiene baja eficacia si no se aplican con mucha experiencia y constancia.
 
No protege contra enfermedades de transmisión sexual.
 
3.Métodos quirúrgicos o definitivos

Aunque efectivos para prevenir embarazos, NO se recomiendan para adolescentes. Son procedimientos permanentes y sólo deben realizarse en adultos con consentimiento informado.
 
Vasectomía (hombre): Es el corte y ligadura realizados en los conductos deferentes unos centímetros arriba de los testículos, para interrumpir el paso de los espermatozoides y su salida en la eyaculación. Es 99% segura pero solamente se realiza a adultos con la seguridad absoluta de no querer procrear otro hijo. Es definitiva.
 
Salpingoclasia (mujer): Es la ligadura de trompas de falopio para impedir el paso del óvulo. En ocasiones es reversible. 
 
Histerectomía: Extirpación del útero. Solo se practica en casos médicos graves (por ejemplo, cáncer). No debe usarse como anticonceptivo sin consentimiento pleno.',
                'Aborto' => 'El aborto en Honduras esta prohibido bajo cualquier circunstancia desde 1982. En el 2021 el Congreso aprobó incluir la prohibición del aborto en la Constitución en el artículo 67. 
El Código Penal de Honduras establece en el artículo 196 las diferentes sanciones en caso de aborto con o sin consentimiento. 
',
                'Recursos disponibles en Honduras' => 'Si requieres mayor información, puedes consultar los siguientes recursos ofrecidos por el Gobierno de Honduras:

Servicios de Salud Amigables para Adolescentes (SSAA) en hospitales y centros de salud.
 
Educación sexual integral incluida en programas escolares y campañas apoyadas por la Estrategia Nacional para la Prevención del Embarazo Adolescente (ENAPREAH).
 
Aplicación móvil “Reproductiva” para consultas sobre salud sexual y reproductiva.
 
Distribución gratuita de condones, píldoras, implantes y PAE en centros públicos.
',
                'data-2' => '<p class="cabecera-one">Reflexión</p>
                <p class="cuerpo-texto p-bottom">En Honduras, las y los adolescentes tienen derecho a recibir información clara y basada en evidencia sobre su salud sexual y reproductiva. Existen métodos anticonceptivos seguros, accesibles y legales que se pueden adaptar a sus necesidades. El acompañamiento de profesionales de salud y el respeto a su autonomía son clave para prevenir embarazos no deseados y enfermedades de transmisión sexual.</p>',
            ],
            'quiz-5' => [
                1 => [
                    'q' => '<p>Se recomienda acceder a tener relaciones sexuales sin condón o preservativo</p>',
                    'a' => false,
                    'c' => '<p><b>Falso.</b><br>Al menos que se tenga una pareja estable y que ambos se cuiden, se revisen periódicamente y usen algún otro método anticonceptivo, si es que no quieren un embarazo. Para adolescentes, se recomienda especialmente el uso del condón pues además previene enfermedades de transmisión sexual.</p>'
                ],
                2 => [
                    'q' => '<p>Tomando solo la píldora anticonceptiva evito contagiarme de alguna enfermedad de transmisión sexual</p>',
                    'a' => false,
                    'c' => '<p><b>Falso.</b><br>La píldora puede evitar un embarazo, pero no previene enfermedades de transmisión sexual.</p>'
                ],
                3 => [
                    'q' => '<p>Las píldoras anticonceptivas causan cáncer</p>',
                    'a' => false,
                    'c' => '<p><b>Falso.</b><br>Aunque puede causar efectos secundarios hormonales, no hay evidencia de que cause cáncer.</p>'
                ],
                4 => [
                    'q' => '<p> La ducha vaginal previene el embarazo</p>',
                    'a' => false,
                    'c' => '<p><b>Falso.</b><br>a ducha vaginal no es un método efectivo de anticoncepción y no se recomienda ni como aseo normal ya que afecta a la flora vaginal.</p>'
                ],
                5 => [
                    'q' => '<p>Usando doble condón se tiene mayor protección </p>',
                    'a' => false,
                    'c' => '<p><b>Falso.</b><br>Usar doble condón puede hacer que sea menos efectivo ya que puede deslizarse o romperse con más facilidad. No es necesario usar doble, uno tiene la efectividad necesaria si se pone y usa correctamente un condón.</p>
'
                ]
            ],
            'accordion-5' => [
                '¿Qué es el sexo?' => 'El sexo se refiere a las características biológicas con las que nacemos: genitales, hormonas y cromosomas. Al nacer, se asigna un sexo: masculino o femenino. Sin embargo, existen personas intersexuales, quienes nacen con características sexuales que no encajan completamente en estas dos categorías.
En la sección de “Identidad de Género” te explicamos que es Intersexual.
',
                '¿Qué es el género?' => 'El género es una construcción social, es decir, las expectativas y roles que la sociedad asigna a las personas por ser “mujeres” u “hombres”. Esto incluye cómo deben vestirse, comportarse o qué gustos “deben” tener. El género no es algo fijo y puede cambiar; cada persona lo vive y expresa de manera única.
',
                'Estudios de género y su importancia' => 'Los estudios de género analizan cómo estas expectativas y roles influyen en nuestras vidas, nuestras oportunidades y nuestra salud. Entenderlas es  importante porque ayudan a identificar y combatir estereotipos que limitan a niñas, niños y adolescentes en su desarrollo y generan desigualdades. Comprender el género permite construir una sociedad más justa y respetuosa con la diversidad.
',
                'Identidad de género' => 'La identidad de género se refiere a cómo una persona se siente y se reconoce a sí misma: como hombre, mujer, ambos, ninguno o algo diferente. Esta identidad puede coincidir o no con el sexo asignado al nacer.

La abreviatura LGBTTTIQ+ significa Lesbianas, Gays, Bisexuales, Travestis, Transgéneros, Transexuales, Intersexuales y Queer. El signo + significa la suma de nuevas comunidades y disidencias.

 
¿Qué significa cada una?:
 
Cisgénero: cuando la identidad de género coincide con el sexo asignado.

Transgénero: cuando la identidad de género  NO coincide con el sexo asignado.

No binario: persona que no se identifica exclusivamente como hombre o mujer. Puede sentirse como ambos, como ninguno, o fluctuar entre identidades.

Género fluido: persona cuya identidad de género varía con el tiempo.

Agénero: persona que no se identifica con ningún género.

Bigénero: persona que se identifica con dos géneros.

Intergénero/intersexual: persona que también tiene una identidad de género no binaria (no siempre ocurre).

Tercer género: es una identidad de género que no encaja en el binomio masculino-femenino, normalmente hace reconocimiento a identidades culturales o legales de géneros (como los muxes en México o los hijra en India).

Queer: persona que no se identifica como hombre o como mujer, su vestimenta, con quienes se relaciona no corresponde ni a lo femenino o a lo masculino. 


Descarga Orientación sexual e identidad de género en el derecho internacional de los derechos humanos https://acnudh.org/wp-content/uploads/2013/11/orentaci%C3%B3n-sexual-e-identidad-de-g%C3%A9nero2.pdf 
',
                '¿Qué es la orientación sexual?' => 'La orientación sexual es la capacidad de sentir atracción romántica, sexual o afectiva hacia otras personas.

Algunas orientaciones sexuales son:
 
Heterosexual: atracción hacia personas del sexo opuesto.

Homosexual: atracción hacia personas del mismo sexo.

Bisexual: atracción hacia más de un género.

Pansexual: atracción sin importar el género.

Asexual: poca o ninguna atracción sexual.

Demisexual: atracción solo cuando hay un vínculo emocional fuerte.
 
Todas las orientaciones e identidades son válidas y merecen respeto. Lo importante es vivir de manera auténtica y con respeto hacia los demás.

Te invitamos a ver el vídeo Terminologías LGBTI de la Comisión Interamericana de Derechos Humanos https://www.youtube.com/watch?v=rnArYr8vSAQ&list=PL5QlapyOGhXuYBw_XQqzG7qW9wF2fEbHk&index=17
',
                'data-1' => '[imagen]',
                'data-2' => '[imagen]',
            ],
            'quiz-6' => [
                1 => [
                    'q' => '<p>Si hablamos de diversidad sexual con los hijos e hijas se van a confundir y van a elegir cualquier identidad u orientación sexual</p>',
                    'a' => false,
                    'c' => '<p><b>Falso.</b><br>La orientación y la identidad de género, es un proceso de autodescubrimiento que se va dando a lo largo de la experiencia, no es algo que se de por influencia o por imitación. Al contrario, hablar estos temas favorece la inclusión, la justicia y ayuda a eliminar la violencia hacia personas de la diversidad, dando oportunidades a todas las personas de poder existir y tener una calidad de vida igualitaria.</p>'
                ],
                2 => [
                    'q' => '<p>Es una moda pertenecer a la diversidad sexual</p>',
                    'a' => false,
                    'c' => '<p><b>Falso.</b><br>Las personas de la diversidad sexual han existido siempre, a lo largo de la historia de la humanidad, es cierto que antes se ocultaba más y se hablaba menos de esto, por lo tanto había menor visibilización de la comunidad LGBTTTIQ+.</p>'
                ],
                3 => [
                    'q' => '<p>Las personas de la diversidad sexual tienen una vida sexual descontrolada, son irresponsables y no tienen relaciones estables</p>',
                    'a' => false,
                    'c' => '<p><b>Falso.</b><br>En todas las orientaciones sexuales, incluyendo la heterosexualidad existen personas que se relacionan de maneras distintas. Hay personas de la diversidad que tienen parejas estables o vínculos sexo afectivos sanos y el ejercicio de la sexualidad es responsable y pleno.</p>'
                ],
                4 => [
                    'q' => '<p>A las personas de la comunidad LGBTTTIQ+ se les ha estigmatizado</p>',
                    'a' => true,
                    'c' => '<p><b>Verdadero.</b><br>La estigmatización es el proceso social y psicológico de atribuir características negativas y prejuicios a individuos o grupos, que se consideran diferentes o no conformes a las normas sociales. Efectivamente, existen muchos prejuicios y mitos por pertenecer a la diversidad o a lo no normativo.</p>'
                ],
                5 => [
                    'q' => '<p>Se debe favorecer y construir una cultura de inclusión y respeto a las personas de las comunidades LGBTTTIQ+ </p>',
                    'a' => true,
                    'c' => '<p><b>Verdadero.</b><br>Las personas de la diversidad sexual tienen los mismos derechos que las personas que viven conforme a las normas sociales: tienen derecho a vivir libres de discriminación yde violencia, a ser visibilizadas, a existir y a tener acceso a las mismas oportunidades que cualquier persona.</p>'
                ]
            ],
            'slides-4' => [
                1 => '	<p class="cuerpo-texto"> Las relaciones afectivas y sexuales en la adolescencia son una parte natural del crecimiento.
 
Aprender a manejar el afecto implica entender y expresar emociones de forma sana y respetuosa, cuidando tanto a uno mismo como a la pareja.

Las relaciones saludables se basan en el respeto mutuo, la comunicación abierta, la confianza y el consentimiento. Aprender a reconocer cuándo una relación es positiva o tóxica ayuda a protegerse de abusos, manipulaciones y violencia.
 
Es importante que niñas, niños y adolescentes reciban educación emocional para construir vínculos sanos que fortalezcan su bienestar físico y mental.
</p>',
                2 => '[imagen]',
                3 => '<p class="cuerpo-texto">Para hablar de relaciones saludables es importante hablar sobre violencia de género en las relaciones:

¿Qué es violencia de género?

La Organización de Naciones Unidas explica que “la violencia de género se refiere a los actos dañinos dirigidos contra una persona o un grupo de personas en razón de su género. Tiene su origen en la desigualdad de género, el abuso de poder y la existencia de normas dañinas. El término se utiliza principalmente para subrayar el hecho de que las diferencias estructurales de poder basadas en el género colocan a las mujeres y niñas en situación de riesgo frente a múltiples formas de violencia. Si bien las mujeres y niñas sufren violencia de género de manera desproporcionada, los hombres y los niños también pueden ser blanco de ella”. 

Conoces más en La violencia de género es una de las violaciones más generalizadas de los derechos humanos en el mundo en
 <span class="btn-enlace"><a href="https://unric.org/es/la-violencia-de-genero-segun-la-onu/ "target="_blank">Ir a información</a>
                    </span></p>',
                4 => '<p class="cuerpo-texto"> Aspectos que sustentan la violencia de género:

La exaltación de los valores masculinos
Usar el lenguaje para violentar, humillar, se puede usar el lenguaje por ejemplo para no mencionar a las mujeres.
La valoración de las mujeres por su físico
El menosprecio hacia las labores relacionadas con la mujer, por ejemplo, la labor doméstica
Negar la vulnerabilidad masculina
Subrayar características que diferencian a las personas o grupos humanos
Exagerar la incompatibilidad
Exaltar objetivos de triunfo y logro
Rigidizar lealtades y deslealtades
Minimizar los costos de las violencias
Negar los significados y su existencia
</p>
',
                5 => '<p 	class="cuerpo-texto"> ¿Por qué es importante hablar sobre violencia con nuestros hijos e hijas para fomentar que construyan relaciones saludables? 
¿Por qué es importante la educación sexual integral en este tema?

Para que puedan identificarla si la viven.
Para que puedan pedir ayuda si lo necesitan.
Para que no normalicen situaciones que les hacen daño o de riesgo.
Porque la violencia está inserta y normalizada en nuestras culturas (es una problemática global).
Porque tienen derecho a vivir una vida libre de violencia.
Porque pueden cambiar patrones familiares o culturales.
Porque en el ejercicio de la sexualidad es importante relacionarse sin violencia.
Porque muchas adolescencias viven violencia en sus noviazgos o vínculos “amorosos”.
Porque estar consciente de la violencia y de nuestros derechos nos permite ser dueñas y dueños de nuestros cuerpos y decisiones.
Porque pueden tener la oportunidad que muchos padres y madres no tuvieron.</p>
',
            ]
        ];
        return $data;
    }
}