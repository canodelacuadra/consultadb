<!DOCTYPE html>
<html lang="es">
<head>
<title>Altas empleados</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css" />
</head>

<body>
<div class='container'>
<h1>Altas de empleados</h1>
 <form method="post" action="procesar_altas_empleados.php">
  <div class="form-group">
   <label for="nombre">Nombre:</label>
   <input type="text" class="form-control" id="nombre" name="nombre" required>
  </div>
  <div class="form-group">
   <label for="apellido">Apellidos:</label>
   <input type="text" class="form-control" id="apellido" name="apellido" required>
  </div>
  <div class="form-group">
   <label for="edad">Edad:</label>
   <input type="text" class="form-control" id="edad" name="edad" required>
  </div>
  <div class="form-group">
   <label for="pais">Pais:</label>
   <input type="text" class="form-control" id="pais" name="pais" required>
  </div>
  <div class="form-group">
   <label for="especialidad">Especialidad:</label>
   <input type="text" class="form-control" id="especialidad" name="especialidad" required>
  </div>
 <button type="submit" class="btn btn-primary">Alta empleado</button>
</form>

</div>
</body>
</html>