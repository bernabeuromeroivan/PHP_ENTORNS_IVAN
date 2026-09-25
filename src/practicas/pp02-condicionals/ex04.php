<?php

$numero = rand(1, 100);

?>

<div class="rand">Numero Generado: <?= $numero ?></div>
<div class="rand">Divisores de: <?= $numero ?></div>
<?php $div = $numero % 2; ?>
<?php if ($numero == 1 && $numero % $numero == 0):?>
        <div class="rand">El <?= $numero ?> es primo</div>
<?php else:?>
        <div class="rand">El <?= $numero ?> no es primo</div>
<?php endif ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles4.css">
    <title>Ejercicio - 4</title>
</head>
<body>
    
</body>
</html>