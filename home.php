<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sesiones</title>
</head>
<body>
<?php 
include("conexion.php");?>
<h2>Insertar usuarios</h2>
	<form action="inserts.php" method="POST" name="formulario" enctype="multipart/form-data">
		<label for="user" class="boton">Usuario:</label>
		<input type="string" name="user" required=""><br>
		<label for="pwd" class="boton">Contraseña:</label>
		<input type="string" name="pwd" required="">
		<input type="submit" name="registro" class="boton">
	</form>
<!-- Hacemos un formulario para pasar los datos del inicio de sision -->
<h2>Comprobar usuarios</h2>
	<form action="login.proc.php" method="POST" name="formulario" enctype="multipart/form-data">
		<label for="user" class="boton">Usuario:</label>
		<input type="string" name="user" required=""><br>
		<label for="pwd" class="boton">Contraseña:</label>
		<input type="string" name="pwd" required="">
		<input type="submit" name="registro" class="boton">
	</form>
</body>
</html>

