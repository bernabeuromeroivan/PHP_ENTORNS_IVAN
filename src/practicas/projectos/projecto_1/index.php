<?php

$titulo = "Getafe contra Valencia C. F.";
$equipo1 = "assets/valencia.png";
$nom_equipo1 = "Valencia C.F.";
$res_equipo1 = "3";
$fecha_p1 = "6/12";
$nom_equipo2 = "Getafe";
$res_equipo2 = "0";
$equipo2 = "assets/getafe.png";
$foto1 = "assets/valencia_getafe1.jpg"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecto - 1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1><?=$titulo?></h1>
        </header>
        <div class="contenido">
            <div class="borde1">
                <div class="equipos">
                    <div class="valencia">
                        <img src="<?=$equipo1?>" alt="">
                        <p><?=$nom_equipo1?></p>
                        <p><?=$res_equipo1?></p>
                    </div>
                    <div class="getafe">
                        <img src="<?=$equipo2?>" alt="">
                        <p><?=$nom_equipo2?></p>
                        <p><?=$res_equipo2?></p> 
                    </div>
                </div>
                <div class="fecha">
                    <p>Fin</p>
                    <p><?=$fecha_p1?></p>
                    <img src="<?=$foto1?>" alt="">
                </div>
            </div>
            <div class="borde2">
                <div class="equipos">
                    <div class="valencia">
                        <img src="<?=$equipo1?>" alt="">
                        <p><?=$nom_equipo1?></p>
                        <p><?=$res_equipo1?></p>
                    </div>
                    <div class="getafe">
                        <img src="<?=$equipo2?>" alt="">
                        <p><?=$nom_equipo2?></p>
                        <p><?=$res_equipo2?></p> 
                    </div>
                </div>
                <div class="fecha">
                    <p>Fin</p>
                    <p><?=$fecha_p1?></p>
                    <img src="<?=$foto1?>" alt="">
                </div>
            </div>
        </div>
            <div class="borde3">
                <div class="equipos">
                    <div class="valencia">
                        <img src="<?=$equipo1?>" alt="">
                        <p><?=$nom_equipo1?></p>
                        <p><?=$res_equipo1?></p>
                    </div>
                    <div class="getafe">
                        <img src="<?=$equipo2?>" alt="">
                        <p><?=$nom_equipo2?></p>
                        <p><?=$res_equipo2?></p> 
                    </div>
                </div>
                <div class="fecha">
                    <p>Fin</p>
                    <p><?=$fecha_p1?></p>
                    <img src="<?=$foto1?>" alt="">
                </div>
            </div>
    </div>
</body>
</html>