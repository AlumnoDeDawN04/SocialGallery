<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta charset="UTF-8">
	<script type="text/javascript" src="validaciones.js"></script>
	<title>Sesiones</title>
</head>
<body>
<?php 
include("conexion.php");?>
<div class="login">
<h2>Insertar usuarios</h2>
<p class="mensaje1" id="mensaje1"></p>
	<form action="inserts_usuarios.php" method="POST" name="formulario1" enctype="multipart/form-data" onsubmit=" return Validacioni()">
		<label for="user" class="boton">Usuario:</label>
		<input type="string" name="user" id="user1"><br><br>
		<label for="pwd" class="boton">Contraseña:</label>
		<input type="string" name="pwd" id="pwd1">
		<input type="submit" name="registro" class="boton">
	</form>
</div>
<!-- Hacemos un formulario para pasar los datos del inicio de sision -->
<div class="login">
<h2>Comprobar usuarios</h2>
<p class="mensaje" id="mensaje"></p>
<form action="login.proc.php" method="POST" name="formulario2" enctype="multipart/form-data" onsubmit="return Validacion()">
	<label for="user" class="boton">Usuario:</label>
	<input type="string" name="user" id="user"><br><br>
	<label for="pwd" class="boton">Contraseña:</label>
	<input type="string" name="pwd" id="pwd">
	<input type="submit" name="registro" class="boton">
</form>
</div>
</body>
</html>

