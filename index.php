<!DOCTYPE html>
<html  lang="es">
<head>
	<title>title</title>
	<meta charset='utf-8' />
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css" />
	</head>
<body>
<div class="container">	
<h1>Aplicación libro de visitas</h1>
<p><a class="btn btn-primary" href="altas_mensajes.php">Añadir Mensaje</a></p>
<?php 
	include 'conexiondb.php';
	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT * FROM mensajes ORDER BY id DESC";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// Motrar el resultado de los registro de la base de datos
	?>
	<table class='table'>
	<tr>
		<th>ID</th>
		<th>Nombre </th>
		<th>Email</th>
		<th>Mensaje</th>
	</tr>
	<?php
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado )){
	?>
		<tr>
			<td><?php echo $columna['id'];?></td>
			<td><?php echo $columna['nombre'];?></td>
			<td><?php echo $columna['email'];?></td>
			<td><?php echo $columna['mensaje']; ?></td>
		</tr>
	<?php
	}
	?>
	
	</table>
	
	<?php
	mysqli_close( $conexion );
?>

	</div>

</body>
</html>


