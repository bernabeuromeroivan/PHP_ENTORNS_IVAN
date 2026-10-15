<?php
require_once 'pelicules.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 1;

$pelicula = null;
foreach ($pelicules as $p) {
    if ($p['id'] == $id) {
        $pelicula = $p;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="detall.css">
    <title>Detalls</title>
</head>
<body>
    <a href="index.php">← Tornar a la cartellera</a>
    <h1><?= $pelicula['titol'] ?></h1>
    <div>
        <div class="col-esquerra">
            <img src="<?= $pelicula['imatge'] ?>" alt="<?= $pelicula['titol'] ?>">
            <p><a href="<?= $pelicula['trailer'] ?>" target="_blank" style="color: #4da6ff;">Veure Tràiler</a></p>
        </div>
        <div class="col-dreta">
            <p><?= $pelicula['sinopsi'] ?></p>
            <p><strong>Durada:</strong> <?= $pelicula['durada'] ?></p>
            <p><strong>Director:</strong> <?= $pelicula['director'] ?></p>
            <p><strong>Actors:</strong> <?= implode(', ', $pelicula['repartiment']) ?></p>
            <p><strong>Qualificació:</strong> <?= $pelicula['qualificacio'] ?></p>
            <p><strong>Gènere:</strong> <?= $pelicula['genere'] ?></p>
            <p><strong>Horaris:</strong><br><br>
                <?php foreach ($pelicula['horaris'] as $horari): ?>
                    <span class="horari"><?= $horari ?></span>
                <?php endforeach; ?>
            </p>
        </div>
    </div>   
</body>
</html>