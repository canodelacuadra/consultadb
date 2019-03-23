<!DOCTYPE html>
<html  lang="es">
<head>
	<title>Procesar altas mensajes</title>
	<meta charset='utf-8'>

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h1>Grabación del mensaje</h1>
<?php

include 'conexiondb.php';
	//traspasamos a variables locales, para evitar complicaciones con las comillas:
	$id = $_POST["id"];
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$mensaje = $_POST["mensaje"];

	//Preparamos la orden SQL
	$modificacion = "UPDATE mensajes SET nombre='$nombre', email='$email', mensaje='$mensaje' WHERE id='$id' ";

	//Aqui ejecutaremos esa orden pasandola por un if para que nos arroje fracaso o éxito
	
	if( mysqli_query( $conexion, $modificacion) ){
		echo '<p class="alert alert-primary" role="alert">El registro se ha modificado con éxito</p>';
		echo '<p class=" text-center"> <a class="btn btn-primary " href="index.php"> Ver lista de mensajes</a></p>';
	}else{
		echo '<p class="alert alert-warning" role="alert">Error: ' . $alta . ' ' . mysqli_error($conexion).'</p>';
		echo '<p class=" text-center"> <a class="btn btn-primary " href="index.php"> Ver lista de mensajes</a></p>';
	}

?>	
</div>
</body>
</html>