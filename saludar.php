<?php
if (empty($_GET['nombre'])) {
	header("Location: index.html");
}	

$nombre = $_GET['nombre'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1><?php echo 'Hola '. $nombre. '!!!'?></h1>
</body>
</html>