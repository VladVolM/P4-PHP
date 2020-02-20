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
				Error de API
				<?php 

//$ch = curl_init();
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_URL, 'https://swapi.co/api/films');
//$result = curl_exec($ch);
//curl_close($ch);

//$varjson = json_decode($result);

/////////////////
					//ini_set("https://swapi.co/api/films",1);
					//$data = file_get_contents("https://swapi.co/api/films");
					//$varjson = json_decode($data,true);
					//echo "<table class='table table-striped table-bordered text-center shadow'>";

					//echo "<thead class='thead-dark'>
					//	<tr>
	  				//		<th scope='col'>Planeta</th>
	  				//		<th scope='col'>Horas</th>
					//		<th scope='col'>Dias</th>
					//	</tr>
  					//	</thead>";
					//for ($i=0;$i<10;$i++){
					//	echo "<tr><td>".$varjson["results"][$i]["title"]."</td><td>".$varjson["results"][$i]["director"]."</td><td>".$varjson["results"][$i]["release_date"]."</td></tr>";
					//}
					//echo "</table>";
/////////////////
					//ini_set("https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp", 1);
					//$data = file_get_contents("https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp");
					//var_dump($data);
 					//$varjson = json_decode($data,true);
					//echo "<table class='table table-striped table-bordered text-center shadow'>";

					//echo "<thead class='thead-dark'>
					//	<tr>
	  				//		<th scope='col'>Lugar</th>
	  				//		<th scope='col'>Fuerza</th>
					//	</tr>
  					//	</thead>";
					//for ($i=0;$i<10;$i++){
					//	echo "<tr><td>".$varjson[$i]["properties"]["place"]."</td><td>".$varjson[$i]["properties"]["mag"]."</td></tr>";
					//}
					//echo "</table>";
				?>

			</section>

		</div>

	</body>

</html>
