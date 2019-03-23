<!DOCTYPE html>
<html  lang="es">
<head>
	<title>Borrar  mensajes</title>
	<meta charset='utf-8'>

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h1>Borrar el  mensaje</h1>
<?php

include 'conexiondb.php';

//Validamos que las variables están definidas y que no son null y que no son una cadena vacía
if (isset($_GET["id"]) and $_GET["id"] !="") :

	//traspasamos a variables locales, para evitar complicaciones con las comillas:
	$id = $_GET["id"];
	//Preparamos la orden SQL
	$baja = "DELETE FROM mensajes WHERE id=$id";

	//Aqui ejecutaremos esa orden pasandola por un if para que nos arroje fracaso o éxito
	
	if( mysqli_query( $conexion, $baja) ){
		echo '<p class="alert alert-primary" role="alert">El registro ha sido borrado con éxito</p>';
		echo '<p class=" text-center"> <a class="btn btn-primary " href="index.php"> Ver lista de mensajes</a></p>';
	}else{
		echo '<p class="alert alert-warning" role="alert">Error: ' . $baja . ' ' . mysqli_error($conexion).'</p>';
		echo '<p class=" text-center"> <a class="btn btn-primary " href="index.php"> Ver lista de mensajes</a></p>';
	}
 else:// este es el else de la validación

echo '<p class=" alert alert-danger">La variable ID no está definida"> volver</a></p>';
endif;
?>	
</div>
</body>
</html>