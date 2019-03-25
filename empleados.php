<!DOCTYPE html>
<html  lang="es">
<head>
<title>title</title>
<meta charset='utf-8' />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css" />
</head>
<body>

<div class="container">
<?php 
include 'conexiondb.php';
// establecer y realizar consulta. guardamos en variable.
$consulta = "SELECT * FROM empleados";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

// Motrar el resultado de los registro de la base de datos
?>
<table class="table">
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
<a class="btn btn-success" href="altaempleado.php">añadir empleado</a>
</div>

</body>
</html>