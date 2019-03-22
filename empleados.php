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
// forzar a que lea en utf-8 para que nos salgan bien las ñ
mysqli_query($conexion,"SET CHARACTER SET 'utf8'");
// Selección del a base de datos a utilizar
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
// establecer y realizar consulta. guardamos en variable.
$consulta = "SELECT * FROM empleados";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

// Motrar el resultado de los registro de la base de datos
?>
<table class='datos'>
<tr>
<th>id</th>
<th>nombres</th>
<th>apellido</th>
<th>edad</th>
<th>pais</th>
<th>especialidad</th>
</tr>
<?php
// Bucle while que recorre cada registro y muestra cada campo en la tabla.
while ($columna = mysqli_fetch_array( $resultado )){
?>
<tr>
<td><?php echo $columna['id'];?></td>
<td><?php echo $columna['nombres'];?></td>
<td><?php echo $columna['apellido'];?></td>
<td><?php echo $columna['edad']; ?></td>
<td><?php echo $columna['pais']; ?></td>
<td><?php echo $columna['especialidad']; ?></td>
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