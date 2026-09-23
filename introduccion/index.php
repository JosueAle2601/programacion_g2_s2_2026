<?php
echo "Hola mundo";
echo "<br>";
echo 2+5;

$nombre = "Pepe";
$apellido = 'Gomez';
$edad = 22;
$mayorEdad = TRUE;
$sueldo = 1250.50;
$ejemplo = null;
$numeros = array();
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$ejemplos = [1, "ascv", TRUE, 12.5, NULL, []];

echo '<br>' . $numeros[3] . '<br>';

$persona = [
	"nombre" => "Pepe",
	"edad" => 34,
	"jobs" => ["Cine", "Libros", "Música"]
];

echo '<br>' . $persona['nombre'] . '<br>';
echo '<br>' . $persona['edad'] . '<br>';
echo '<br>' . $persona['jobs'][0] . '<br>';

echo '<br> For <br>';

$length = count($numeros);

for ($i = 0; $i < $length; $i++) {
	if ($numeros[$i] % 2 == 0) {
		echo $numeros[$i] . ' es par <br>';
	} else {
		echo $numeros[$i] .' es inpar <br>';
	}
}

$estado = TRUE;
$x = 0;

while ($estado) {
	$numero = $numeros[$x];

	if ($numero % 2 == 0) {
		echo $numero . ' es par <br>';
	} else {
		echo $numero . ' es impar <br>';
	}
	$x = $x + 1;

	if ($x >= $length) {
		$estado = FALSE;
	}
}

echo '<br>';
$x = 0;

while ($x < $length) {
	$numero = $numeros[$x];

	if ($numero % 2 == 0) {
		echo $numero . ' es par <br>';
	} else {
		echo $numero . ' es impar <br>';
	}
	$x = $x + 1;
}

echo '<br>';
$x = 0;

do {
	$numero = $numeros[$x];

	if ($numero % 2 == 0) {
		echo $numero . ' es par <br>';
	} else {
		echo $numero . ' es impar <br>';
	}
	$x++;
} while ($x < $length);

echo '<br>';

foreach ($numeros as $i => $num) {
	if ($numero % 2 == 0) {
		echo $i . $num . ' es par <br>';
	} else {
		echo $i . $num . ' es impar <br>';
	}
	$x++;
}
echo '<br>';

$numero = 100;
if ($numero < 50) {
	echo 'menor a 50';
} elseif ($numero >= 50 || $numero < 70) {
	echo 'entre 50 y 69';
} else {
	echo 'entre 70 y 100';
}

echo '<br>';
echo 12 == "12" ? "True" : "False"; //evalúa valor
echo '<br>';
echo 12 === "12" ? "True" : "False"; //evalúa tipo de dato

//Switch:

$categoria = "a";

switch ($categoria) {
	case "a":
		break;
	case "b":
		break;
	case "c":
		break;
	default:
		break;
}

function tipo_numero($numero) {
	if ($numero % 2 == 0) {
		echo $numero . ' es par <br>';
	} else {
		echo $numero . ' es impar <br>';
	}
}

echo '<br>';
tipo_numero(100);

function get_tipo_numero($numero): string {
	if ($numero % 2 == 0) {
		return $numero . ' es par <br>';
	} else {
		return $numero . ' es impar <br>';
	}
}

echo '<br>'. get_tipo_numero(200);