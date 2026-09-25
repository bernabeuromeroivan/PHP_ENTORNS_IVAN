<?php
$numero1 = 1;
$numero2 = 1;
?>

<?php for ($i = $numero1; $i <= 10; $i++): ?>
    <?php for ($j = $numero2; $j <= 10; $j++): ?>
        <?php $res = $i * $j; ?>
        <div class="tabla"><?= $i ?> x <?= $j ?> = <?= $res ?></div>
    <?php endfor; ?>
<?php endfor; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles2.css">
    <title>Ejercicio - 2</title>
</head>
<body>

</body>
</html>