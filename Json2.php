<!DOCTYPE html>

<html lang="es">

    <head>

        <meta charset="utf-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title id="title">Json</title>

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

<script>

var mifuncion = function() {

    var myJSON = '{"name":"John", "age":31, "city":"New York"}';

	var myObj = JSON.parse(myJSON);

	document.getElementById("DATA").innerHTML = "Datos: " +myObj.name +", "+ myObj.age +" years old, from "+ myObj.city;

}



$(document).ready(function(){

  $("#action").click(mifuncion);

});

</script>

		<div class="container-fluid">

			<p class="shadow mb-3">

		JSON<br>

Es un formato de texto sencillo para el intercambio de datos. Se trata de un subconjunto de la notación literal de objetos de JavaScript, aunque, debido a su amplia adopción como alternativa a XML, se considera un formato independiente del lenguaje. 

			</p>

			<section class="shadow mb-3">

				<p id="action">Se ha guardado unos datos, <code>al dar click a este texto aparecera</code></p>

				<p id="DATA"class="container bg-secondary text-white">Datos:</p>

			</section>
			<section class="shadow mb-3">

				<?php 
					$data = file_get_content("https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp")
 					$json = json_decode($data,true);
					echo "<table class='table table-striped table-bordered text-center shadow'>";

					echo "<thead class='thead-dark'>
						<tr>
	  						<th scope='col' colspan='1'>Lugar</th>
	  						<th scope='col' colspan='3'>Fuerza</th>
						</tr>
  						</thead>";
					for ($i=0;$i<10;$i++){
						echo "<tr><td>".$json[$i]["properties"]["place"]."</td><td>".$json[$i]["properties"]["mag"]."</td></tr>";
					}
					echo "</table>";
				?>

			</section>

		</div>

	</body>

</html>