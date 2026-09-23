<?php

//include "validar_numero.php";

if (empty($_POST['numero'])) {
	header("Location: index.html");
}	

$numero = $_POST['numero'];

//$validarNumero = new ValidarNumero($_POST['numero']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Validar</title>
	<link rel="stylesheet" href="css/styles.css"
</head>
<body>
	<h1>Validar número</h1>
	<a href="index.html">Volver</a>
	<br>

	<?php
	$modulo = $numero % 2;

	if ($modulo == 0) {
		echo '<p class="green">El número '. $numero. ' es par<p>';
	} else {
		echo "<p>El número $numero es impar<p>";
	}
	?>

	<!--
	<p><?php //echo $validarNumero->getMsg(); ?></p> -->
	
</body>
</html>