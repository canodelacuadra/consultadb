<!DOCTYPE html>
<html  lang="es">
<head>
<title>Procesar altas empleados</title>
<meta charset='utf-8'>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h1>Procesar Altas empleados</h1>
<?php
include 'conexiondb.php';
//Validamos que las variables están definidas y que no son null y que no son una cadena vacía
if (isset($_POST["nombre"], $_POST["apellido"], $_POST["edad"], $_POST["pais"], $_POST["especialidad"]) and $_POST["nombre"] !="" and $_POST["apellido"]!="" and $_POST["edad"]!="" and $_POST["pais"]!="" and $_POST["especialidad"]!="" ):
//traspasamos a variables locales, para evitar complicaciones con las comillas:
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$pais = $_POST['pais'];
$especialidad = $_POST['especialidad'];
//Preparamos la orden SQL
$alta = "INSERT INTO empleados (id,nombres,apellido,edad,pais,especialidad) VALUES ('0','$nombre','$apellido','$edad', '$pais', '$especialidad')";
//Aqui ejecutaremos esa orden pasandola por un if para que nos arroje fracaso o éxito

if( mysqli_query( $conexion, $alta) ){
echo '<p class="alert alert-primary" role="alert">El registro se ha creado felizmente</p>';
echo '<p class=" text-center"> <a class="btn btn-primary " href="empleados.php"> Ver lista de empleados</a></p>';
}else{
echo '<p class="alert alert-warning" role="alert">Error: ' . $alta . ' ' . mysqli_error($conexion).'</p>';
echo '<p class=" text-center"> <a class="btn btn-primary " href="empleados.php"> Ver lista de empleados</a></p>';
}
else: // este es el else de la validación
echo '<p class=" alert alert-danger">Por favor, complete correctamente  el formulario <a class="btn btn-primary " href="alta_empleado.php"> volver</a></p>';
endif;
?>
</div>
</body>