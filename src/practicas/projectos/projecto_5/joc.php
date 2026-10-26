<?php
session_start();
require_once 'dades.php';

if (!isset($_SESSION['identificat'])) {
    header('Location: login.php');
    exit();
}

if (!isset($_SESSION['nivell'])) {
    $_SESSION['nivell'] = 'facil';
    $_SESSION['index'] = 0;
}

$missatge = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $resposta = trim($_POST['resposta'] ?? '');
    $nivell = $_SESSION['nivell'];
    $index = $_SESSION['index'];

    if ($resposta === $endevinalles[$nivell][$index]['resposta']) {
        $_SESSION['index']++;

        if ($_SESSION['index'] >= count($endevinalles[$nivell])) {
            $_SESSION['index'] = 0;
            if ($nivell === 'facil') $_SESSION['nivell'] = 'mitja';
            elseif ($nivell === 'mitja') $_SESSION['nivell'] = 'dificil';
            else {
                header('Location: final.php');
                exit();
            }
        }
    } else {
        $missatge = "Incorrecte, torna-ho a intentar!";
    }
}

$nivell = $_SESSION['nivell'];
$index = $_SESSION['index'];
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Joc</title>
</head>
<body>
    <h2>Hola, <?= ($_SESSION['usuari']) ?>!</h2>
    <h3>Nivell: <?= ($nivell) ?> (Pregunta <?= $index + 1 ?>)</h3>
    
    <p><?= $endevinalles[$nivell][$index]['pregunta'] ?></p>

    <?php if ($missatge): ?>
        <p style="color:red;"><?= $missatge ?></p>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="resposta" required autocomplete="off">
        <button type="submit">Enviar</button>
        <button><a href="login.php">Reiniciar</a></button>
    </form>
</body>
</html>