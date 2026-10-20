<?php
require_once 'dades.php';

$hores = $_GET['hores'] ?? 1;

$encarrecTrobat = null;
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Encàrrecs</title>
</head>
<body>
    <div class="container">
        <?php include "includes/header.php"; ?>

        <section class="banner-section">
            <div class="banner-content">
                <span class="banner-tag">AGÈNCIA WEB · TAULER DE PROJECTES</span>
                <h2 class="banner-title">Gestor d'encàrrecs</h2>
                <p class="banner-description">Consulta la feina de l'equip, revisa les hores previstes i registra encàrrecs nous.</p>
            </div>
            <button class="banner-button">+ Nou encàrrec</button>
        </section>
        <?php foreach ($encarrecs as $e):?>
            <p>Encarrecs: <?= count($encarrecs) ?></p>
            <p>hores: <?= array_sum(array_column($encarrecs, 'hores')) ?></p>
        <?php endforeach ?>
    </div>
</body>
</html>