<?php
	session_start();
	//sesion destroy elimina los datos de la sesion para salir de la sesion
	session_destroy();
	header("location:home.php")
?>