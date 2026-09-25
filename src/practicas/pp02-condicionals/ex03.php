<?php

$numero = rand(0, 100);

?>

<?php if ($numero % 2 == 0):?>
        <div class="par">El <?= $numero ?> es par</div>
<?php else:?>
        <div class="impar">El <?= $numero ?> es impar</div>
<?php endif ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles3.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>