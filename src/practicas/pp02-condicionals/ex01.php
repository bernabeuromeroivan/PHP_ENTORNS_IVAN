<?php

$limite = 500;
$minimo = 50;

?>

<?php for($i = $minimo; $i <= $limite; $i++): ?>
    <?php if ($i % 2 == 0):?>
        <div class="numero">Numero <?= $i ?></div>
    <?php else:?>
        <div></div>
        <?php endif ?>
<?php endfor; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles1.css">
    <title>Ejercicio - 1</title>
</head>
<body>
    
</body>
</html>