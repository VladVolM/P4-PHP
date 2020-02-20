<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title id="title">Bootstrap</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<link rel="Shortcut Icon" href="Imagenes/icono.png">
    </head>
    <body>
		<?php
			$myfile = fopen("Menu.txt", "r") or die("Unable to open file!");
			while(!feof($myfile)){
				echo fgets($myfile);
			}
		?>
		<div class="container-fluid">
			<p class="shadow mb-3">
		Google Maps<br>
Es un servidor de aplicaciones de mapas en la web que pertenece a Alphabet Inc. Ofrece imágenes de mapas desplazables, fotografías por satélite, imágenes a pie de calle con Google Street View, condiciones de tráfico en tiempo real (Google Traffic) y un calculador de rutas. 
			</p>
			<section>
				<div id="googleMap" style="width:100%;height:400px;"></div>
				<script>
				function myMap() {
				var mapProp= {
				  center:new google.maps.LatLng(51.508742,-0.120850),
				  zoom:5,
				};
				var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
				}
				</script>
				<script src="https://maps.googleapis.com/maps/api/js?key=&callback=myMap"></script>
			</section>
		</div>
	</body>
</html>
