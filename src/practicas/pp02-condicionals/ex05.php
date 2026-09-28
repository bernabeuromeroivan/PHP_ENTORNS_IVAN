<?php
$temperaturas = [rand(-10, 45), rand(-10, 45), rand(-10, 45), rand(-10, 45), rand(-10, 45), rand(-10, 45), rand(-10, 45), rand(-10, 45), rand(-10, 45), rand(-10, 45)];
$res = 0;
$media = 0;

?>

<h1>Temperaturas</h1>

<?php for ($i = 0; $i < 10; $i++): ?>
    <?php if ($temperaturas[$i] < 10):?>
        <div class="frio"><?= $temperaturas[$i] ?> Hace frio</div>
    <?php elseif($temperaturas[$i] > 10 && $temperaturas[$i] < 25):?>
        <div class="bien"><?= $temperaturas[$i] ?> Temperatura Suau</div>
    <?php else:?>
        <div class="calor"><?= $temperaturas[$i] ?> Hace calor</div>
    <?php endif ?>
    <?php $res += $temperaturas[$i]; ?>
<?php endfor; ?>

<?php $media = $res / 10; ?>
<div class="media">La temperatura media es de: <?= $media ?></div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles5.css">
    <title>Ejercicio - 5</title>
</head>
<body>
    
</body>
</html>