<?php
$hostDB = 'localhost';
$userDB = 'root';
$pwdDB = '';
$nameDB = 'estudiantes_db';

$conexDB = new mysqli($hostDB, $userDB, $pwdDB, $nameDB);

if ($conexDB->connect_error) {
    print($conexDB->connect_error);
    die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $sql = "delete from estudiantes where id = $id";
    $result = $conexDB->query($sql);
    $conexDB->close();

    if ($result) {
        header('Location: ../index.php');
    } else {
        header('Location: ../index.php?error_delete=1');
    }
    exit();
}

if (empty($_GET['id'])) {
    header('Location: ../index.php');
    exit();
}

$id = $_GET['id'];

$sql = "select * from estudiantes where id = $id";
$result = $conexDB->query($sql);

if ($result->num_rows == 0) {
    header('Location: ../index.php');
    exit();
}

$estudiante = $result->fetch_assoc();
$conexDB->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Eliminación</title>
</head>
<body>
    <h1>Confirmar Eliminación</h1>
    
    <p>
        ¿Estás seguro de que deseas eliminar al estudiante 
        <strong><?php echo $estudiante['nombre']; ?></strong> 
        (Código: <?php echo $estudiante['codigo']; ?>)?
    </p>

    <form action="borrar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $estudiante['id']; ?>">
        
        <button type="submit">Sí, eliminar</button>
        <a href="../index.php">Cancelar</a>
    </form>
</body>
</html>