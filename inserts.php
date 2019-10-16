<?php
//incluimos la conexion
	include "conexion.php";
	session_start();
//establecemos la hora (que utilizaremos mas tarde)
	$dia=date('Y-m-d');
	//Cogemos los datos de inicio.php, titulo, tamaño(para que no exceda el tamaño
	//, nombre(para que no se repitan), tipo(para que no de error en introducirlas) 
	$imagen=$_POST['titulo'];
	$rutaa=$_FILES["imagen"]["name"];
	$ruta="/".$_FILES["imagen"]["name"];
	$tamanio=$_FILES["imagen"]["size"];
	$tipo=$_FILES["imagen"]["type"];
	$temp=$_FILES["imagen"]["tmp_name"];
	//He comentado un var_dumb que sirve para saber los tipos de datos y lo que devuelve
	//var_dump($_FILES["imagen"]);
	//mostramos las variables 
	echo "$tamanio";
	echo "$dia<br>";
	echo "$imagen<br>";
	echo "$ruta<br>";
	//Lo siguiente es guardar la ruta con el nombre para poder cambiar la imagen de lugar
	$path="fotos/".basename($rutaa);
	//a continuacion, ejecutamos el comando para que mueva la imagen de sitio
	if (move_uploaded_file($temp,$path)) {
	}else{
		//si no funciona enviara un mensaje
			echo "La imagen no se ha movido de sitio";
		}
	//si la imagen ocupa mas de los bytes permitidos, no deja entrar la imagen
	//----------------------Per asegurar-se de que la imatge no es repeteix, el nom de la imatge es uniqie en la base de dades---------------
	//Ahora hacemos una consulta que mira los datos ya insertados dentro de la base de datos y hacemos su consulta
	$compro="select ruta from galeria";
	$concompro=mysqli_query($conn,$compro);
	//compara que no haya ninguno ya insertado con los mismos valores
		while ($compimagen=mysqli_fetch_array($concompro)) {
			if ($compimagen[0]==$ruta) {
			//si ya hay alguno metido, sale del programa sin insertar nada
				header("location: inicio.php");
				exit();
				echo "Esta repetida";
				echo "$ruta";
			}else{
				echo "$compimagen[0]";
				echo "$ruta";
				echo "No esta repetida";
				echo "$ruta";
			}
		}
	if ($tamanio<2500000) {
		//si la imagen no es de ninguno de estos tipos, no deja introducirla
		if ($tipo == "image/jpeg" or $tipo == "image/jpg" or $tipo == "image/gif" or $tipo == "image/png") {
			//ganeramos la consulta
			$id=$_SESSION['id'];
			$sql_txt="INSERT INTO galeria (nom,ruta,data,usuario) values ('$imagen','$ruta','$dia','$id')";
			$sql_query=mysqli_query($conn,$sql_txt);
			//mostramos la consulta y query
			echo "$sql_txt";
			echo "$sql_query";
		}
	}else{
		//mensaje de error si la imagen ocupa mucho
		echo "Selecciona una imagen con el tamaño mas bajo";
	}	
	//vuelve a la pagina de inicio cuando acabe lo necesario
	header("location: inicio.php");
?>
