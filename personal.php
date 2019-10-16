<!DOCTYPE html>
<html>
<head>
	<!-- Lo primero que tenemos que hacer es hacer que mire el archivo con los estilos y hacer que ejecute la pagina con UTF-8 -->
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta charset="UTF-8">
	<title>Imagenes</title>
</head>
<body>
	<!-- Ahora debemos hacer que ejecute la conexion (redirigiendo a la pagina que la hace)-->
	<?php 
	session_start();
	if (!$_SESSION['id']) {
		header("location:home.php");
	}else{
	include "conexion.php";
	?>
	<!-- Hacemos un div que contiene el formulario para introducir nuevas imagenes -->
	<div class="form">
	<h1 class="titulo">Inserte datos</h1>
	<form action="inserts.php" method="POST" name="formulario" enctype="multipart/form-data">
		<!-- Habiendo redirigido antes a la pagina donde se redigiran los datos para poder trabajar sobre ellos
			Ahora solo debemos poner los datos que queremos saber dandoles un nombre 
		 -->
		<label for="titulo" class="boton">Titulo de su imagen</label><br>
		<input type="string" class="boton" name="titulo" required=""><br>
		<label for="imagen" class="boton">Introduzca su imagen:</label><br>
		<input type="file" name="imagen" class="boton" required=""><br><br>
		<input type="submit" name="imagen" class="boton">
	</form>
	</div>
	<!-- Una vez finalizado el formulario anterior, hacemos otro para seleccionar el orden en el cual se mostraran los datos
		de la base de datos  -->
	<br><br>
	<div class="largo">
	<form action="personal.php" method="POST">
		<!-- Lo redirigmos a la misma pagina ya que no usaremos estos datos en mas sitios-->
		<label for="orden" class="or">Seleccione el orden en el que quiere ver las imagenes:</label>
			<select name="ordenado">
  				<option value="data">Data</option> 
  				<option value="titol" selected>Titol</option>
  				<option value="nom">Nom</option>
			</select>	
			<br><br>
			<input type="submit" name="ordencito" class="or">
	</form>
	</div>
	<!-- Ahora, si la pagina no ha cogido ningun valor (primer inicio, donde no hay nada seleccionado), por defecto se pondra vacio 
		 para que no haya errores de variables vacias
		 - Si la variable no esta creada se crea vacia -->
	<?php
	if (!isset($_POST["ordenado"])) {
		$orden='';
	}else{
		//Si el usuario ha seleccionado algo, este se asigna a una variable
		$orden=$_POST['ordenado'];
	}
	//Hacemos la consulta para ver los datos
	$consulta="select * FROM galeria where usuario = ".$_SESSION['id'] .";";
	//Si $orden (orden seleccionado) no es nada (ya hay algo seleccionado), este ejecuta una consulta personalizada
	//dependiendo del valor que le hayamos asignado
	if ($orden!="") {
		$consulta="select * FROM galeria where usuario = ".$_SESSION['id'] ." order by $orden asc;";
	}
	//Ejecutamos la consulta
		$exe=mysqli_query($conn,$consulta);
		?>
		<div class="todos">
		<?php
		//ahora, mientras haya consultas devueltas, haremos un div por cada resultado
 		while ($casos=mysqli_fetch_array($exe)) {
 			?>
 			<div class="uno">
 				<!-- Ahora mostramos los datos -->
	 			<div class="nombre">
	 				<?php 
	 					echo "Nom: ";
	 					echo $casos["nom"];
	 				?>
	 			<br>
	 			</div>
	 			<div class="imagen">
	 				<?php 
	 					$foto=$casos["ruta"];?>
	 					<div class="foto">
	 					<?php
	 					echo "<img src = 'fotos/$foto' width='300%' height='200px'>";
	 					?>
	 					</div>
	 					<?php
	 				?>
	 			</div>
	 			<div class="fecha">
	 				<?php 
	 					echo $casos["data"];
	 				?>
	 			</div>
	 		</div>
 			<?php
		}
		} 
		?>
		<a href="desconexion.php">Salir de la sesion</a>
			</div>
		</div>
</body>
</html><br><br>

