<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>jQuery.getJSON demo</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<style>
		img {
			height: 100px;
			margin: 1%;
		}
		section{
			display:block;
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
				Json api<br>
Usando el formato sencillo de Json, para intercambiar datos con la página <mark>api.flickr.com</mark>. Indicando las tags a segir en el jQuery.
			</p>
			<p class="shadow mb-3">
				(function() {<br>
					var flickerAPI = "https://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?";<br>
					$.getJSON( flickerAPI, <mark>{tags: "China",tagmode: "any",format: "json"}</mark>)<br>
						.done(function( data ) {<br>
							$.each( data.items, function( i, item ) {<br>
								<code>$( "&lt;img&gt;" ).attr( "src", item.media.m ).appendTo( "#images" );</code><br>
							if ( i === 30 ) {return false;}<br>
							});<br>
						});<br>
				})();<br>
			</p>
			<section class="shadow container-fluid">
				<div id="images"></div>
				<script>
				(function() {
				  var flickerAPI = "https://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?";
				  $.getJSON( flickerAPI, {
					// Criteros de busqueda
					tags: "China",
					tagmode: "any",
					format: "json"
				  })
					.done(function( data ) {
					  $.each( data.items, function( i, item ) {
						$( "<img>" ).attr( "src", item.media.m ).attr( "class", "shadow" ).appendTo( "#images" );
						// numero de fotos
						if ( i === 30 ) {
						  return false;
						}
					  });
					});
				})();
				</script>
			</section>
		</div>
	</body>
</html>
