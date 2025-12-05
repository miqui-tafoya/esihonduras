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
                    'a' => true,
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
',
                4 => 'Fecundación, embarazo, parto y lactancia

Honduras al igual que muchos países Latinoamericanos refleja un aumento en la maternidad entre adolescentes. Datos de la ENDESA indican que entre 2005-2006 y 2011-2012 el porcentaje de adolescentes que alguna vez estuvo embarazada pasó de 21.5% a 24%, lo que refleja un crecimiento de 2.5 puntos porcentuales. El mayor porcentaje de embarazos adolescentes se presenta en el área rural, en donde la cohabitación y la formación de familias se realizan de manera más temprana, lo que expone a las adolescentes a embarazos y a tener mayor número de hijos a lo largo de su vida reproductiva. 
',
                5 => 'La fecundación ocurre cuando un óvulo es fertilizado por un espermatozoide y se forma una nueva célula, que se implanta en la pared del útero y allí comienza a dividirse y crecer. El período de embarazo dura aproximadamente 9 meses y generalmente es resultado del coito.
 
Los síntomas físicos asociados con el embarazo se pueden clasificar en tres tipos:
 
a) Signos presuntivos. Varían de mujer a mujer y aunque no son definitivos para diagnosticar un embarazo, son los primeros cambios corporales que se presentan. Éstos son: suspensión de la menstruación, náuseas en la mañana, cambios en el tamaño y sensibilidad de los senos, oscurecimiento de la zona que rodea al pezón (areola), fatiga, aumento en la frecuencia de orinar y cambio en el color de la vulva.
 
b) Signos probables. Aumento del tamaño del útero y del abdomen, el cual comienza a notarse alrededor del tercer mes; también se presenta reblandecimiento del cuello del útero.
 
c) Signos de certeza. Son tres y la presencia de cualquiera de ellos confirma el embarazo: detección de latidos del corazón del feto, movimientos notorios del feto, detección del esqueleto fetal por radiografía o ultrasonido.
Otras formas para saber si hay un embarazo son: la exploración pélvica que puede realizarla un médico dos semanas después del retraso menstrual, el análisis de orina, el análisis de sangre y las pruebas de embarazo a realizar en casa.
',
                6 => 'Gestación. Normalmente el embarazo (gestación o gravidez) tiene una duración de 9 meses. Después de la fecundación, la cual ocurre en una trompa, el óvulo se implanta en el útero y comienza a desarrollarse la placenta. Ella filtra el alimento y el oxígeno que el embrión recibe a través del cordón umbilical. Asimismo, los desechos del niño pasan a la madre por el cordón. Otra función de la placenta es crear hormonas que ayudan al proceso del embarazo.
 
El saco amniótico también se forma pocos días después de la implantación. Éste rodea al embrión y se llena de un líquido que se renueva diariamente y protege al producto.
 
Los nueve meses de la gestación se pueden dividir en tres trimestres: En el primer trimestre el embrión alcanza a medir unos 3 cm y ya tiene un corazón definido completamente; ojos, nariz, boca, orejas, manos y pies se desarrollan.
',
                7 => 'En el segundo trimestre se continúan formando estas estructuras, se forman las cejas y las pestañas y los ojos ya empiezan a abrirse y cerrarse.
 
El feto mueve algunos músculos, los brazos y piernas, haciendo especialmente importante esta segunda etapa para los padres pues es cuando pueden sentir verdaderamente su presencia.
 
En el tercer trimestre el feto da vueltas y su crecimiento alcanza aproximadamente 50 cm. Sus órganos están tan desarrollados que ya pueden funcionar independientemente.
',
                8 => 'Trabajo de parto. Éste es el proceso por medio del cual la madre expulsa el producto de la concepción. Se divide en tres fases: dilatación, expulsión o nacimiento del niño y alumbramiento o expulsión de la placenta.
 
Primera etapa. Este período empieza con las primeras contracciones y dura hasta que el cérvix o cuello del útero se dilata unos 10 cm para que pase el producto. Las primeras contracciones son cortas y suaves, separadas por intervalos de diez o veinte minutos. Conforme progresa el trabajo, las contracciones se hacen más frecuentes (cada tres o cinco minutos) y las que preceden a la dilatación completa pueden ser bastante dolorosas.
 
Segunda etapa. La expulsión empieza con la abertura total del cérvix y finaliza con el nacimiento del niño. Las contracciones son fuertes y la presión de éstas generalmente provoca la ruptura del saco amniótico. Durante las contracciones la madre empuja con fuerza. Cuando el cérvix se abre el niño empieza a deslizarse hacia la vagina. Después de que aparece la cabeza, se gira y se acomoda para que con la siguiente contracción salgan el cuello y los hombros. En este punto el cuerpo del niño es expulsado rápidamente, e inmediatamente después sale el resto del líquido amniótico.
',
                9 => 'Tercera etapa. Las contracciones cesan durante un momento después que ha nacido el niño, para empezar de nuevo a intervalos regulares hasta que la placenta se separa del útero y es expulsada.
 
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
            'slides-2' => [
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
        ];

        return $data;

    }
}