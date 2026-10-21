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
        <div class="encargos">
            <p>Total de encarrecs: <?= count($encarrecs) ?></p>
            <p>Hores estimades: <?= array_sum(array_column($encarrecs, 'hores')) ?></p>            
        </div>
        <div class="subtitulo">
            <span>Projectes actius</span>
            <h2>Llistat d'encarrecs</h2>            
        </div>
        <div class="cards">
            <?php foreach ($encarrecs as $id=>$e):?>
                <div class="card">
                    <div class="card-header">
                        <span class="badge-pendent"><?= $e['estat'] ?></span>
                        <span class="card-time"><?= $e['hores'] ?> h</span>
                    </div>
                    <h3 class="card-title"><?= $e['titol'] ?></h3>
                    <div class="card-client">Client: <strong><?= $e['client'] ?></strong></div>
                    <div class="card-tags"><?= implode(' · ', $e['etiquetes']) ?></div>
                    <div class="card-actions">
                        <button class="btn-primary"><a href="detall.php?id=<?= $id ?> ">Veure detall</a></button>
                        <button class="btn-danger">Eliminar</button>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>
</html>