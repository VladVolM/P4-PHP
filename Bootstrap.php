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
    </head>
    <body>
		<?php
$myfile = fopen("Menu.txt", "r") or die("Unable to open file!");

while(!feof($myfile)){
echo fgets($myfile);
}
?>
		<div class="container-fluid">
			<p>
		Bootstrap<br>
Es una <mark>biblioteca multiplataforma o conjunto de herramientas de código abierto</mark> para diseño de sitios y aplicaciones web. Contiene plantillas de diseño con <abbr>tipografía</abbr>, formularios, <kbd>botones</kbd>, cuadros, menús de navegación y <code>otros elementos de diseño</code> basado en HTML y CSS, así como extensiones de JavaScript adicionales. A diferencia de muchos frameworks web, solo se ocupa del desarrollo front-end. 
			</p>
			<p>
				Toda esta practica fue diseñada con booststrap
			</p>
		</div>
	</body>
</html>
