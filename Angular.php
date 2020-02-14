<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title id="title">Angular</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<style>
			.ng-hide {
			  height: 0;
			  width: 0;
			  background-color: transparent;
			  top:-200px;
			  left: 200px;
			}
		</style>
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
		Angular<br>
		Es un framework para aplicaciones web desarrollado en TypeScript, de código abierto, mantenido por Google, que se utiliza para crear y mantener aplicaciones web de una sola página. Su objetivo es aumentar las aplicaciones basadas en navegador con capacidad de Modelo Vista Controlador (MVC), en un esfuerzo para hacer que el desarrollo y las pruebas sean más fáciles.
			</p>

			<div ng-app="" class="shadow mb-3">
			 	<p>
					Para poder usar angular en tus paginas web sera nesesario usar <code>&lt;script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"&gt;&lt;/script&gt;</code> esto permitira usar las librerias de Angular.<br>
			Angular usa directivas que empiezan por <mark>ng-</mark> cada una tiene su funcionalidad.<br>
			Para usar el lenguaje de angular se puede escribir en cualquier momento dentro de &lbrace;&lbrace; &rbrace;&rbrace; dentro de una etiqueta con ng-app, por ejemplo al poner 5+5 dentro de estos causa este resultado {{ 5 + 5 }}
				</p>

				<h1 ng-mouseover="countt = countt + 1" ng-init="countt=0">Hide: <input type="checkbox" ng-model="myCheck"></h1>

				<div ng-hide="myCheck">
					<p>Frase : <input type="text" ng-model="name" placeholder="Escribe algo"><br>&nbsp;<code class="text-uppercase"style="font-size: 30px;">{{name}}</code></p>
					<button ng-click="count = count + 1" ng-init="count=0">{{count}}</button>
					<h3>Mouse over "Hide" count {{countt}}</h3>
				</div>
			</div>
		</div>
	</body>
</html>
