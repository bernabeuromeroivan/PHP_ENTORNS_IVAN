<?php
session_start();
$id = $_GET['id'];
$e = $_SESSION['encarrecs'][$id];
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Detall de l'Encàrrec - <?= ($e['titol']) ?></title>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <span class="badge-pendent"><?= ($e['estat']) ?></span>
            <span class="card-time"><?= $e['hores'] ?> h</span>
        </div>
        <h3 class="card-title"><?= ($e['titol']) ?></h3>
        <div class="card-client">Client: <strong><?= ($e['client']) ?></strong></div>
        <div class="card-tags"><?= (implode(' · ', $e['etiquetes'])) ?></div>
    </div>
    <br>
    <a href="index.php" class="btn-primary" style="text-decoration: none; display: inline-block;">Tornar</a>
</body>
</html>