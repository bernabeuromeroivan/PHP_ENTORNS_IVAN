<?php

$lista = [1,2,3,4,"Albert"];

foreach ($lista as $elemento) {
    echo $elemento;
}

include "index.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teoria - 3</title>
</head>
<body>
    <?php

    if(isset($_GET["id"])){
        echo ($_GET['id']);
    }

    ?>
</body>
</html>