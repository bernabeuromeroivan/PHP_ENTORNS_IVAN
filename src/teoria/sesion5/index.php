<?php

session_start();

echo 'Hola session';

$_SESSION['edad'] = 19;

echo $_SESSION['edad'];

echo $_SESSION['nombre'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teroia - Sesiones</title>
</head>
<body>
    
</body>
</html>