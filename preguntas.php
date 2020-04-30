<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>ALFACINCO</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


  <link href="css2/bootstrap.min.css" rel="stylesheet">
 

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">




		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		 <script src="js/jquery.min.js"></script>
		 <!---- start-smoth-scrolling---->
		 <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3"></script>
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!---- start-smoth-scrolling---->
		 <!-- Custom Theme files -->
		<link href="css/theme-style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----font-Awesome----->
   		<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
   		<!----font-Awesome----->
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,500,600,200,700,800,900' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
	</head>
	<body>
		<!----start-container------>
		<!----start-header---->
		<div id="home" class="header scroll">
			<div class="container">
				<!---- start-logo---->
				<div class="logo">
					<a href="web/index.html"><img src="images/logo2.png" title="Blue agency" /></a>
				</div>
				<!---- //End-logo---->
				<!----start-top-nav---->
				 <nav class="top-nav">
					<ul class="top-nav">
						<!-- <li><a href="index.html">Inicio</a></li> 
						<!-- <li class="page-scroll"><a href="#about" class="scroll">Imagen_c</a></li>
						<li class="page-scroll"><a href="#services" class="scroll">C_plagas</a></li>
						<li class="page-scroll"><a href="#port" class="scroll">O_servicios</a></li>
						<li class="page-scroll"><a href="#blog" class="scroll">Blog</a></li>
						<li class="page-scroll"><a href="#team" class="scroll">galeria</a></li>
						<li class="page-scroll"><a href="#contact" class="scroll">Contacto</a></li> -->
					</ul>
					<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
				</nav>
				<div class="clearfix"> </div>
				<!----//End-top-nav---->
			</div>
		</div>
		
		
		


 <!-- *****************contebido ***********************************-->


    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Preguntas Frecuentes
                  <!--   <small>Frecuentes</small> -->
                </h1>
                <ol class="breadcrumb">
                     <li><a href="index.php" style="color: black">Inicio</a>
                    </li>
                    <li class="active">Item Blog</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
        <div class="col-lg-4">
            <img class="img-responsive" src="images/prep.gif">
            </div>
            <div class="col-lg-8">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Los productos que utilizan son peligrosos para los niños?</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                Los productos que usamos son de baja toxicidad(piretros) y menos dañinos , pero lo más recomendable segun el fabricante de estos productos insecticidas, es que cuando se preste el servicio no haya niños, mujeres embarazadas ni animales domésticos, ya que estos podrian sufrir alguna alteracion en su salud.
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Se me acabaran las plagas después del servicio de fumigación que presta la empresa?</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                / No, puesto que las plagas llegan a diario a casa de muchas formas…el servicio de fumigación  es solo una parte del conjunto de actividades que se pueden implementar para ayudar a controlar la infestación de estas. Posterior al servicio prestado se le imparten instrucciones correctivas al cliente para mejorar las deficiencias que están contribuyendo a que haya un ambiente favorable para el desarrollo de estos invasores.
                            </div>
                        </div>
                    </div>
                    <!-- /.panel   Si si...bueno mijo alguna cosa yo le aviso...por hay siempre hay hnos que solicitan un mecánico que les pueda ayudar con su carro, entonces yo le aviso -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Cada Cuanto puedo realizar estos servicios de fumigación?</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                Bueno eso depende de cada cliente y la situación que le rodee…hay clientes que esperan demasiado para hacer el primer control y eso contribuye a que la plagas se prolifere demasiado, lo cual inside en que toque atenderlo mensualmente mientras se controlan estos invasores para luego establecerle un control trimestral. También hay clientes que por la actividad que manejan como preparación de alimentos masivos y tráfico de entrada(compras) y salida(desechos) de alimentos se hace necesario hacerles visitas mensuales, en cambio otros que se dedican a otras actividades los cuales son manejables y se pueden atender cada 2 o tres meses, pero todo dependerá del diagnóstico.
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Yo fumigue hace unos meses y no me sirvió el servicio, porque?</a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                Eso puede estar ligado a varios factores entre los cuales podríamos mencionar que la empresa o la persona que les presto el servicio solo aplico el producto y no les impartió correctivos para mejorar este tema, también puede ser que el cliente este manejando productos domésticos(raid u otros) constantemente para este tipo de plagas y estas se han vuelto muy resistentes a los insecticidas, otra puede ser que a la casa o local del cliente llegan muchas cosas de afuera como cajas de mercancía, maletas y por este medio están entrando las plagas nuevamente, de esto ampliaremos más detalladamente otra sesión.
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Que debo hacer después de que ustedes me presten el servicio?</a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body">
                                Tomar en cuenta las correcciones que el tecnico le suministro y hacer los correctivos, tambien estar muy pendiente de como evoluciona el servico en el primer mes y evitar que los niños, mascotas y demas personas tengan el menor contacto posible con las zonas tratadas para evitar cualquier posible malestar.
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Que debo hacer en caso que me sienta mal de salud durante la fumigación o después de esta?</a>
                            </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse">
                            <div class="panel-body">
                                Antes que nada hay que mencionar que no todos los organismos son iguales, hay personas que son alérgicas a unas cosas y a otras no. entonces cuando una persona presente un malestar por la utilización de estos productos, lo más recomendable es que lo alejemos de este lugar por un tiempo prudente y si hubo algún contacto con el producto aplicado lavarle con abundante agua la parte del cuerpo que tuvo contacto, por lo general estos síntomas desaparecerán con estas recomendaciones, si aun así el malestar persiste, pues acudir al centro asistencial más cercano para estar bajo observación medica...de este tema estaremos ampliando en otra sección.
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Es buena práctica comprar productos y aplicarlos uno mismo?</a>
                            </h4>
                        </div>
                        <div id="collapseSeven" class="panel-collapse collapse">
                            <div class="panel-body">
                               No es buena práctica, ya que los conocimientos que el cliente tiene sobre el manejo de estos productos son mínimos y eso podría ocasionar daños ambientales, también problemas de salud  y hasta la muerte a personas y animales, por otro lado el buen resultado y la efectividad serian mínimos pues se desconoce la biología y el comportamiento de las plagas a tratar, el cual es indispensable para ser acertados con dichos productos. Por eso lo más recomendable es que dejemos este tipo de trabajos a empresas que estén certificadas para prestar estos servicios.
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">Es necesario hacer los controles de plagas aunque no se vean indicios de estos?</a>
                            </h4>
                        </div>
                        <div id="collapseEight" class="panel-collapse collapse">
                            <div class="panel-body">
                               Claro que sí, esto es lo que se constituye como método de prevención y es bueno realizarlo periódicamente, el cual servirá para evidenciar inicios y tipos de plagas existentes y ayudar a mantenerlos controlados y que no lleguen a un punto crónico que sea difícil de erradicar.
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Aenean consequat lorem ut felis ullamcorper?</a>
                            </h4>
                        </div>
                        <div id="collapseNine" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.panel-group -->
            </div>

            
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

       

        <!-- Footer -->
        

    </div>



















		
			
       
        
         
		
                     








                </div>



				<!-----start-contact-social---->
				<ul class="list-unstyled list-inline contact-social">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-skype"></i></a></li>
				</ul>
				<!-----//End-contact-social---->
		</div>
		</div>
		<!----//End-contact---->
		   <?php include 'inc_pg/footer.php';?>


		<script src="js2/jquery.js"></script>

   
    <script src="js2/bootstrap.min.js"></script> 
	</body>
</html>

