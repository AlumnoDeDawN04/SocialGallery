<?php
//Decimos el nombre de la base de datos
	$db_nom="bd_esport";
	//decimos que conecte utilizando los valores del registro
	$conn=mysqli_connect("localhost","root","",$db_nom);
	//si falla la conexion nos manda un error
	if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    exit;
	}
?>