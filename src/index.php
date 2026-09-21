<?php

$nombre = "Ivan";
$apellido = "Bernabeu";
$edad = "19";
$modulo = "MPO031";
$img = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKio-IyfN8MUEGMjgb_hniViDXNmXe6U4Na1chUAuGNugyt3LSM5FL820&s=10"

?>


<html>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1><?php echo $nombre ?></h1>
        <h2><?php echo $apellido ?></h2>
        <h3><?php echo $edad ?></h3>
        <p><?php echo $modulo ?></p>
        <img src="<?php echo $img ?>" alt="Imagen">
    </body>
    </html>    
</html>