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
  <script src="https://use.fontawesome.com/e582aecb45.js"></script>




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
					<a href="web/index.php"><img src="images/logo2.png" title="Blue agency" /></a>
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
                <h1 class="page-header">MANTENIMIENTO Y REPARACION DE AIRES ACONDICIONADOS</h1>
                <ol class="breadcrumb">
                    <li><a href="index.php" style="color: black">Inicio</a>
                    </li>
                    <li class="active">Item Otros Servicios</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-12">
            <img src="images/const.png" class="img-responsive">
               
            </div>

           
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

