<?php
include"conexion.php";
$nombre=$_POST["user"];
$pwd=$_POST["pwd"];
$enc=md5($pwd);
		$query="insert into usuarios (user,password) values ('$nombre','pwd')";
		$consulta=mysqli_query($conn,$query);
		header("location:home.php");
	?>