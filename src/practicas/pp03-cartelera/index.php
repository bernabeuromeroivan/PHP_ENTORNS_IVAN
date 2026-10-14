<?php

require_once 'pelicules.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cartelera</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="assets/ocine.png" alt="">
        </div>
        <nav>
            <ul>
                <li>CARTELERA</li>
                <li>BAR</li>
                <li>FIDELITY</li>
                <li>SERVICIOS</li>
                <li>OTROS CINES</li>
            </ul>
        </nav>
    </header>
    <h1>Cartellera de Cinema</h1>
    <div class="cartellera">
        <?php foreach ($pelicules as $p): ?>
            <div class="pelicula">
                <div class="imatge-box">
                    <img src="<?= $p['imatge'] ?>" alt="<?= $p['titol'] ?>">
                    <div class="info-hover">
                        <p><strong>Horaris:</strong></p>
                        <?php foreach ($p['horaris'] as $horari): ?>
                            <span class="horari"><?= $horari ?></span>
                        <?php endforeach; ?>
                        <div class="botones">
                            <p><a href="<?= $p['trailer'] ?>" target="_blank" style="color: #4da6ff;">Veure Tràiler</a></p>
                            <p><a href="detall.php?id=<?= $p['id'] ?>" style="color: #4da6ff;">Més Detalls</a></p>
                        </div>
                    </div>
                </div>
                <p><strong>Durada:</strong> <?= $p['durada'] ?></p>
                <p><strong>Edat:</strong> <?= $p['qualificacio'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>