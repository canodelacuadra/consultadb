<?php
// Datos de la base de datos
$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "cursos";

// creación de la conexión a la base de datos con mysqli_connect()
$conexion = mysqli_connect( $servidor, $usuario, $password,$basededatos ) or die ("No se ha podido conectar al servidor de Base de datos");
// forzar a que lea en utf-8 para que nos salgan bien las ñ
mysqli_query($conexion,"SET CHARACTER SET 'utf8'");
// Selección del a base de datos a utilizar
//$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );


?>