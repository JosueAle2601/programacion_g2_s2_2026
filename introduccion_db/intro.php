<?php
$hostDB = 'localhost';
$userDB = 'root';
$pwdDB = '';
$nameDB = 'estudiantes_db';

$conexDB = new mysqli($hostDB, $userDB, $pwdDB, $nameDB);

if($conexDB->connect_error) {
	print($conexDB->connect_error);
	die(); //exit()
}

echo 'Conexión exitosa!<br>';

$sql = "insert into estudiantes (codigo, nombre, email) values ('4444', 'Margarita', 'margo@test.com')";

$resultDB = $conexDB->query($sql);

if ($resultDB) {
	echo 'Datos guardados!<br>';
}

$sql = "select * from estudiantes";
$resultDB = $conexDB->query($sql);
if ($resultDB->num_rows > 0) {
	while($row = $resultDB->fetch_assoc()) {
		echo "ID: ".$row["id"];
		echo "Código: ".$row["codigo"];
		echo "Nombre: ".$row["nombre"];
		echo "Email: ".$row["email"];
		echo "<br>";
	}
}

$sql = "delete from estudiantes where id>=8";
$resultDB = $conexDB->query($sql);
if ($resultDB) {
	echo "Datos eliminados! <br>";
}

$sql = "update estudiantes set ";
$sql .= " nombre = 'Gabriel Agreste', ";
$sql .= " email = 'gabriel.agreste@agreste.com' ";
$sql .= " where id = 3";
$resultDB = $conexDB->query($sql);
if ($resultDB) {
	echo 'Datos actualizados! <br>';
}


$conexDB->close();