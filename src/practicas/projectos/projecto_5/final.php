<?php
session_start();

if (!isset($_SESSION['identificat'])) {
    header('Location: joc.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reiniciar'])) {
    header('Location: login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Enhorabona! - Escape Room</title>
</head>
<body>
    <h1>🎉 Moltes felicitats, <?= ($_SESSION['usuari']) ?>! 🎉</h1>
    <p>Has superat amb èxit tots tres nivells i has completat l'Escape Room!</p>

    <form method="POST">
        <button type="submit" name="reiniciar">Tornar a jugar (Reiniciar)</button>
    </form>
</body>
</html>