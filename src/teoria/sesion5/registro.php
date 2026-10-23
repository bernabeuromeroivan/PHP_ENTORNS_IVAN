<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['username'] = $_POST['name'];
}else{
    header('Location: mostrar.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Sesión</title>
</head>
<body>

    <form action="" method="get">
        <label for="name">Tu nombre: </label>
        <input type="text" id="name" name="name">

        <input type="submit" value="Enviar">
    </form>

</body>
</html>