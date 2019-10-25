<?php
include "conexion.php";
if (!$_POST["user"] && !$_POST["pwd"]) {
	header("location:home.php");
}else{
$name=$_POST["user"];
$pwd=$_POST["pwd"];
$encript=md5($pwd);
$consulta="select * from usuarios where password='$encript' and user='$name'";
//!empty mira que no este vacio
//mysqli_num_rows($consulta)) nos serviria para ver que no este vacio.
$consulta=mysqli_query($conn,$consulta);
if(mysqli_num_rows($consulta) && !empty($consulta)){
	echo "El usuario es correcto";
	$row=mysqli_fetch_array($consulta);
	session_start();
	$_SESSION['id']=$row['id'];
	$_SESSION['login_user']=$name;
	echo "$name";
	header("location:personal.php");
}else{
	echo "El usuario es incorrecto";
	echo "<a href='home.php'>Volver a inicio</a>";
}
}
?>