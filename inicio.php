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
<?php /*
$dbconn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=example") or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$query = 'SELECT * FROM ATable';
$query2 = 'create table ATable(
	codigo 				integer,
	nombre 				varchar(30),
	fecha			 	date,
	valor	 			integer,
	constraint PK_COD primary key (codigo),
	constraint FK_COD foreign  key (codigo) references BTable
	);';

$query3 = 'create table BTable(
	codigo				integer,
	valor	 			varchar(20),
	constraint PK_COD2 primary key (codigo)
	);';

$query4 ='insert into BTable values( 0 , \'Volo\', \'17/3/1999\',0);';

$query5 ='insert into DTable values(0, \'Normal\');';


$result = pg_query($query3) or die('Query failed: ' . pg_last_error());
$result = pg_query($query2) or die('Query failed: ' . pg_last_error());
$result = pg_query($query5) or die('Query failed: ' . pg_last_error());
$result = pg_query($query4) or die('Query failed: ' . pg_last_error());
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);

*/
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
