<!DOCTYPE html>
<html  lang="es">
<head>
	<title>Modificar  mensajes</title>
	<meta charset='utf-8'>

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h1>Modificar el  mensaje</h1>
<?php

include 'conexiondb.php';

//Validamos que las variables están definidas y que no son null y que no son una cadena vacía
if (isset($_GET["id"]) and $_GET["id"] !="") :

	//traspasamos a variables locales, para evitar complicaciones con las comillas:
	$id = $_GET["id"];
	//Preparamos la orden SQL para recoger el campo en concreto
	$consulta = "SELECT * FROM mensajes WHERE id=$id";

	//Aqui ejecutaremos esa orden pasandola por un if para que  nos arroje fracaso o éxito
	$resultado = mysqli_query( $conexion, $consulta);
	if($resultado) {
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado )){	
		?>
<form method="post" action="ejecutar_modificaciones.php">
<div class="form-group">
    <label for="id">id</label>
    <input type="text" class="form-control" id="id" readonly name="id" value="<?php echo $columna['id'];  ?>">
  </div>
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $columna['nombre'];  ?>">
  </div>
    <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email"  name="email" value="<?php echo $columna['email'];  ?>">
  </div>
    <div class="form-group">
    <label for="mensaje">Mensaje</label>
    <textarea class="form-control" id="mensaje" name='mensaje' >
	<?php echo $columna['mensaje']; ?>
	
	</textarea>
  </div>
    <button type="submit" class="btn btn-primary mb-2">Actualizar</button>

</form>

		
		<?php 
		}
	}else{
		echo '<p class="alert alert-warning" role="alert">Error: ' . $consulta . ' ' . mysqli_error($conexion).'</p>';
		echo '<p class=" text-center"> <a class="btn btn-primary " href="index.php"> Ver lista de mensajes</a></p>';
	}
 else:// este es el else de la validación

echo '<p class=" alert alert-danger">La variable ID no está definida"> volver</a></p>';
endif;
?>	

</div>
</body>
</html>