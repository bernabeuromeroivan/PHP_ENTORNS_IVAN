<?php

$titulo = "MOP31. Pp01 1. Primers passos a PHP";
$logo = "assets/logo-fpllefia.png";
$imagen = "assets/foto.jpg";
$nombre = "Ivan Bernabeu";
function miNombre() {
    echo "Ivan Bernabeu Romero";
}
$desc = "Hola, soy Ivan Bernabeu Romero, tengo 19 años y vivo en Badalona. Me interesa bastante el mundo de la tecnología y la programación, aunque todavía estoy aprendiendo y mejorando mis conocimientos. Me considero una persona tranquila, responsable y con ganas de aprender cosas nuevas. Espero poder seguir avanzando durante este curso, aprender mucho de la asignatura y llevarme una buena experiencia.";
phpinfo();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PP01</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <img src="<?php echo $logo ?>" alt="">
            <h1><?php echo $titulo ?></h1>        
        </header>
        <div class="texto">
            <div class="imagen">
                <img src="<?php echo $imagen ?>" alt="">
                <p><?php echo $nombre ?></p>
            </div>
            <div class="txt">
                <p><?php echo $desc ?></p>
            </div>
        </div>  
        <footer>
            <p><?php miNombre(); ?></p>
            <span>La fecha de hoy es <?php echo date("y/m/d")?></span>
        </footer>
    </div>
</body>
</html>