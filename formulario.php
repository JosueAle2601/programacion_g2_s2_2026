<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Estudiante</title>
</head>
<body>
	<h1>Registrar Estudiante</h1>
	<a href="index.php">Volver</a>
	<br>
	<form action="operaciones/registrar.php" method="post">
		<div>
			<label for="codigo">Código: </label>
			<input type="text" name="codigo" id="codigo" required>
		</div>

		<div>
			<label for="nombre">Nombre: </label>
			<input type="text" name="nombre" id="nombre" required>
		</div>

		<div>
			<label for="email">Email: </label>
			<input type="text" name="email" id="email" required>
		</div>

		<div>
			<button type="submit">Guardar</button>
		</div>
	</form>
</body>
</html>