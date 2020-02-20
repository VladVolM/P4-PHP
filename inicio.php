<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title id="title">Inicio</title>
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
		<section>
			<article class="shadow mb-3">
					Author: Volodymyr Molchkov Volkogon<br>
					He cerado unos enlaces a paginas que describen y enseñan ejemplos de diferentes frameworks.
			</article>
			<article class="container-fluid shadow mb-3">
La separación del sistema en front-ends y back-ends es un tipo de abstracción que ayuda a mantener las diferentes partes del sistema separadas.<br>

El Frontend se enfoca en el usuario, con lo que podemos interactuar y lo que vemos. Utiliza HTML, CSS y JAVASCRIPT. Para un frontend la creatividad es el recurso más valioso, ya que tendrá que tomar fuentes, colores, imágenes y todos lo recursos de los cuales disponga para crear sitios agradables que se vean bien en todos los dispositivos y resoluciones.<br>

El Backend enfocado en hacer que todo lo que está detrás de un sitio web funcione correctamente, para crear sitios dinámicos. Utiliza PHP, Ruby, Python, JavaScript, SQL, MongoDb, MySQL, etc. Como en muchos sitios la información se encuentra en constante cambio o actualización, una buena capacidad de respuesta y una velocidad óptima del sitio son responsabilidades que un backend debe de afrontar.
			</article>
		</section>
<?php 

function alert($msg) {
	echo "<script type='text/javascript'>alert('$msg');</script>";
}

$conn = mysqli_connect("mysql", "root", "1234", "db");

if (!$conn) {
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}

$query1 = "create table ATable(
codigo int(1) PRIMARY KEY,
valor varchar(20)
)";

$query2 = "create table BTable(
codigo int(3) PRIMARY KEY,
nombre varchar(30),
fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
valor int(1),
FOREIGN KEY (valor) REFERENCES ATable(codigo)
)";

$query3 ="insert into ATable values(0, 'Mal')";

$query4 ="insert into BTable values( 0 , 'Insecticida', '1999/03/17',0)";

$query5 = "SELECT * FROM ATable";

mysqli_query($conn, "drop table BTable");
mysqli_query($conn, "drop table ATable");

if (mysqli_query($conn, $query1)) {
	if (mysqli_query($conn, $query2)) {
		if (mysqli_query($conn, $query3)) {

			mysqli_query($conn, "insert into ATable values(1, 'Suficiente')");
			mysqli_query($conn, "insert into ATable values(2, 'Normal')");
			mysqli_query($conn, "insert into ATable values(3, 'Bueno')");
			mysqli_query($conn, "insert into ATable values(4, 'Perfecto')");

			if (mysqli_query($conn, $query4)) {
				mysqli_query($conn, "insert into BTable values( 1 , 'Vehiculo', '2000/08/11',3)");
				mysqli_query($conn, "insert into BTable values( 2 , 'Resistencia', '2008/05/26',3)");
				mysqli_query($conn, "insert into BTable values( 3 , 'Durabilidad', '2015/012/02',4)");
				mysqli_query($conn, "insert into BTable values( 4 , 'Barco', '2018/010/30',1)");

$result = mysqli_query($conn, $query5);
if ($count=mysqli_num_rows($result) > 0) {

echo "<table class='table table-striped table-bordered text-center shadow'>";

echo "<thead class='thead-dark'>
	<tr>
	  <th scope='col' colspan='1'>Código</th>
	  <th scope='col' colspan='3'>Valor</th>
	</tr>
  </thead>";

	while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
				echo "<td colspan='1'>".$row["codigo"]."</td>";
				echo "<td colspan='1'>".$row["valor"]."</td>";
				echo "<td colspan='2'>";
					$result2 = mysqli_query($conn, "SELECT * FROM BTable where valor=".$row["codigo"]);
					if ($count=mysqli_num_rows($result2) > 0) {
						echo "<table class='table text-center mb-0'>";
						while($row2 = mysqli_fetch_assoc($result2)) {
							echo "<tr>";
								echo "<td>".$row2["codigo"]."</td>";
								echo "<td>".$row2["nombre"]."</td>";
								echo "<td>".substr($row2["fecha"],0,10)."</td>";
								echo "<td>".$row2["valor"]."</td>";
							echo "</tr>";
						}
						echo "</table>";
					}
				echo "</td>";
			echo "</tr>";

	}
	echo "</table>";

} else {
	alert('No se ha obtenido datos');
}
			} else {
				alert('No ha podido insertar datos en la segunda tabla ');
			}
		} else {
			alert('No ha podido insertar datos en la primera tabla ');
		}
	} else {
		alert('No ha podido cargarse la segunda tabla ');
	}
} else {
	alert('No ha podido cargarse la primera tabla ');
}

$conn->close();
?>
		</div>
	</body>
</html>
