@extends('store.template')

@section('content')
<div class="container-fluid p-4 justify-content-center" style="width: 90%; max-width: 1300px; font-family: Raleway">
    <div class="justify-content-center">        
        <div class="card">
        	<div class="card-body">
        		<div class="calendar" id="calendar">   
				<div class="text-center text-uppercase font-weight-bold pt-4">
                    <h2>Calendario <i class="fa fa-calendar"></i></h2>
                </div> <br><br>
                <div class="row">
                	<div class="col-md-12 d-inline-flex justify-content-around">
                		<!-- Modal 1 -->
						<button type="button" class="btn-lg btn-sem" data-toggle="modal" data-target="#boton1">
						<i class="fa fa-calendar text-light">
						<div style="font-family: Bahnschrift; color:#fff;">Semana 1</div>
						</i>
						</button>

						<!-- Modal -->
						<div class="modal fade" id="boton1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">
							<strong>Semana #1</strong>
						</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
						</div>
						<div class="modal-body text-justify">
						<strong>Felicidades por tu embarazo. 😊</strong><br>
						Estás en tu primer semana y aunque comunmente no se presentan complicaciones en este punto, aquí te moestraré la alimentación y cuidados recomendados, que serán primoldiales en tu embarazo. <br>

						<div class="container text-center">
							<img src="{{asset('img/semanas/semana1.png')}}" height="200" alt="">
						</div><br><br>

						<strong>Alimentación</strong> <br>
						Seguir una dieta saludable y unos hábitos correctos es, obligatorio. Para empezar, debes evitar los productos lácteos que esté muy procesados o no pasteurizados.
						En cuanto a los pescados y mariscos debemos prestar especial atención ya que determinadas especies pueden contener mercurio. Evidentemente debes olvidarte de los embutidos crudos o curados, como el jamón, el chorizo… Suelen decir que, si congelas el jamón durante un par de meses, al tercero ya puedes comer ya que el riesgo consiste en evitar un parásito que provoca toxoplasmosis y que muere al estar un tiempo helado. <br><br>

						<strong> Cuidados </strong><br>
						Es recomendable comenzar a tomar ácido fólico ya que reduce el riesgo de defectos del tubo neural. Estos defectos son los que pueden provocar alteraciones en la médula espinal o en el cerebro. Si el embarazo ha sido premeditado, lo ideal es que empieces a tomar este suplemento vitamínico, antes de nada.
						El yodo, también es recomendable, ya que favorece el desarrollo cerebral de nuestro bebé. Estas vitaminas son necesarias para la producción de hormonas tiroideas. Si sufrimos de hipotiroidismo durante el embarazo, corremos un mayor riesgo de sufrir un aborto.
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>						
						</div>
						</div>
						</div>
						</div>

						<!-- Modal 2 -->
						<button type="button" class="btn-lg btn-sem" data-toggle="modal" data-target="#boton2">
						<i class="fa fa-calendar text-light">
						<div style="font-family: Bahnschrift; color:#fff;">Semana 2</div>
						</i>
						</button>

						<!-- Modal -->
						<div class="modal fade" id="boton2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle"><strong>Semana #2</strong></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
						</div>
						<div class="modal-body text-justify">
						<strong>Bienvenida a tu semana 2.</strong><br>
						En esta semana el embrión comienza a desarrollarse. Alimentación
						se puede comer de todo, prestando especial atención a los alimentos ricos en proteínas, ácido fólico, calcio, etc. Es posible tomar suplementos alimenticios para un aporte mayor de estos complejos vitamínicos.
						La cafeína, la nicotina y el alcohol son sustancias tóxicas que pueden causar daños en el bebé y aumentar el riesgo de aborto.<br>

						<div class="container text-center">
							<img src="{{asset('img/semanas/semana2.png')}}" height="200" alt="">
						</div><br><br>

						<strong>Cuidados</strong><br>
						Visita a tu ginecólogo
						No hay problema con tomar antibióticos durante esta segunda semana, sobre todo si existe una infección de orina o cistitis que pueda dificultar la gestación.  <br><br>

						<strong>Alimentación</strong><br>
						Se puede comer de todo, prestando especial atención a los alimentos ricos en proteínas, ácido fólico, calcio, etc. Es posible tomar suplementos alimenticios para un aporte mayor de estos complejos vitamínicos.
						La cafeína, la nicotina y el alcohol son sustancias tóxicas que pueden causar daños en el bebé y aumentar el riesgo de aborto.
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>						
						</div>
						</div>
						</div>
						</div>

						<!-- Modal 3 -->
						<button type="button" class="btn-lg btn-sem" data-toggle="modal" data-target="#boton3">
						<i class="fa fa-calendar text-light">
						<div style="font-family: Bahnschrift; color:#fff;">Semana 3</div>
						</i>
						</button>

						<!-- Modal -->
						<div class="modal fade" id="boton3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle"><strong>Semana #3</strong></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
						</div>
						<div class="modal-body text-justify">
						<strong>Estas en tu semana 3, que nervios.</strong><br>
						Pese a que no están descritos los cambios maternos hasta más avanzado el embarazo, hay mujeres que aseguran que sabían que estaban embarazadas en esta semana. Bien por apreciar cambios sutiles en su cuerpo, bien por pura intuición.
						Aunque es muy pronto, puede que comiences a percibir tensión en el pecho o síntomas abdominales típicos premenstruales.<br>

						<div class="container text-center">
							<img src="{{asset('img/semanas/semana3.jpg')}}" height="200" alt="">
						</div><br><br>

						<strong>Cuidados</strong><br>
						Es muy importante que desde ya adquieras hábitos saludables, puesto que es al inicio del embarazo, cuando se están formando todas las estructuras vitales del embrión, cuando más riesgo hay de malformaciones por malos hábitos: <br><br>
						•	Consulta con tu médico los medicamentos que tomas o te recete.<br><br>
						•	Indica la posibilidad de estar embarazada si debes someterte a alguna prueba diagnóstica como una radiografía.<br><br>
						•	Intenta eliminar por completo el tabaco y el alcohol de tu día a día.<br><br>						

						<strong>Alimentación</strong><br>
						Comer de forma saludable siempre es importante y especialmente durante el embarazo. Por lo tanto, asegúrese de que las calorías que ingiere proceden de alimentos nutritivos que contribuirán al crecimiento y desarrollo del bebé.
						Intente seguir una dieta equilibrada que incorpore los siguientes alimentos:
						•	carne magra<br><br>
						•	fruta<br><br>
						•	verdura<br><br>
						•	pan integral<br><br>
						•	productos lácteos de bajo contenido en grasas<br><br>
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>						
						</div>
						</div>
						</div>
						</div>
                	</div>
                </div><br>

                <div class="row">
                	<div class="col-md-12 d-inline-flex justify-content-around">
                		<!-- Modal 4 -->
						<button type="button" class="btn-lg btn-sem" data-toggle="modal" data-target="#boton4">
						<i class="fa fa-calendar text-light">
						<div style="font-family: Bahnschrift; color:#fff;">Semana 4</div>
						</i>
						</button>

						<!-- Modal 4 -->
						<div class="modal fade" id="boton4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle"><strong>Semana #4</strong></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
						</div>
						<div class="modal-body text-justify">
						<strong>Dile hola a tu semana 4</strong><br>
						
						El hito más importante en esta semana es la implantación del embrión en el útero. Entre su sexto y décimo día de vida, tu bebé, literalmente, se va a semienterrar en él, comenzando a compartir la circulación sanguínea.
						En el momento de la implantación, generalmente, se produce un pequeño sangrado, el llamado sangrado de implantación. Hay mujeres que habitualmente tienen menstruaciones muy poco abundantes y llegan a confundir este manchado con una regla escasa.<br>

						<br><br>
						<div class="container text-center">
							<img src="{{asset('img/semanas/semana4.jpg')}}" height="200" alt="">
						</div><br><br>
						
						<strong>Cuidados</strong><br>
						Lo que sí que empezarás a notar son unas ganas de hacer pis constantes, aunque vayas al baño y hagas muy poca cantidad. Se llama polaquiuria y es totalmente normal durante todo el embarazo, lo único que has de vigilar es que no sientas molestias al orinar. Si notaras escozor podría tratarse de una infección de orina, muy frecuente en la gestación, que requiere tratamiento antibiótico. <br><br>

						<strong>Alimentación</strong><br>
						Es muy importante que mantengas unos hábitos saludables:<br>
						•	Evita tóxicos como el alcohol y el tabaco. <br><br>
						•	Si tienes que tomar algún medicamento, consulta con tu médico que sea compatible con la gestación. <br><br>
						•	Si debes someterte a pruebas diagnósticas, como una radiografía, indica que estás embarazada. <br><br>
						•	Sigue una dieta saludable evitando prácticas de riesgo que pudieran favorecer una intoxicación alimentaria por toxoplasma o listeria. <br>

						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>						
						</div>
						</div>
						</div>
						</div>

						<!-- Modal 5 -->
						<button type="button" class="btn-lg btn-sem" data-toggle="modal" data-target="#boton5">
						<i class="fa fa-calendar text-light">
						<div style="font-family: Bahnschrift; color:#fff;">Semana 5</div>
						</i>
						</button>

						<!-- Modal 5 -->
						<div class="modal fade" id="boton5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle"><strong>Semana #5</strong></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
						</div>
						<div class="modal-body">
						<strong>Tu semana 5 esta aquí</strong><br>
						
						El hito más importante en esta semana es la implantación del embrión en el útero. Entre su sexto y décimo día de vida, tu bebé, literalmente, se va a semienterrar en él, comenzando a compartir la circulación sanguínea.
						En el momento de la implantación, generalmente, se produce un pequeño sangrado, el llamado sangrado de implantación. Hay mujeres que habitualmente tienen menstruaciones muy poco abundantes y llegan a confundir este manchado con una regla escasa.<br>

						<div class="container text-center">
							<img src="{{asset('img/semanas/semana5.jpg')}}" height="200" alt="">
						</div><br><br>

						<strong>Cuidados</strong><br>
						Lo que sí que empezarás a notar son unas ganas de hacer pis constantes, aunque vayas al baño y hagas muy poca cantidad. Se llama polaquiuria y es totalmente normal durante todo el embarazo, lo único que has de vigilar es que no sientas molestias al orinar. Si notaras escozor podría tratarse de una infección de orina, muy frecuente en la gestación, que requiere tratamiento antibiótico. <br><br>

						<strong>Alimentación</strong><br>
						Es muy importante que mantengas unos hábitos saludables:<br>
						•	Evita tóxicos como el alcohol y el tabaco. <br><br>
						•	Si tienes que tomar algún medicamento, consulta con tu médico que sea compatible con la gestación. <br><br>
						•	Si debes someterte a pruebas diagnósticas, como una radiografía, indica que estás embarazada. <br><br>
						•	Sigue una dieta saludable evitando prácticas de riesgo que pudieran favorecer una intoxicación alimentaria por toxoplasma o listeria. <br>
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>						
						</div>
						</div>
						</div>
						</div>

						<!-- Modal 6 -->
						<button type="button" class="btn-lg btn-sem" data-toggle="modal" data-target="#boton6">
						<i class="fa fa-calendar text-light">
						<div style="font-family: Bahnschrift; color:#fff;">Semana 6</div>
						</i>
						</button>

						<!-- Modal 6 -->
						<div class="modal fade" id="boton6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle"><strong>Semana #6</strong></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
						</div>
						<div class="modal-body text-justify">
						<strong>Lista tu semana 6 🤩</strong><br>
						Tu bebé ya se mueve, aunque es prontísimo para que tú lo notes.
						A la tensión del pecho y las ganas de orinar constantes (polaquiuria), se les suma un cansancio poco habitual. Tu cuerpo está destinando mucha energía al desarrollo adecuado de tu bebé, además la progesterona causa somnolencia.
						A partir de ahora no deberías tener ningún sangrado vaginal. Si manchas, es aconsejable que consultes con tu médico para descartar una posible amenaza de aborto (hay riesgo especialmente hasta la semana 12) o un ligero desprendimiento de una porción de la placenta que, en ocasiones deja un pequeño coágulo visible en una ecografía, llamado hematoma retroplacentario y que suele tener buena evolución.<br>

						<div class="container text-center">
							<img src="{{asset('img/semanas/semana6.jpg')}}" height="200" alt="">
						</div><br><br>

						<strong>Cuidados</strong><br>
						No intentes sobrellevar el cansancio bebiendo mucho café, puesto que podría ser perjudicial. Se estima que el límite de consumo diario de cafeína es de 300 miligramos. Una taza de café contiene 100mg, por lo que más de 3 cafés al día no serían seguros.<br><br>

						<strong>Alimentación</strong><br>
						Es importante que durante todo el embarazo evites tóxicos y mantengas una adecuada higiene alimentaria:<br><br>
						•	Evita consumir alimentos crudos, sin lavar o que lleven más de 2 horas preparados y fuera de la nevera. <br><br>
						•	Se muy escrupulosa con los objetos que estén en contacto con comida cruda en la cocina como tablas de cortar, cuchillos o trapos de cocina, puesto que podrían ocasionar una contaminación que favoreciera una infección alimentaria.<br><br>
						•	Elimina el alcohol y el tabaco de tu vida, al menos durante el embarazo y la lactancia.<br>

						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>						
						</div>
						</div>
						</div>
						</div>
                	</div>
                </div> <br>

                <div class="row">
                	<div class="col-md-12 d-inline-flex justify-content-around">
                		<!-- Modal 7 -->
						<button type="button" class="btn-lg btn-sem" data-toggle="modal" data-target="#boton7">
						<i class="fa fa-calendar text-light">
						<div style="font-family: Bahnschrift; color:#fff;">Semana 7</div>
						</i>
						</button>

						<!-- Modal 7 -->
						<div class="modal fade" id="boton7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle"><strong>Semana #7</strong></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
						</div>
						<div class="modal-body text-justify">
						<strong>Tu semana 6 comenzó 😊</strong><br>
						Durante estas próximas semanas el embrión va a adoptar una forma cada vez más parecida a la de un bebé.
						Los encargados de guiar su desarrollo van a ser tres grupos de células: el primero se encargará de formar a piel y el sistema nervioso; el segundo, de los vasos sanguíneos y los músculos, y el tercero, de todo el sistema digestivo.<br>

						<div class="container text-center">
							<img src="{{asset('img/semanas/semana7.jpg')}}" height="200" alt="">
						</div><br><br>

						<strong>Cuidados</strong><br>
						•	Si comienzas con estreñimiento es muy importante que vayas introduciendo en tu vida diaria algunos hábitos para solventarlo, puesto que se trata de una situación que, muy probablemente, va a acompañarte unos cuantos meses. <br><br>
						•	Evitarás o reducirás el estreñimiento ingiriendo suficiente líquido a lo largo del día; ten en cuenta que no solo lo harás en forma de agua, las sopas, gazpachos o fruta tienen gran contenido en agua.<br><br>
						•	Aumenta la ingesta de frutas y verduras y sustituye la pasta, pan y arroz por su versión integral.<br><br>

						<strong>Alimentación</strong><br>
						Evita refrescos, procura beber mucha agua y jugos naturales además de alimentos ricos en proteínas, vitaminas y minerales.

						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>						
						</div>
						</div>
						</div>
						</div>

						<!-- Modal 8 -->
						<button type="button" class="btn-lg btn-sem" data-toggle="modal" data-target="#boton8">
						<i class="fa fa-calendar text-light">
						<div style="font-family: Bahnschrift; color:#fff;">Semana 8</div>
						</i>
						</button>

						<!-- Modal 8 -->
						<div class="modal fade" id="boton8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle"><strong>Semana #8</strong> </h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
						</div>
						<div class="modal-body">
						<strong>Semana 8 🥰</strong><br>
						Ya se reconoce bastante bien la forma de la cabeza con los ojos, donde comienzan a formarse los párpados, manos y pies.
						Es capaz de doblar los brazos y las piernas y en las manos ya se distinguen sus deditos, unidos entre sí por una fina membrana.
						Sus pulmones y su hígado ya se diferencian con facilidad.<br>

						<div class="container text-center">
							<img src="{{asset('img/semanas/semana8.jpg')}}" height="200" alt="">
						</div><br><br>

						<strong>Cuidados</strong><br>
						Si el volumen de tu pecho ha aumentado, cómprate uno o dos sujetadores sin aros. Te van a resultar más cómodos, si además los compras ya de lactancia, los podrás utilizar en el postparto si das el pecho.
						Ten en cuenta que al inicio de la lactancia tu pecho va a aumentar todavía más de tamaño (sí, aunque ahora te parezca algo imposible) y puede que creas que los sujetadores que compres en el embarazo no van a servirte… pero tranquila, en pocas semanas ese volumen se reduce.
						Ten cuidado con los antojos, si te da por comer zanahorias o manzanas no hay problema, pero si te da por comer queso curado o bombones de chocolate, además de subirte el colesterol y el azúcar en sangre, cogerás más peso del debido.<br><br>						

						<strong>Alimentación</strong><br>
						• Ingiere ácido fólico, debe ser entre 880mg al día (6 tazas de cereal fortificado o 3 tazas de espinacas). <br><br>
						• Consume hierro, deben ser entre 26mg diarios (7 tazas de frijoles).<br><br>
						• Vitámina D, se necesitan 600 mg al día (13 huevos).<br><br>
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>						
						</div>
						</div>
						</div>
						</div>

						<!-- Modal  9 -->
						<button type="button" class="btn-lg btn-sem" data-toggle="modal" data-target="#boton9">
						<i class="fa fa-calendar text-light">
						<div style="font-family: Bahnschrift; color:#fff;">Semana 9</div>
						</i>
						</button>

						<!-- Modal 9 -->
						<div class="modal fade" id="boton9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle"><strong>Semana #9</strong></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
						</div>
						<div class="modal-body text-justify">
						<strong>Semana 9 🤗</strong> <br>
						Las molestias previas continúan, no decaigas si estás cansada de tantas náuseas, porque en cuestión de 2-3 semanas seguramente mejorarán, al igual que la polaquiuria (las ganas de orinar constantes).
						Es habitual que te parezca que empiezas a tener la piel y el pelo como jamás te habías visto de estupenda: suele desaparecer el acné propiciado por causa hormonal (aunque en algunos poquísimos casos empeora, ya que aumentan las glándulas sebáceas y con ello, la obstrucción de los poros) y tu melena luce brillante y abundante.<br>

						<div class="container text-center">
							<img src="{{asset('img/semanas/semana9.jpg')}}" height="200" alt="">
						</div><br><br>

						<strong>Cuidados</strong><br>
						Es normal si de momento no se nota ningún cambio claro en el cuerpo de la madre. Aunque el útero sigue en crecimiento y ya es casi el doble respecto al tamaño normal, está todavía dentro de la pelvis. El abultamiento que notan muchas embarazas en el bajo vientre es realmente por retención de líquido, y esto puede cambiar en cada caso.<br><br>

						<strong>Alimentación</strong><br>
						Durante las próximas semanas comer bien será fundamental, ya que la estructura básica del cuerpo de tu bebé se está acabando de formar. Si las náuseas no te permiten disfrutar una comida completa, prueba comer poquito y a menudo, y beber muchos líquidos. Esto puede ayudarte a mantener tu nivel de energía, si te sientes muy cansada.
						No te preocupes por comer por dos. Las mujeres embarazadas necesitan prácticamente la misma cantidad de energía (o sea, calorías) durante el primer trimestre del embarazo que una mujer que no está esperando un bebé.

						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>						
						</div>
						</div>
						</div>
						</div>
                	</div>
                </div> <br>

                <div class="row">
                	<div class="col-md-12 d-inline-flex justify-content-around">
                		<!-- Modal 10 -->
						<button type="button" class="btn-lg btn-sem" data-toggle="modal" data-target="#boton10">
						<i class="fa fa-calendar text-light">
						<div style="font-family: Bahnschrift; color:#fff;">Semana 10</div>
						</i>
						</button>

						<!-- Modal 10 -->
						<div class="modal fade" id="boton10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle"><strong>Semana #10</strong></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
						</div>
						<div class="modal-body text-justify">
						<strong>Más nervios por tu semana 11</strong><br>
						Tu pequeño pesa 5g, como un lápiz y mide 3,5 centímetros, como un sacapuntas. Abre y cierra sus manitos.
						La hormona gonadotropina coriónica humana la que sirvió en su momento para confirmar que estabas embarazada- comienza a bajar en sangre, lo cual juega un importante papel en la reducción paulatina de las náuseas. Algunas mujeres continúan con ellas todo el embarazo, pero no es lo habitual. Si has sido de las pocas afortunadas que no las ha sufrido, es altamente improbable que aparezcan a partir de ahora.
						Tu abdomen comienza a parecer el de una embarazada, aunque si llevas ropa ancha, habrá quien todavía no se dé cuenta de ello.<br>

						<div class="container text-center">
							<img src="{{asset('img/semanas/semana10.jpg')}}" height="200" alt="">
						</div><br><br>

						<strong>Cuidados</strong><br>
						Los síntomas seguirán siendo los mismos que en semanas previas, pero algunas mujeres empezarán ya a notar ciertas mejoras. Por ejemplo, una disminución de las náuseas y el malestar digestivo. En general, sin embargo, nos encontramos en plena adaptación del cuerpo al embarazo, los niveles de hormonas son muy altos, y los síntomas y cambios, que son tan variables en cada persona, van a continuar al menos unas semanas más. El útero cada vez es más grande, pero todavía a duras penas sobrepasa el hueso del pubis. Por tanto normal no notar abultamientos claros en la barriga, más que por la propia retención de líquido.<br><br>			

						<strong>Alimentación</strong><br>
						Continúa cuidando tu dieta. Cuando las náuseas mejoran, vuelve el apetito. No hay que estar a dieta en el embarazo, no hay que pasar hambre, pero evita alimentos ultraprocesados e hipercalóricos que no aportan nada beneficioso a tu salud y sí muchas posibilidades de aumentar de peso en exceso.

						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>						
						</div>
						</div>
						</div>
						</div>

						<!-- Modal 11 -->
						<button type="button" class="btn-lg btn-sem" data-toggle="modal" data-target="#boton11">
						<i class="fa fa-calendar text-light">
						<div style="font-family: Bahnschrift; color:#fff;">Semana 11</div>
						</i>
						</button>

						<!-- Modal 11 -->
						<div class="modal fade" id="boton11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle"><strong>Semana #11</strong></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
						</div>
						<div class="modal-body">
						<strong>Semana 11 😍</strong><br>
						Esta semana 11 de embarazo es clave porque el antes embrión y ahora feto ya ha completado una primera fase de su desarrollo.
						También ha adquirido una apariencia plenamente humana y es cuando más rápidamente se desarrollan; por ejemplo, sus riñones y su sistema genital.
						A las 11 semanas de embarazo, el feto mide unos tres centímetros desde la coronilla hasta las nalgas, y pesa alrededor de ocho gramos.
						La nariz va tomando relieve porque se forma el hueso nasal. En su boca ya hay papilas gustativas que le permitirán diferenciar sabores.
						Sus ovarios y testículos, dependiendo de si es niña o niño, se empiezan a formar y los testículos ya van produciendo testosterona. Los genitales externos ya están definidos, aunque es muy complicado diferenciarlos en una ecografía.<br>

						<div class="container text-center">
							<img src="{{asset('img/semanas/semana11.jpg')}}" height="200" alt="">
						</div><br><br>

						<strong>Cuidados</strong><br>
						A estas alturas deberías tener instaurada una adecuada rutina de ejercicio diario. Si te está costando, probablemente la actividad que hayas escogido no te motive lo suficiente. Piensa en otra que realmente te haga disfrutar, así será más fácil llevarla a cabo.
						Ten mucho cuidado al levantarte para evitar marearte. No supone un riesgo para tu salud ni la de tu bebé, puesto que la hipotensión es transitoria, pero podrías llegar a desequilibrarte y caer al suelo, dándote un golpe que sí podría suponer un riesgo.<br><br>

						<strong>Alimentación</strong><br>
						Una dieta sana es esencial para asegurar el desarrollo adecuado del feto y evitar problemas en la salud materna. Algunos nutrientes, como el ácido fólico, ayudan al correcto desarrollo del cerebro, y dado que no se encuentran fácilmente en la dieta, requieren de suplementos vitamínicos. Además, existen ciertos alimentos totalmente prohibidos durante la gestación, como las carnes crudas y los embutidos, ya que pueden transmitir infecciones a la madre.
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>						
						</div>
						</div>
						</div>
						</div>

						<!-- Modal  12 -->
						<button type="button" class="btn-lg btn-sem" data-toggle="modal" data-target="#boton12">
						<i class="fa fa-calendar text-light">
						<div style="font-family: Bahnschrift; color:#fff;">Semana 12</div>
						</i>
						</button>

						<!-- Modal 12 -->
						<div class="modal fade" id="boton12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle"><strong>Semana #12</strong></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
						</div>
						<div class="modal-body text-justify">
						<strong>Por fin tu semana 12 👶🏻💕</strong> <br>
						La semana 12 de embarazo marca el final del primer trimestre. A las 12 semanas de embarazo, su corazón late muy rápidamente, a unas 160 pulsaciones por minuto o, lo que es lo mismo, el doble de rápido que el latido de la madre. 
						A partir de las 12 semanas de embarazo, tanto el crecimiento y desarrollo del bebé como sus movimientos, todavía imperceptibles para ti, se multiplican exponencialmente. 
						Sus miembros están totalmente formados y se han alargado, su cabeza tiene una forma mucho más redondeada, su boca puede abrirse y cerrarse, sus orejas están prácticamente donde les corresponde y sus intestinos, que hasta ahora estaban sujetos a la base del cordón umbilical, se desplazan a la cavidad abdominal, donde ya hay espacio para ellos.
						En cuanto a síntomas, podemos decir que ahora empieza lo bueno: poco a poco las náuseas forman parte del pasado, ya no te sientes tan cansada y parece que no tienes ganas de ir al baño a todas horas.<br>

						<div class="container text-center">
							<img src="{{asset('img/semanas/semana12.jpg')}}" height="200" alt="">
						</div><br><br>

						<strong>Cuidados</strong><br>
						A estas alturas del embarazo, lo más saludable es que hayas aumentado un solo kilogramo de peso. A partir de ahora, aunque la ganancia no será homogénea del todo, lo adecuado es ir cogiendo cada semana entre 400 y 450 gramos, es decir, 1,6-1,8 kilos al mes.
						Si te has pasado, puedes aumentar tu actividad física pero, sobre todo, controlar tu dieta.<br><br>

						<strong>Alimentación</strong><br>
						No es necesario ponerse a régimen, pero puede ser beneficioso sustituir algunos alimentos:<br><br>

						•	Mejor comer pescado que un chuletón para obtener proteínas.<br><br>
						•	Vigila también la forma de preparación de los alimentos, la verdura es sanísima, pero si siempre la consumes en tempura, rebozada y frita, estás añadiendo una gran cantidad de calorías extra.<br>
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>						
						</div>
						</div>
						</div>
						</div>
                	</div>
                </div> <br><br>
				</div>
        	</div>			
		</div>
	</div>
</div>

@stop