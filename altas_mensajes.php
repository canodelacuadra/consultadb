<!DOCTYPE html>
<html  lang="es">
<head>
	<title>Formulario Mensajes</title>
	<meta charset='utf-8'>

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h1>Deja tu mensaje</h1>
	<form  method="post" action="procesar_altas_mensaje.php">
		<div class="form-group">
			<label for="nombre">Introduce tu nombre</label>
			<input class="form-control" id='nombre' type="text" name="nombre">
		</div>

		<div class="form-group">
			<label for="email"> Introduce tu correo</label>
			<input class="form-control" type="email" name="email" >
		</div>
		<div class="form-group">
			<label for="mensaje">Déjanos un mensaje</label>
			<textarea class="form-control"  name="mensaje" id="mensaje">
			</textarea>
		</div>
		<input type="submit" class="btn btn-primary" value="Enviar mensaje">

	</form>
</div>
</body>
</html>
