<!DOCTYPE html>
<html  lang="es">
<head>
	<title>title</title>
	<meta charset='utf-8' />
	<link rel="stylesheet" href="style.css" />
<body>
	
<?php 
	// Datos de la base de datos
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "cursos";
	
	// creación de la conexión a la base de datos con mysqli_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT * FROM mensajes";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// Motrar el resultado de los registro de la base de datos
	?>
	<table>
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
	
</head>
</body>
</html>


