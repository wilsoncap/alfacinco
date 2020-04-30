<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<meta name="google-site-verification" content="zPvWudRB2n5340RvT0PypZg3_QG7A5lmela06-6Opo8" />
		<title>CONTROL DE PLAGAS EN MONTERIA</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="css/animate.min.css" rel="stylesheet"> 
 <link href="css/lightbox.css" rel="stylesheet">   
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">


 <!-- Bootstrap Core CSS -->
   <!--  <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <script src="https://use.fontawesome.com/e582aecb45.js"></script>
  <!--  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 -->

 <!-- DOS FUNCIONES QUE QUIZAS NO CONOCIAS DE JAVASCRIT -->
  <!--  https://www.youtube.com/watch?v=gLvyMB-TV-0 -->
 <!--  http://www.higieneambiental.com/patrocinador/revista-plagas-urbanas -->
<!--  http://www.higiaiberica.com/servicios/control-de-plagas-urbanas -->
<!-- http://academic.uprm.edu/ofarrill/HTMLobj-346/UrbanPestsWeb.pdf -->

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
	<?php include 'inc_pg/menu.php';?>
		<!----//End-header---->
		<!-----start-slider---->
	<?php include 'inc_pg/slider.php';?>
		
		
		<?php include 'inc_pg/imagenp.php';?>


			<!----//End-about-grids----->
	
		<!----//End-about----->

		<!----start-services---->
		<?php include 'inc_pg/plagas.php';?>
		<!----//End-services---->





        







         <!-----start-testmonials---->
   	<?php include 'inc_pg/testimonio.php';?>
          <!-----//End-testmonials---->
		
		 <!----****************************GALERIA*******************************---->
   	<?php include 'inc_pg/galeriaF.php';?>
 <!----****************************GALERIA*******************************---->


		<!-----//End-team----->
		<!-----start-brand-carsuals------>
		<!-- <script type="text/javascript" src="js/jquery.flexisel.js"></script> -->
		<div class="brand-carsuals">
			
    <style>
.galeria {
    width: 90%;
    margin: auto;
    list-style: none;
    padding: 5px;
    box-sizing: border-box;
    
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.galeria li {
    margin: 5px;
}

.galeria img {
    width: 190px;
    height: 190px;
}

/*Estilos del modal*/

.modal {
    display: none;
}

.modal:target {
    
    display: block;
    position: fixed;
    background: rgba(0,0,0,0.8);
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.modal h3 {
    color: #fff;
    font-size: 30px;
    text-align: center;
    margin: 15px 0;
}

.imagen {
    width: 100%;
    height: 80%;
    
    display: flex;
    justify-content: center;
    align-items: center;
}

.imagen a {
    color: #fff;
    font-size: 40px;
    text-decoration: none;
    margin: 0 10px;
}

.imagen a:nth-child(2) {
    margin: 0;
    height: 100%;
    flex-shrink: 2;
}

.imagen img {
    width: 500px;
    height: 100%;
    max-width: 100%;
    border: 7px solid #fff;
    box-sizing: border-box;
}

.cerrar {
    display: block;
    background: #fff;
    width: 25px;
    height: 25px;
    margin: 15px auto;
    text-align: center;
    text-decoration: none;
    font-size: 25px;
    color: #000;
    padding: 5px;
    border-radius: 50%;
    line-height: 25px;
} 
</style>
      
<?php include 'inc_pg/galeriaV.php';?>


            </div>

        
		<!-----//End-brand-carsuals------>
		<!----start-blog---->
		

		<?php include 'inc_pg/blog.php';?>




		<?php include 'inc_pg/contacto.php';?>

		
		
		<!----//End-contact---->
		
		<?php include 'inc_pg/footer.php';?>





		


 <script type="text/javascript" src="js2/jquery.js"></script>
  <script type="text/javascript" src="js2/bootstrap.min.js"></script> 
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
 <script type="text/javascript" src="js2/wow.min.js"></script> 
  <script type="text/javascript" src="js2/lightbox.min.js"></script>
  <script type="text/javascript" src="js2/main.js"></script>
<script type="text/javascript" src="js2/mousescroll.js"></script>
	</body>
</html>

