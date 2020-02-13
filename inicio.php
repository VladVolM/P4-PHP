<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title id="title">Inicio</title>
        <link rel="stylesheet" href="Style/styles.css" />
        <link rel="Shortcut Icon" href="Imagenes/icono.png">
    </head>
    <body>
		<section>
			<a class="button" href="form.php">Registrarse como jugador</a>
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


// Performing SQL query


$query1 = "create table BTable(
codigo int(2) PRIMARY KEY,
valor varchar(20)
)";

$query2 = "create table ATable(
codigo int(3) PRIMARY KEY,
nombre varchar(30),
fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
valor int(2),
FOREIGN KEY (valor) REFERENCES BTable(codigo)
)";

$query3 ="insert into BTable values(0, 'Normal')";

$query4 ="insert into ATable values( 0 , 'Volo', '1999/03/17',0)";

$query5 = "SELECT * FROM ATable";

mysqli_query($conn, "drop table ATable");
mysqli_query($conn, "drop table BTable");

alert('01');
if (mysqli_query($conn, $query1)) {
alert('02');
    if (mysqli_query($conn, $query2)) {
alert('03');
    	if (mysqli_query($conn, $query3)) {
alert('04');
    		if (mysqli_query($conn, $query4)) {

    				
	alert('1');

$result = mysqli_query($conn, $query5);
	alert('2');
if (mysqli_num_rows($result) > 0) {
	alert('3');
    while($row = mysqli_fetch_assoc($result)) {
		alert('4');

		echo "<table>";

			echo "<tr>";

				echo "<td>".$row["codigo"]."</td>";
				echo "<td>".$row["nombre"]."</td>";
				echo "<td>".$row["fecha"]."</td>";
				echo "<td>".$row["valor"]."</td>";

			echo "</tr>";

		echo "</table>";

    }
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


alert('exit ');

$conn->close();

?>

		<section>
			<ul>
				<li class="USUARIO">
					Bootstrap
					<ul>
						<li><a href="https://getbootstrap.com/">https://getbootstrap.com/</a></li>
						<li><a href="https://www.w3schools.com/bootstrap/bootstrap_ver.asp">https://www.w3schools.com/bootstrap/bootstrap_ver.asp</a></li>
					</ul>
				</li>
				<li class="USUARIO">
					Jquery
					<ul>
						<li><a href="https://www.w3schools.com/jquery/default.asp">https://www.w3schools.com/jquery/default.asp</a></li>
					</ul>
				</li>
				<li class="USUARIO">
					Json
					<ul>
						<li><a href="https://ejemplocodigo.com/ejemplo-php-crear-y-leer-json-de-una-tabla-mysql/">https://ejemplocodigo.com/ejemplo-php-crear-y-leer-json-de-una-tabla-mysql/</a></li>
					</ul>
				</li>
				<li class="USUARIO">
					Json externo
					<ul>
						<li><a href="json.html">json.html</a></li>
					</ul>
				</li>
				<li class="USUARIO">
					Angular JS
					<ul>
						<li><a href="https://www.w3schools.com/angular/">https://www.w3schools.com/angular/</a></li>
					</ul>
				</li>
			</ul>
        </section>
    </body>
</html>
