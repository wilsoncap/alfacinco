<div class="copy-right">
			<div class="container">
					<div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                          <p><i class="fa fa-map-marker"></i>
                    <abbr title="home"></abbr>: Colombia, Cordoba, Monteria</p>
                <p><i class="fa fa-home"></i>
                    <abbr title="home"></abbr>:Cra 3 # 21-76 B/Chuchurubi</p>
                <p><i class="fa fa-phone"></i>
                    <abbr title="Phone"></abbr>: 311 417 7427 - 320 501 2913</p>
                <p><i class="fa fa-envelope-o"></i>
                    <abbr title="Email"></abbr>: alfacincopyv@gmail.com
                </p>
                <p><i class="fa fa-clock-o"></i>
                    <abbr title="Hours"></abbr>: Lunes-Sabado 8:00 AM - 12 y 2:00 - 6:00 PM</p>
                     
                    </div>
                    <div class="footer-col col-md-4" style="color: white">
                        <h2 >Numero de visitas</h2>
                       <?php 
function Contador()
{
$archivo = "contador.txt";
$f = fopen($archivo, "r");
$contador = 0;
if($f)
{
$contador = fread($f, filesize($archivo));
$contador = $contador + 1;
fclose($f);
}

$f = fopen($archivo, "w");
if($f)
{
	fwrite($f, $contador);
	fclose($f);
}

return $contador;

}
$visitante = Contador();
echo "VISITANTE Nº  ". $visitante;

?>

                        
                           
                    </div>
                    <div class="footer-col col-md-4">
                    <h2 style="color: white">Redes Sociales</h2>
                        <ul class="list-unstyled list-inline contact-social">
					<li><a href="https://www.facebook.com/alfacinco/"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://plus.google.com/u/0/114740920565325700163"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-skype"></i></a></li> -->
				</ul>
                      
                    </div>
                </div>

            </div>
            <script type="text/javascript">
				$(document).ready(function() {
					/*
					var defaults = {
			  			containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
			 		};
					*/
					
					$().UItoTop({ easingType: 'easeOutQuart' });
					
				});
			</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			</div>
		</div>