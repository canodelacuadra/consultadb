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

//Validamos que las variables están definidas y que no son null y que no son una cadena vacía
if (isset($_POST["nombre"], $_POST["email"], $_POST["mensaje"]) and $_POST["nombre"] !="" and $_POST["email"]!="" and $_POST["mensaje"]!="" ):

	//traspasamos a variables locales, para evitar complicaciones con las comillas:
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$mensaje = $_POST["mensaje"];

	//Preparamos la orden SQL
	$alta = "INSERT INTO mensajes (id,nombre,email,mensaje) VALUES ('0','$nombre','$email','$mensaje')";

	//Aqui ejecutaremos esa orden pasandola por un if para que nos arroje fracaso o éxito
	
	if( mysqli_query( $conexion, $alta) ){
		echo '<p class="alert alert-primary" role="alert">El registro se ha creado felizmente</p>';
		echo '<p class=" text-center"> <a class="btn btn-primary " href="index.php"> Ver lista de mensajes</a></p>';
	}else{
		echo '<p class="alert alert-warning" role="alert">Error: ' . $alta . ' ' . mysqli_error($conexion).'</p>';
		echo '<p class=" text-center"> <a class="btn btn-primary " href="index.php"> Ver lista de mensajes</a></p>';
	}
 else:// este es el else de la validación

echo '<p class=" alert alert-danger">Por favor, complete correctamente  el formulario <a class="btn btn-primary " href="altas_mensajes.php"> volver</a></p>';
endif;
?>	
</div>
</body>
</html>