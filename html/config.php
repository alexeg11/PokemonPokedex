	<?php

	//echo "conectando a database";
	
	$mysqli = mysqli_connect("172.17.0.2", "root", "2003", "pokemondb");
	//echo "<p>conectado a database<p>";
	
	
	if (!$mysqli) {
		echo "<p>Error: No se pudo conectar a MySQL." . PHP_EOL;
		echo "<p>error de depuración: " . mysqli_connect_error() . PHP_EOL;
		echo "<p>errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
		exit;
	}
	//echo "<p>Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
	//echo "<p>Información del host: " . mysqli_get_host_info($mysqli) . PHP_EOL;
