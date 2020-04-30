<div id="contact" class="contact">
			<div class="container">
				 <h3>Contactenos<label> </label></h3>
				<div class="contact-grids" class="row">



				


<!-- Mapa que ocupa 7 columnas -->
				
<div id="mapa" style="height: 400px"   class="col-lg-7">

						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63096.36277999243!2d-75.92721122200874!3d8.736791793723908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5a30044ababf1f%3A0xf45fd77d31a1171e!2sAlfa+Cinco!5e0!3m2!1ses!2s!4v1497637244998" width="100%" height="98%" frameborder="0" style="border:0" allowfullscreen></iframe>

						<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.522673749527!2d-75.89438098521543!3d8.736791793723897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5a30044ababf1f%3A0xf45fd77d31a1171e!2sAlfa+Cinco!5e0!3m2!1ses!2s!4v1497636377210" width="100%" height="98%" frameborder="0" style="border:0" allowfullscreen></iframe> -->

					</div>
<!--CODIGO JAVASCRTIP PARA CARGAR EL MAPA EN UN DIV-->
<!-- <script type="text/javascript">
	var divMapa = document.getElementById('mapa');
	navigator.geolocation.getCurrentPosition(fn_ok,fn_mal);
	function fn_mal(){}
	function fn_ok(rta){
		var lat = 8.737312;
	    var lon = -75.892762;	


	  var glatLon =  new google.maps.LatLng(lat,lon);
       var objConfig = {
       	zoom: 9,
       	center: glatLon

       }

       var gMapa = new google.maps.Map(divMapa, objConfig);
       var objConfiMarker = {position: glatLon, map: gMapa}
       
       var gMarker =  new google.maps.Marker(objConfiMarker);

	}
</script> -->


<!-- Formulario que ocupa 5 columnas-->
					<div class="col-lg-5 contact-grid-left">
              
                



					<form action="cont.php" method="POST" >
							<input type="text" placeholder="Nombre de la empresa o particular" name="nombre" >
							<input type="text" placeholder="Correo electronico" name="email" >
							<input type="text" placeholder="Asunto" name="asunto">
							<textarea type="text" placeholder="Escriba su mensaje..." name="mensaje"></textarea>
							<p class="conditions"> <input type="submit" value="Enviar"></span>
						</form> 
					</div>
					
					


					<div class="clearfix"> </div>
				</div>


		</div>