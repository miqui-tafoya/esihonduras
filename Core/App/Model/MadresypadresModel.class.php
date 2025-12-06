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
                    'c' => 'Falso. Hace algunas generaciones no se hablaba de sexualidad ya que era un tema que se evadía, causaba conflicto, se consideraba falta de respeto o generaba vergüenza o miedo. El hablar de sexualidad con hijas e hijos permite romper la barrera de la vergüenza, ayuda a generar confianza y cercanía con hijos e hijas.
Es mejor que como madres y padres seamos quienes demos información clara, real.
Es importante que ante cualquier duda o situación relacionada con su sexualidad puedan acudir con personas adultas de confianza para orientarles y acompañarles.
'
                ],
                2 => [
                    'q' => '<p>¿Aunque padres y madres no tengan estudios pueden hablar con sus hijas e hijos sobre sexualidad?</p>',
                    'a' => true,
                    'c' => 'Verdad. Si bien es cierto que se pueden adquirir conocimientos a través de cursos, lecturas, Internet, también es cierto que se va aprendiendo del tema por experiencia propia. Lo más importante es una actitud positiva y el deseo de tener una comunicación abierta, directa y sincera. 
El conocimiento y la actualización sobre temas de sexualidad se pueden adquirir poco a poco. Incluso te proponemos revisar materiales junto a tus hijas e hijos, que les permita conversar y buscar más información. 
Lo más importante es hacer saber a las hijas e hijos que pueden confiar, que mamá y papá siempre les escucharán y que se les quiere.  

'
                ],
                3 => [
                    'q' => '<p>¿Solo las madres deben hablar con las hijas de sexualidad y los padres deben hablar con los hijos?</p>',
                    'a' => false,
                    'c' => 'Falso. No necesariamente tiene que ser así, tanto padres como madres pueden hablar con sus hijos e hijas, se puede generar confianza y apertura para hablar con ambos o bien con alguna persona adulta de confianza.
Además cuando madre y padre se involucran en la formación de las hijas e hijos también se rompe el mito o la creencia de que hay cosas que solo se hablan entre hombres o mujeres y así también contribuimos a una cultura de la igualdad y no reforzamos estereotipos de género.'
                ],
                4 => [
                    'q' => '<p>¿Es verdad que los hijos e hijas hablarán con madres y padres con la misma confianza que con los amigos y amigas.</p>',
                    'a' => 'both',
                    'c' => 'Verdadero y falso. Algunas veces, los hijos e hijas pueden tener apertura y confianza para comunicar sus sentimientos, dudas y experiencias. Sin duda habrá cosas que son privadas y que quizá den vergüenza y solo quieran compartirlas con sus amistades. 
Sin embargo, depende mucho de la actitud de madres y padres para que hijas e hijos sean más abiertos y sientan más confianza.'
                ],
            ],
            'accordion-1' => [
                'data-1' => '<h4>¿Cuáles son los órganos sexuales masculinos?</h4>
                <p>El sexo se refiere a los órganos sexuales que se presentan al nacer (órganos sexuales primarios) existen también personas con órganos sexuales ambiguos al nacer (personas intersexuales).
Con el curso de los años al llegar a la pubertad, el hipotálamo actúa sobre la glándula hipófisis dando lugar a que las hormonas actúan sobre los testículos y los ovarios.
Estas hormonas dan lugar a los caracteres sexuales secundarios, que son todos los cambios que se presentan en la adolescencia, en los hombres:mayor desarrollo del tejido muscular</p>',
                'El pene' => 'Es uno de los órganos sexuales masculinos. Por su interior pasa la uretra, conducto por donde se excreta tanto la orina como el semen. Su tamaño varía. A lo largo del pene existen tres columnas del tejido eréctil: dos cuerpos cavernosos juntos y un cuerpo esponjoso, por debajo, que aloja la uretra. En la punta del pene el cuerpo esponjoso se agranda para formar el glande y su corona.
Una capa de piel, llamada prepucio, sobrepasa el pene cubriendo al glande cuando el pene se encuentra flácido. Los cuerpos del pene tienen una rica provisión de vasos sanguíneos, los cuales están vacíos cuando el pene está flácido, pero que se llenan de sangre cuando hay erección. Ésta se puede producir por medio de la manipulación física del pene, por pensamientos sexuales, por la presión producida por la vejiga o el recto cuando se encuentran llenos, por usar ropa muy ajustada o por cualquier otro motivo que origine una congestión sanguínea en la región del pene.',
                'La eyaculación' => 'Es el proceso mediante el cual sale el semen a través de la abertura en el glande, gracias a la contracción de todos los órganos genitales (epidídimo, conducto deferente, próstata, vesículas seminales y uretra). La eyaculación puede ocurrir durante el sueño (sueños mojados o húmedos), como resultado de caricias, por masturbación y por coito. Cabe aclarar que no siempre que hay erección se presenta la eyaculación.',
                'Escroto' => 'Es una bolsa de piel en cuyo interior están contenidos los testículos. Posee varias capas dentro de las cuales se encuentran fibras musculares como el cremáster que provoca la elevación y descenso de los testículos. Funciona como regulador de la temperatura (la cual es de dos grados menos que la del resto del cuerpo) proporcionando la adecuada para la producción de los espermatozoides.',
                'Testículo' => 'Es un órgano par de forma ovoide que se desarrolla en la cavidad abdominal y que en el momento del nacimiento debe estar en el escroto. Su función es la producción de la hormona testosterona y de los espermatozoides dentro de los túbulos seminíferos. Si no descienden los testículos (lo que se denomina criptorquidia) se atrofian y causan esterilidad. Su tamaño es de 4 cm de largo por 3 cm de ancho aproximadamente. Normalmente el testículo izquierdo es un poco más grande y pesado que el derecho.',
                'Los epidídimos' => 'Se encuentran en la parte superior y rodeando los testículos. En ellos terminan su maduración y se almacenan los espermatozoides hasta el momento de la eyaculación los cuales, si no se eyaculan, son absorbidos por el tejido que los rodea.',
                'Conducto deferente' => 'Existe un conducto por cada testiculo y su función es conducir los espermatozoides desde el epidídimo hasta la vesícula seminal. Su longitud es de 40 a 45 cm.',
                'Vesículas seminales' => 'Son dos estructuras en forma de saco de unos 7 cm que se encuentran situadas detrás de la vejiga a los lados de la próstata. Poseen una capa muscular y otra secretora. Sus funciones son proteger y nutrir a los espermatozoides.',
                'Próstata' => 'Es una glándula que rodea a la uretra. Se encuentra abajo y delante de la vejiga, está formada por tejido glandular y es atravesada por los conductos eyaculadores. Su función es producir un líquido alcalino, clam y lechoso, que nutre a los espermatozoides y los protege de la acidez de la uretra producida por la orina y de la vagina. Esta secreción, junto con el líquido de las vesículas seminales, forma el semen. Como se encuentra apoyada en el cuello de la vejiga, si se hincha a causa de un tumor infección puede obstaculizar a ésta y a la uretra. Los tratamientos para los tumores generalmente son quirúrgicos.',
                'Glándulas de Cowper' => 'También se les conoce como glándulas buibo- uretrales. Estas dos glándulas se encuentran debajo de la próstata y su función es secretar un líquido alcalino que lubrica y neutraliza la acidez de la uretra antes del paso del semen en la eyaculación y que sale a través del pene durante la excitación. Este líquido contiene espermatozoides, por lo cual la práctica de retirar el pene de la vagina antes de la eyaculación no es un método anticonceptivo efectivo.',
                'Uretra' => 'Conducto que se inicia en el cuello de la vejiga y termina a nivel del glande en el meato urinario. Su función es doble: elimina la orina y conduce el semen en el momento de la eyaculación.',
                'Espermatozoides' => 'Están compuestos por cabeza, cuello y cola. En la cabeza están los 23 pares de cromosomas que representan la mitad de la herencia biológica del nuevo ser. La producción de espermatozoides, que dura entre 60 y 70 días, se inicia en la pubertad y termina con la muerte. Cada eyaculación contiene aproximadamente 100 millones de espermatozoides y tiene un volumen aproximado de 3 mililitros. La vida de cada espermatozoide dentro del cuerpo de la mujer es de 3 a 7 días y se mueve a unos 14 6 16 cm por hora.',
                'data-2' => '<h4>¿Cuáles son los órganos sexuales femeninos?</h4>
<p>El cambio más obvio que ocurre en la mujer al llegar a la pubertad es el desarrollo de los senos o mamas, cuya función será alimentar al bebé con la leche que producen antes y después del parto. El tamaño de los senos no tiene ninguna relación con la capacidad de producir leche. Comúnmente se han identificado como fuente de placer erótico y a menudo juegan un papel importante en la autoimagen de la mujer.</p>',
                'Los senos' => 'están formados por seis elementos: el pezón, la areola (parte oscura que rodea el pezón), las glándulas mamarias, los conductos galactóforos (que transportan la leche desde las glándulas hasta el pezón), tejido muscular y tejido graso.',
                'La vulva' => 'Es el conjunto de órganos y estructuras genitales externas, como son: el llamado monte de venus o monte púbico, los pliegues de piel llamados labios mayores y labios menores, el clítoris y el vestíbulo. Durante la pubertad empieza a crecer vello en algunas zonas de la vulva.',
                'Monte de Venus o monte púbico' => 'Es un abultamiento de tejido graso que se encuentra sobre el hueso del pubis, en la parte inferior del abdomen; está cubierto de vello.',
                'Labios mayores' => 'Son dos pliegues cutáneos de color un poco más obscuro que el resto de la piel, los más prominentes de la vulva, cuyas paredes exter- nas se recubren de vello; al separarlos dejan al descubierto las demás estruc- turas anatómicas de la vulva.',
                'Labios menores' => 'Son formaciones de tejido de color rosado (que cambia a rojo fuerte durante la excitación) y con cierta humedad; en la parte anterior conforman el prepucio y el frenillo del clítoris y continúan hacia atrás para formar el vestíbulo.',
                'Clítoris' => 'Es un órgano muy sensible, del tamaño de un chícharo o arveja, y sobresale en la parte anterior de los pliegues de los labios menores, arriba del meato urinario. Su conformación es similar a la del pene, con glande, cuerpo, tejido eréctil y gran cantidad de terminaciones nerviosas. Esto se debe a que tanto el clítoris como el pene se desarrollan a partir de la misma estructura. Su función se hace evidente durante el coito o la masturbación, en los cuales presenta variaciones en tamaño y posición de acuerdo con los niveles de excitación.',
                'Los labios menores' => 'En él se encuentran el meato urinario y el introito v Vestíbulo. Es un espacio de forma oval cuyos lados están formados por orificio vaginal.',
                'Meato urinario' => 'Es el orificio donde termina la uretra y por el cual sale la orina.',
                'Introito u orificio vaginal' => 'Está ubicado en la parte posterior del vestíbulo y es la puerta que comunica los genitales externos con los internos. Generalmente este orificio se encuentra parcialmente cubierto por una membrana llamada himen.',
                'Himen' => 'Es una membrana cuya forma y elasticidad varían de mujer a mujer. En su porción central tiene orificios que permiten el paso de los fluidos vaginales y uterinos como por ejemplo la menstruación. Biológicamente no se le ha encontrado función, sin embargo, su significado social y psicológico es importante para algunos grupos y culturas. Hay mujeres que nacen sin himen, a otras se les rompe al hacer ejercicio y otras lo rompen al introducir algún objeto como por ejemplo un tampón.',
                'Glándulas de Bartholin' => 'Son dos y están en los labios menores, a cada lado del introito vaginal. Éstas secretan líquido durante la excitación sexual pero no son las responsables de la lubricación vaginal.',
                'Vagina' => 'Es un conducto músculo-membranoso, de 8 a 12 centímetros de largo, que comunica al útero con la vulva. Sus paredes están cubiertas por membranas mucosas y rugosas las cuales por lo general están juntas, cerrando el espacio, pero que durante la excitación producen un líquido resultado del trasudado de las paredes y se van separando abriendo un espacio que albergará al pene durante el coito. También es llamada canal del parto.',
                'Útero o matriz' => 'Es un órgano hueco que se encuentra en la parte baja del abdomen entre la vejiga y el recto y que está compuesto por tres capas: La capa interna, compuesta por membranas, es el endometrio cuya función es importante durante el ciclo menstrual y el embarazo. La capa del medio es el miometrio, compuesta por tejido muscular, permitiéndole a este órgano crecer y volver a su tamaño, así como contraerse para ayudar a la expulsión de el peritoneo, la cual protege las dos anteriores. La forma del útero es similar a la de una pera invertida y su tamaño es de 8 a 10 cm de largo por 5 de capa es ancho, aproximadamente. Gracias a las características de sus tejidos durante el embarazo puede multiplicar su tamaño. Tiene tres orificios, dos de ellos en la parte superior los cuales comunican el útero con las trompas de Falopio; el tercero está localizado en la parte inferior, más delgada y alargada del útero, con el cual se comunica con la vagina. A esta parte se le denomina cuello del útero o cérvix. La función principal del útero es albergar y proveer de las condiciones necesarias al huevo fecundado para que, implantándose en una de sus paredes, se multiplique y conforme un nuevo ser humano.',
                'Trompas de Falopio' => 'Son dos tubos que se localizan en la parte superior del útero y que miden de 10 a 12 cm de largo por 1,62 mm de ancho. Su función consiste en atrapar con sus fimbrias el óvulo expulsado de los ovarios y transportarlo hasta el útero. Es en las trompas donde se produce la fecundación.',
                'Ovarios' => 'Son órganos pares que se localizan debajo y cerca de cada uno de los extremos de las trompas de Falopio. Tienen forma de almendra de color blanco y opaco y miden aproximadamente 4 cm de largo. Los ovarios cumplen dos funciones: es el lugar donde se hallan los oitos que se convertirán en óvulos maduros y en ellos se producen las hormonas femeninas, a saber, estrógenos y progesterona, que provocan cambios secundarios durante la pubertad y preparan al útero para la fecundación.',
                'Óvulos' => 'Se encuentran en forma de folículos desde el nacimiento y se dejan de producir durante la menopausia. Existen alrededor de trescientos mil entre los dos ovarios de los cuales sólo unos 400 llegan a madurar. Los folículos que no maduran se convierten en cuerpos cicatriciales. El óvulo es la célula que el espermatozoide fecunda y puede producir la gestación de un ser humano. En los óvulos está el material genético que, junto con la otra mitad aportada por el espermatozoide, dará las características al nuevo ser. Su vida para ser fecundado es de 24 horas, luego se deteriora.',
                'Ovulación' => 'Es un proceso que comienza entre los 10 y 14 años y termina entre los 45 y 50. En este proceso un ovario libera un óvulo casi maduro. Si este óvulo se une con un espermatozoide se da la fecundación. Si no ocurre la fecundación, es decir, si no queda embarazada la mujer, vuelve a madurar otro óvulo aproximadamente a los 28 6 30 días. La causa de la ovulación es básicamente hormonal. Las gonadotropinas producen el crecimiento y la ruptura del folículo y estimulan al ovario para la producción de progesterona y estrógenos y para que se enriquezca el endometrio, el cual, si no hay fecundación, se desprenderá con la menstruación.'
            ],
            'slides-1' => [
                1 => 'Menstruación 

Aproximadamente cada 28 a 30 días un ovario libera un óvulo. El óvulo viaja por una de las trompas de falopio hacia el útero; al mismo tiempo, el útero empieza a fabricar un revestimiento más grueso en el endometrio, formando una capa en la que se implantará el óvulo en caso de ser fecundado. De no haber fecundación, el óvulo se desintegra y los vasos sanguíneos del revestimiento del útero se van abriendo y liberando sangre. 
Este proceso dura de 3 a 7 días. Una vez concluido, se libera un óvulo y vuelve a empezar el proceso: el endometrio engrosa, se libera un óvulo que se dirige al útero y si no es fecundado se vuelve a presentar la menstruación entre 25 y 35 días después. A este proceso se le conoce como ciclo menstrual. 

El organismo de cada mujer funciona de manera particular, lo que hace que no se pueda hablar de días exactos entre una menstruación y la siguiente como tampoco de un momento particular para la ovulación. 
',
                2 => 'Este ciclo se toman 28 como el promedio de días intermenstruales y 14 los días desde la ovulación hasta la menstruación. Por esta razón los días fértiles del ciclo aproximadamente son los 9 días comprendidos entre el día 10 y el 18 a partir del día que comienza la menstruación.
 
La menstruación puede provocar en algunas mujeres malestar (dolor en el vientre, aumento de peso, cefalea e hipersensibilidad en los senos) a lo cual los médicos denominan dismenorrea. También puede producir cambios emocionales y de conducta, lo cual se denomina Síndrome Premenstrual.
 
Pueden aparecer irregularidades en la menstruación, sobre todo los dos primeros años a partir de que se inicia (menarquia) y los anteriores a la menopausia. Frecuentemente en esta época los períodos varían en duración (2 a 8 días) y cantidad de flujo.
 
',
                3 => 'Por otro lado, puede darse la menstruación sin ovulación, lo cual es llamado ciclo anovulatorio. La menstruación comienza normalmente entre los 10 y 14 años (menarquia) aunque puede presentarse también entre los 9 y los 18. Se prolonga hasta la menopausia.
 
Durante la menstruación la mujer se protege con toallas sanitarias cuya presentación varía en tamaño y forma; también es común el empleo de tampones y de algodón. Estos productos se consiguen en cualquier farmacia o tienda de autoservicio. 
No hay ninguna actividad que se deba suspender como consecuencia de la menstruación: se puede nadar, bañar, hacer ejercicio y coito en cualquier etapa del ciclo menstrual, inclusive durante la menstruación.
'
            ],
            'slides-2' => [
                1 => 'Fecundación, embarazo, parto y lactancia

Honduras al igual que muchos países Latinoamericanos refleja un aumento en la maternidad entre adolescentes. Datos de la ENDESA indican que entre 2005-2006 y 2011-2012 el porcentaje de adolescentes que alguna vez estuvo embarazada pasó de 21.5% a 24%, lo que refleja un crecimiento de 2.5 puntos porcentuales. El mayor porcentaje de embarazos adolescentes se presenta en el área rural, en donde la cohabitación y la formación de familias se realizan de manera más temprana, lo que expone a las adolescentes a embarazos y a tener mayor número de hijos a lo largo de su vida reproductiva. 
',
                2 => 'La fecundación ocurre cuando un óvulo es fertilizado por un espermatozoide y se forma una nueva célula, que se implanta en la pared del útero y allí comienza a dividirse y crecer. El período de embarazo dura aproximadamente 9 meses y generalmente es resultado del coito.
 
Los síntomas físicos asociados con el embarazo se pueden clasificar en tres tipos:
 
a) Signos presuntivos. Varían de mujer a mujer y aunque no son definitivos para diagnosticar un embarazo, son los primeros cambios corporales que se presentan. Éstos son: suspensión de la menstruación, náuseas en la mañana, cambios en el tamaño y sensibilidad de los senos, oscurecimiento de la zona que rodea al pezón (areola), fatiga, aumento en la frecuencia de orinar y cambio en el color de la vulva.
 
b) Signos probables. Aumento del tamaño del útero y del abdomen, el cual comienza a notarse alrededor del tercer mes; también se presenta reblandecimiento del cuello del útero.
 
c) Signos de certeza. Son tres y la presencia de cualquiera de ellos confirma el embarazo: detección de latidos del corazón del feto, movimientos notorios del feto, detección del esqueleto fetal por radiografía o ultrasonido.
Otras formas para saber si hay un embarazo son: la exploración pélvica que puede realizarla un médico dos semanas después del retraso menstrual, el análisis de orina, el análisis de sangre y las pruebas de embarazo a realizar en casa.
',
                3 => 'Gestación. Normalmente el embarazo (gestación o gravidez) tiene una duración de 9 meses. Después de la fecundación, la cual ocurre en una trompa, el óvulo se implanta en el útero y comienza a desarrollarse la placenta. Ella filtra el alimento y el oxígeno que el embrión recibe a través del cordón umbilical. Asimismo, los desechos del niño pasan a la madre por el cordón. Otra función de la placenta es crear hormonas que ayudan al proceso del embarazo.
 
El saco amniótico también se forma pocos días después de la implantación. Éste rodea al embrión y se llena de un líquido que se renueva diariamente y protege al producto.
 
Los nueve meses de la gestación se pueden dividir en tres trimestres: En el primer trimestre el embrión alcanza a medir unos 3 cm y ya tiene un corazón definido completamente; ojos, nariz, boca, orejas, manos y pies se desarrollan.
',
                4 => 'En el segundo trimestre se continúan formando estas estructuras, se forman las cejas y las pestañas y los ojos ya empiezan a abrirse y cerrarse.
 
El feto mueve algunos músculos, los brazos y piernas, haciendo especialmente importante esta segunda etapa para los padres pues es cuando pueden sentir verdaderamente su presencia.
 
En el tercer trimestre el feto da vueltas y su crecimiento alcanza aproximadamente 50 cm. Sus órganos están tan desarrollados que ya pueden funcionar independientemente.
',
                5 => 'Trabajo de parto. Éste es el proceso por medio del cual la madre expulsa el producto de la concepción. Se divide en tres fases: dilatación, expulsión o nacimiento del niño y alumbramiento o expulsión de la placenta.
 
Primera etapa. Este período empieza con las primeras contracciones y dura hasta que el cérvix o cuello del útero se dilata unos 10 cm para que pase el producto. Las primeras contracciones son cortas y suaves, separadas por intervalos de diez o veinte minutos. Conforme progresa el trabajo, las contracciones se hacen más frecuentes (cada tres o cinco minutos) y las que preceden a la dilatación completa pueden ser bastante dolorosas.
 
Segunda etapa. La expulsión empieza con la abertura total del cérvix y finaliza con el nacimiento del niño. Las contracciones son fuertes y la presión de éstas generalmente provoca la ruptura del saco amniótico. Durante las contracciones la madre empuja con fuerza. Cuando el cérvix se abre el niño empieza a deslizarse hacia la vagina. Después de que aparece la cabeza, se gira y se acomoda para que con la siguiente contracción salgan el cuello y los hombros. En este punto el cuerpo del niño es expulsado rápidamente, e inmediatamente después sale el resto del líquido amniótico.
',
                6 => 'Tercera etapa. Las contracciones cesan durante un momento después que ha nacido el niño, para empezar de nuevo a intervalos regulares hasta que la placenta se separa del útero y es expulsada.
 
La etapa posterior al parto se denomina puerperio. El organismo de la madre regresa al estado previo al embarazo. Este período puede durar de 4 a 5 semanas. Algunas mujeres se deprimen en este período.
 
En algunos casos se practica la cesárea que consiste en abrir el abdomen de la embarazada y su útero para sacar al bebé. Las razones para ello son diversas, algunas de las cuales pueden ser: sufrimiento del feto, que el cordón esté enredado en el bebé, mala posición del bebé, etcétera.
 
Lactancia. Es el resultado de la acción de la hormona llamada prolactina, la cual estimula a las mamas para la secreción de leche. Este proceso se inicia normalmente de 24 a 48 horas después del parto.
 
La leche materna contiene importantes elementos nutritivos y anticuerpos.
'
            ],
            'quiz-2' => [
                1 => [
                    'q' => '<p>¿Las mujeres menstruando no deben nadar?</p>',
                    'a' => false,
                    'c' => 'falso. No existe ninguna razón física que impida a las mujeres realizar actividades durante la menstruación.'
                ],
                2 => [
                    'q' => '<p> ¿El tamaño del pene es importante para que los hombres tengan mayor placer sexual?</p>',
                    'a' => false,
                    'c' => 'Falso. Es un mito que el tamaño del pene influye en el placer sexual. No existe ninguna relación entre el tamaño del pene y el gozo.'
                ],
                3 => [
                    'q' => '<p>¿No se debe tener contacto sexual durante la menstruación?</p>',
                    'a' => false,
                    'c' => 'Falso.  Si es posible el contacto sexual durante la menstruación si ambas personas se sienten agusto con ello, no hay ningún problema físico, lo importante es que ambas partes estén de acuerdo para eso la comunicación y el consentimiento es importante.'
                ],
                4 => [
                    'q' => '<p>¿Una chica puede quedar embarazada durante la menstruación?</p>',
                    'a' => true,
                    'c' => 'Verdadero. Es posible que una mujer se embarace en cualquier momento durante su ciclo menstrual, incluso durante el sangrado.'
                ],
                5 => [
                    'q' => '<p>¿Se puede quedar embarazada, aun si un muchacho no eyacula, no se viene dentro o retiró su pene antes de venirse dentro de ella?</p>',
                    'a' => true,
                    'c' => 'Verdadero. Aunque es baja la probabilidad es posible que en el líquido preeyaculatorio exista la posibilidad de un embarazo. El líquido preeyaculatorio es una pequeña cantidad de fluido que sale del pene cuando una persona esta exista, este fluido actúa como lubricante natural, sale de forma involuntaria es decir no se puede controlar, a veces ni cuenta se dan que ha salido. Usualmente no contiene espermas pero puede tener una cantidad, menor pero puede tenerlos.
Si no quieres quedar embarazada, no está en tus planes de madre o padre, es importante usar condón.'
                ],
                6 => [
                    'q' => '<p>¿Es verdad que la virginidad le da valor a la mujer?</p>',
                    'a' => false,
                    'c' => 'Falso. El darle valor a las mujeres por su virginidad es una creencia que pone a las mujeres en una situación de desventaja y las priva de su derecho al placer y a la libre elección de cómo vivir su sexualidad. Las mujeres tienen los mismos derechos sexuales que los hombres y no les quita valor por experimentar  su vida erótica. Es importante que sea libre y por decisión propia.'
                ]
            ],
            'slides-3' => [
                1 => 'La adolescencia es una de las etapas más críticas del ser humano porque es el momento anterior a asumir una responsabilidad social adulta, por eso se dice que las adolescencias buscan su identidad, necesita responder a la pregunta, ¿quién soy?

Una adolescencia quiere autoafirmarse, pero añora la seguridad que le brindan su mamá y papá, al mismo tiempo está descubriendo cambios en su cuerpo, está despertando a un cúmulo de sensaciones sexuales de dimensiones que desconoce. Todo este proceso se da en un contexto de una sociedad que presiona para reproducir los patrones de vida vigentes, frente a los que las adolescencias necesitan asumir una posición al respecto.

Culturalmente la palabra sexualidad se reduce a la genitalidad o al acto sexual, quedando fuera otros aspectos que también están involucrados, como la forma en cómo nos vinculamos entre hombres y mujeres, la diversidad de identidades sexuales, las diferentes orientaciones sexuales, es decir hacia quienes las personas se pueden sentir atraídas, cómo establecer relaciones afectivas sanas, etc.
',
                2 => 'Los comportamientos sexuales y las alternativas para ejercer la sexualidad pueden ser desde cómo cada adolescente decide explorar las sensaciones de su cuerpo y autoconocerse, cómo acercarse a otra persona y compartir su sexualidad.

Esto puede variar mucho según la edad, la cultura específica de cada comunidad, el género, la personalidad, las creencias, las emociones, etc.
Existen muchos mitos o creencias limitantes acerca de cómo debemos ejercer nuestra sexualidad. 

Por ejemplo, que la masturbación, también conocida como autoerotismo, es mala.
Otro ejemplo, que los hombres siempre deben estar dispuestos a la relación sexual (coito) por el hecho de ser hombres, o que todo contacto erótico debe terminar en la penetración para ser bueno.
',
                3 => '¿Cuáles conoces mitos conoces o has escuchado?

Es importante preguntarnos, 
¿Qué es lo que yo decido? 
¿Qué realmente me gustaría compartir con alguien más?, 
¿de qué maneras puedo explorar conmigo?

Es importante hablar con las adolescencias sobre consentimiento. 

El consentimiento consiste en tener un acuerdo voluntario para participar en algún acto sexual o erótico.
',
                4 => '<iframe width="480" height="400" src="https://www.youtube.com/embed/IUxUsJ36jQA?autoplay=1&mute=1" title="YouTube" frameborder="0" allowfullscreen></iframe>',
                5 => 'Es importante que el consentimiento ocurra en un entorno de libertad, consciencia e igualdad.
Las alternativas para ejercer la sexualidad también implican autoconocerse para saber que se quiere elegir y con quien, reconocer el derecho a la propia sexualidad y el placer.

Normalmente la educación sexual es en torno a la salud reproductiva (anticonceptivos, embarazo, menstruación etc) que está muy bien, pero pocas veces se nos educa para el placer.

Como adultos, es importante que abramos canales de comunicación sin juicios para poder acompañar y hablar de las alternativas con las adolescencias que acompañamos.
',
                6 => 'A continuación algunas preguntas que puedes explorar con tus hijos o hijas

Alternativas para ejercer la sexualidad

¿Qué es el consentimiento?
¿Y si después de haber dicho que sí me arrepiento o cambio de opinión?
¿Cómo puedo conocer mejor mi cuerpo y lo que siento?
¿Me siento lista o listo para tener experiencias eróticas con alguien más?
¿Siento algún temor?
¿Qué dudas tengo?
'
            ],
            'accordion-2' => [
                'data-1' => '<h4>Las infecciones de Transmisión Sexual</h4>
                <p>Las Infecciones de Transmisión sexual  son padecimientos infectocontagiosos que se contraen generalmente por realizar el coito en condiciones de higiene inapropiadas y/o con personas ya infectadas.
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
                'data-2' => '<h4>Medidas preventivas</h4>
<p>Es importante informar al adolescente que cada vez que tenga relaciones sexuales existe riesgo de contagio de una enfermedad sexualmente transmisible. Por lo tanto, una vez que el hombre y la mujer han iniciado su vida sexual, es conveniente incorporar a su vida las siguientes medidas preventivas:</p>',
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
'
            ],
            'quiz-3' => [
                1 => [
                    'q' => '<p>¿Es posible tener alguna enfermedad de transmisión sexual sin tener síntomas?</p>',
                    'a' => true,
                    'c' => 'Verdadero. Mientras las ETS puedes ser completamente identificadas por sus síntomas, otras no son tan evidentes. La gonorrea por ejemplo típicamente no desarrolla ningún síntoma en las mujeres  y frecuentemente no es detectada en el hombre, por eso es importante ser examinada o examinado por un profesional de la salud  si se ha tenido contacto sexual sin protección o se tiene sospecha de haber contraído alguna enfermedad.'
                ],
                2 => [
                    'q' => '<p> ¿Las ETS se pueden contraer de nuevo una vez que ya se está curado(a)?</p>',
                    'a' => true,
                    'c' => 'Verdadero. Se puede contagiar tantas veces como se tengan relaciones sexuales con una persona infectada. Por lo tanto, es importante que cualquiera que se haya tratado de cualquier enfermedad sexualmente transmisible se asegure de que su compañera o compañero sexual reciba atención médica.'
                ],
                3 => [
                    'q' => '<p>¿Los condones ayudan a un alto porcentaje de casos a prevenir el contagio de enfermedades sexualmente transmisibles?</p>',
                    'a' => true,
                    'c' => 'Verdadero. Efectivamente los condones no solo sirven como método para evitar un embarazo, también pueden ser útiles para prevenir la difusión de muchas enfermedades de transmisión sexual.'
                ],
                4 => [
                    'q' => '<p>¿Es verdad que el SIDA se contagia por usar los mismos cubiertos, dar un beso o estar en una alberca con alguien?</p>',
                    'a' => false,
                    'c' => 'Falso. El virus que produce el sida únicamente se puede transmitir por cambio de fluidos en el cuerpo, tales como, sangre, semen y secreciones vaginales, no por contacto de otro tipo.'
                ],
                5 => [
                    'q' => '<p>¿Es verdad que el SIDA solo afecta a personas homosexuales?</p>',
                    'a' => false,
                    'c' => 'Falso. Esta enfermedad no es exclusiva de personas de la diversidad sexual, puede contraerla cualquier persona, existen muchos mitos al respecto, lo ideal es siempre tomar medidas de precaución para tener relaciones sexuales de manera segura.'
                ]
            ],
            'accordion-3' => [
                'data-1' => '<h4>¿Por qué es un tema importante hablar del embarazo adolescente?</h4>
                <p>El embarazo durante la adolescencia puede cambiar profundamente la vida de las y los jóvenes. No se trata solo del bebé, sino de su salud, sus estudios, su futuro y sus emociones. Consecuencias principales:</p>',
                'Salud física' => 'El cuerpo de una adolescente muchas veces no está listo para un embarazo. Esto puede causar anemia, partos prematuros o riesgos para el bebé.',
                'Emociones' => 'Muchas jóvenes enfrentan miedo, ansiedad o tristeza. Si no tienen apoyo, pueden sufrir depresión o sentirse solas.
                Específicamente entre los aspectos psicológicos relacionados con el embarazo en adolescentes se encuentran:
El miedo a estar solo(a).
La posibilidad de sentirse adulto(a).
La carencia de afecto.
La necesidad de reafirmarse como mujeres o como hombres.
Relación o comunicación inadecuada con los padres, madres o tutores(as).
La búsqueda de independencia.
La curiosidad sexual.
Presencia de otros embarazos adolescentes en la familia.
El miedo a la interrupción del embarazo.
',
                'Educación' => 'La mayoría deja la escuela. Algunas no regresan, lo que limita sus oportunidades de empleo y de tener un mejor futuro.',
                'Economía' => 'Tener un bebé requiere mucho tiempo, dinero y apoyo. Muchas madres adolescentes dependen de otros y no logran ser económicamente independientes.',
                'Vida social' => 'El embarazo adolescente aún es juzgado. Esto puede generar rechazo en la familia, la escuela o la comunidad.',
                'El bebé también se ve afectado' => 'Puede nacer con bajo peso o tener menos acceso a atención médica y educación, si no hay apoyo familiar y del sistema de salud.',
                'data-2' => '<p>Prevenir el embarazo adolescente no se trata de controlar a las jóvenes, sino de darles información, herramientas, apoyo y opciones.</p>',
            ],
            'quiz-4' => [
                1 => [
                    'q' => '<p>¿Embarazandote de tu novio es la forma para que se quede contigo y te va a querer más?</p>',
                    'a' => false,
                    'c' => 'Falso. Tener un hijo o hija no garantiza el amor eterno, ni la estabilidad en la pareja, puede dificultar más la vida si no se tienen los recursos sociales, económicos, psicológicos o del entorno para criar.'
                ],
                2 => [
                    'q' => '<p>¿Es verdad que basta con querer tener un hijo para estar lista para la maternidad o paternidad?</p>',
                    'a' => false,
                    'c' => 'Falso. Para maternar y paternar de manera adecuada se necesita más que el deseo de ser madre o padre. Para sostener a un hijo o hija se necesita una comunidad, consciencia de lo que implica y condiciones psicosociales que favorezcan que el hijo o hija crezca de una buena manera.'
                ],
                3 => [
                    'q' => '<p>¿Todas las mujeres quieren ser madres?</p>',
                    'a' => false,
                    'c' => 'Falso. No todas las mujeres quieren ser madres, todavía hoy existe una carga social y cultural que sigue fomentando la idea de que para ser una “buena mujer” se debe ser madre por lo tanto no ser madre significa ser una “mala mujer”
La elección de ser o no ser madres es una decisión personal, no debe ser resultado de presión, chantajes, desinformación.'
                ],
                4 => [
                    'q' => '<p>¿Es verdad que las repercusiones sociales, psicológicas y emocionales son más fuertes sobre las chicas en el embarazo adolescente?</p>',
                    'a' => true,
                    'c' => 'Verdadero. Se suele responsabilizar más a la mujer de la crianza, culparla de lo que pase con el hijo o hija, hay más exigencia social y más dificultades para estudiar, trabajar o desarrollarse de manera personal o económica que para los hombres, ya que a ellos no se les exige de la misma manera paternar. Por lo tanto el embarazo en la adolescencia representa una situación de mayor riesgo para las chicas.'
                ]
            ],
            'accordion-4' => [
                'data-1' => '<h4>Anticoncepción en Honduras</h4>
                <p>La anticoncepción en adolescentes debe estar basada en el respeto a sus derechos sexuales y reproductivos, y adaptarse a sus necesidades físicas, emocionales y sociales. En Honduras, los servicios de salud ofrecen diferentes métodos anticonceptivos, orientación médica y materiales educativos a través de los Servicios de Salud Amigables para Adolescentes (SSAA), promovidos por la Secretaría de Salud, el Fondo de Población de las Naciones Unidas (UNFPA) y otras instituciones.</p>',
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

Preservativos https://www.who.int/es/news-room/fact-sheets/detail/condoms 
Preservativo Femenino vs Preservativo Masculino: ¿Cuál elegir? https://www.conlamujer.com/blog/preservativo-femenino-y-preservativo-masculino-cual-elegir#:~:text=En%20relaci%C3%B3n%20con%20su%20uso,y%20la%20vulva4%2C5.
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
https://mdemujer.org/pae-honduras/

La pastilla del día después vuelve a ser legal en Honduras
https://elpais.com/america/sociedad/2023-03-09/la-pastilla-del-dia-despues-vuelve-a-ser-legal-en-honduras.html
Honduras avanza en garantía de derechos al legalizar la anticoncepción oral de emergencia
https://reproductiverights.org/news/honduras-anticoncepcion-oral-de-emergencia/#:~:text=Marzo%2023%20de%202023%2C%20(Declaraci%C3%B3n,de%20emergencia%2C%20conocida%20como%20PAE.
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
                'data-2' => '<h4>Reflexión</h4>
                <p>En Honduras, los adolescentes tienen derecho a recibir información clara y basada en evidencia sobre su salud sexual y reproductiva. Existen métodos anticonceptivos seguros, accesibles y legales que se pueden adaptar a sus necesidades. El acompañamiento de profesionales de salud y el respeto a su autonomía son clave para prevenir embarazos no deseados y enfermedades de transmisión sexual.</p>',
            ],
            'quiz-5' => [
                1 => [
                    'q' => '<p>¿Debo acceder a tener relaciones sexuales sin condón o preservativo?</p>',
                    'a' => false,
                    'c' => 'Falso. Al menos que se tenga una pareja estable y que ambos se cuiden, se revisen periódicamente y usen algún otro método anticonceptivo, si es que no quieren un embarazo. para adolescentes se recomienda más el uso del condón que además previene enfermedades sexualmente transmisibles.'
                ],
                2 => [
                    'q' => '<p>¿Tomando la píldora anticonceptiva no puedo contagiarme de ninguna enfermedad de transmisión sexual?</p>',
                    'a' => false,
                    'c' => 'Falso. La píldora puede evitar un embarazo pero no previene enfermedades de transmisión sexual.'
                ],
                3 => [
                    'q' => '<p>¿Las píldoras anticonceptivas causan cáncer?</p>',
                    'a' => false,
                    'c' => 'Falso. Aunque puede causar efectos secundarios, no hay evidencia de que cause cáncer.'
                ],
                4 => [
                    'q' => '<p>¿La ducha vaginal previene el embarazo?</p>',
                    'a' => false,
                    'c' => 'Falso. la ducha vaginal no es un método efectivo de anticoncepción y no se recomienda ni como aseo normal ya que afecta a la flora vaginal.'
                ],
                5 => [
                    'q' => '<p>¿Usando doble condón se tiene mayor protección?</p>',
                    'a' => false,
                    'c' => 'Falso. Usar doble condón puede hacer que sea menos efectivo ya que puede deslizarse, no es necesario usar doble, uno tiene la efectividad necesaria si se pone y usa correctamente.'
                ]
            ],
            'accordion-5' => [
                '¿Qué es el sexo?' => 'El sexo se refiere a las características biológicas con las que nacemos: genitales, hormonas y cromosomas. Al nacer, se asigna un sexo: masculino o femenino. Sin embargo, existen personas intersexuales, quienes nacen con características sexuales que no encajan completamente en estas dos categorías.

En la sección de Identidad de género te explicamos que es Intersexual.
',
                '¿Qué es el género?' => 'El género es una construcción social, es decir, las expectativas y roles que la sociedad asigna a las personas por ser “mujeres” u “hombres”. Esto incluye cómo deben vestirse, comportarse o qué gustos “deben” tener. 
El género no es algo fijo y puede cambiar; cada persona lo vive y expresa de manera única.
',
                'Estudios de género y su importancia' => 'Los estudios de género analizan cómo estas expectativas y roles influyen en nuestras vidas, nuestras oportunidades y nuestra salud. Son importantes porque ayudan a identificar desigualdades, promover la igualdad y combatir estereotipos que limitan a niñas, niños y adolescentes en su desarrollo. Comprender el género permite construir una sociedad más justa y respetuosa con la diversidad.
',
                'Identidad de género' => 'La identidad de género se refiere a cómo una persona se siente y se reconoce a sí misma: como hombre, mujer, ambos, ninguno o algo diferente. Esta identidad puede coincidir o no con el sexo asignado al nacer.
 
Algunas identidades de género comunes son:
 
Cisgénero: cuando la identidad coincide con el sexo asignado.

Transgénero: cuando no coincide.

No binario, agénero, género fluido: personas que no se identifican únicamente como hombre o mujer.

No binario: persona que no se identifica exclusivamente como hombre o mujer. Puede sentirse como ambos, como ninguno, o fluctuar entre identidades.

Género fluido: persona cuya identidad de género varía con el tiempo.

Agénero: persona que no se identifica con ningún género.

Bigénero: persona que se identifica con dos géneros.

Intergénero: persona intersex que también tiene una identidad de género no normativa (no siempre ocurre).

Tercer género: reconocimientos culturales o legales de géneros distintos al masculino y femenino (como los muxes en México o los hijra en India).

Descarga Orientación sexual e identidad de género en el derecho internacional de los derechos humanos https://acnudh.org/wp-content/uploads/2013/11/orentaci%C3%B3n-sexual-e-identidad-de-g%C3%A9nero2.pdf 
',
                '¿Qué es la orientación sexual?' => 'La orientación sexual es la atracción sexual, romántica, sexual o afectiva que sentimos hacia otras personas.

Algunas orientaciones son:
 
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
                    'q' => '<p>¿Si hablamos de diversidad sexual con los hijos e hijas se van a confundir y van a elegir cualquier identidad u orientación sexual?</p>',
                    'a' => false,
                    'c' => 'Falso. La orientación y la identidad, es un proceso de autodescubrimiento que se va dando a lo largo de la experiencia, no es algo que se de por influencia o por imitación, al contrario, hablar de diversidad favorece la inclusión, la justicia y ayuda a eliminar la violencia hacia personas de la diversidad, dando oportunidades a todas las personas de poder existir y tener una calidad de vida igualitaria.'
                ],
                2 => [
                    'q' => '<p>¿Es una moda pertenecer a la diversidad sexual?</p>',
                    'a' => false,
                    'c' => 'Falso, las personas de la diversidad sexual han existido siempre, a lo largo de la historia de la humanidad, es cierto que antes de ocultaba más y se hablaba menos de esto, por lo tanto había menor visibilización de la comunidad LGBTTIQ.'
                ],
                3 => [
                    'q' => '<p>¿Las personas de la diversidad sexual tienen una vida sexual descontrolada, son irresponsables y no tienen relaciones estables?</p>',
                    'a' => false,
                    'c' => 'Falso. En todas las orientaciones sexuales, incluyendo la heterosexualidad existen personas que se relacionan de maneras distintas. Hay personas de la diversidad que tienen parejas estables o vínculos sexo afectivos sanos y el ejercicio de la sexualidad es responsable y pleno.'
                ],
                4 => [
                    'q' => '<p>¿A las personas de la comunidad LGBTTIQ se les ha estigmatizado?</p>',
                    'a' => true,
                    'c' => 'Verdadero. La estigmatización es el proceso social y psicológico de atribuir características negativas y prejuicios a individuos o grupos, que se consideran diferentes o no conformes a las normas sociales. Socialmente hay una tendencia a tener prejuicio y discriminación hacia personas que no pertenecer a la norma o a los grupos socialmente aceptados. Existen prejuicios y muchos mitos por pertenecer a la diversidad o a lo no normativo.'
                ],
                5 => [
                    'q' => '<p>¿Se debe favorecer y construir una cultura de inclusión y respeto a las personas de las comunidades LGBTTIQ?</p>',
                    'a' => true,
                    'c' => 'Verdadero. Las personas de la diversidad sexual tienen los mismos derechos que las personas que pertenecen a la norma, tienen derecho a vivir libres de discriminación, violencia a ser visibilizadas, a existir y a tener acceso a todas las mismas oportunidades que cualquier persona.'
                ]
            ],
            'slides-4' => [
                1 => 'Las relaciones afectivas y sexuales en la adolescencia son una parte natural del crecimiento.
 
Aprender a manejar el afecto implica entender y expresar emociones de forma sana y respetuosa, cuidando tanto a uno mismo como a la pareja.
 
Las relaciones saludables se basan en el respeto mutuo, la comunicación abierta, la confianza y el consentimiento. Aprender a reconocer cuándo una relación es positiva o tóxica ayuda a protegerse de abusos, manipulaciones o violencia.
 
Es importante que niñas, niños y adolescentes reciban educación emocional para construir vínculos sanos que fortalezcan su bienestar físico y mental.
',
                2 => '[imagen]',
                3 => 'Para hablar de relaciones saludables es importante hablar sobre violencia de género en las relaciones:

¿Qué es violencia de género?

Las Naciones Unidas nos explican que “la violencia de género se refiere a los actos dañinos dirigidos contra una persona o un grupo de personas en razón de su género. Tiene su origen en la desigualdad de género, el abuso de poder y la existencia de normas dañinas. El término se utiliza principalmente para subrayar el hecho de que las diferencias estructurales de poder basadas en el género colocan a las mujeres y niñas en situación de riesgo frente a múltiples formas de violencia. Si bien las mujeres y niñas sufren violencia de género de manera desproporcionada, los hombres y los niños también pueden ser blanco de ella” 

Conoces más en La violencia de género es una de las violaciones más generalizadas de los derechos humanos en el mundo en https://unric.org/es/la-violencia-de-genero-segun-la-onu/ ',
                4 => 'Aspectos que sustentan la violencia de género:

Los valores masculinos
La necesidad de aplicar la regla de la inversión
El uso del lenguaje
La valoración de las mujeres por su físico
La mirada masculina
El menosprecio hacia la mujer
Los roles contextuales
Negar la vulnerabilidad
Subrayar características que diferencian a las personas o grupos humanos
Exagerar la incompatibilidad
Exaltar objetivos de triunfo y logro
Rigidizar lealtades o deslealtades
Minimizar los costos de las violencias
Negar los significados y su existencia
',
                5 => '¿Por qué es importante hablar sobre violencia con nuestros hijos e hijas para ayudar a que construyan relaciones saludables? ¿Por qué es importante para la educación sexual integral?
Para que puedan identificarla si la viven.
Para que puedan pedir ayuda si lo necesitan.
Para que no normalicen situaciones que les hacen daño o de riesgo.
Porque la violencia está inserta y normalizada en nuestras culturas (es una problemática global)
Porque tienen derecho a vivir una vida libre de violencia.
porque pueden cambiar patrones familiares o culturales.
Porque en el ejercicio de la sexualidad es importante relacionarse sin violencia.
Porque muchas adolescencias viven violencia en sus noviazgos o vínculos “amorosos”
Porque estar consciente de la violencia y de nuestros derechos nos permite ser dueñas (os) de nuestros cuerpos y decisiones.
Porque pueden tener la oportunidad que muchos padres y madres no tuvimos.
',
            ]
        ];

        return $data;
    }
}