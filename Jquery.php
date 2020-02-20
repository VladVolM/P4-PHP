<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title id="title">Jquery</title>
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
<script>
$(document).ready(function(){
  $("article").click(function(){
    $(this).hide();
  });
});
</script>
<script>
$(document).ready(function(){
  $("#fadable").click(function(){
    $("#fadable").fadeToggle(3000);
  });
});
</script>
<script> 
$(document).ready(function(){
  $("#boxanimation").click(function(){
    $("#boxanimation").animate({left: '250px'});
  });
});
</script> 
		<div class="container-fluid">
			<p class="shadow mb-3">
			JQuery<br>
Es una biblioteca multiplataforma de JavaScript, que permite simplificar la manera de interactuar con los documentos HTML, manipular el árbol DOM, manejar eventos, desarrollar animaciones y agregar interacción con la técnica AJAX a páginas web.
			</p>
			<section class="shadow mb-3">
				<article>Soy un texto que va a desaparecer si me das click</article>
				<p id="fadable" class="text-white" style="background-color:blue;">Este sufre un fade in and out</p>
				<div id="boxanimation" class="text-center" style="background:#98bf21;height:20px;width:100px;position:absolute;">Animación</div>
			</section>
		</div>
	</body>
</html>
