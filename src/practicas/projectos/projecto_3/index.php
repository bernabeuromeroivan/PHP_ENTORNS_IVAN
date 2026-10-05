<?php

$tecno = ["Totes", "PHP", "JavaScript", "React", "HTML/CSS", "Docker", "BBDD", "Projectes"];

$targetes = [
    [
        "titol" => "Variables",
        "img" => "assets/img1.png",
        "descripcio" => "Serveixen per guardar informació que després podem utilitzar.",
        "tecno" => "PHP"
    ],
    [
        "titol" => "If / else",
        "descripcio" => "Permet executar un codi o un altre segons una condició.",
        "tecno" => "PHP",
    ],
    [
        "titol" => "Manipular el DOM",
        "descripcio" => "Permet modificar el contingut de la pàgina des de JavaScript.",
        "tecno" => "JavaScript",
    ],
    [
        "titol" => "Array i forEach",
        "descripcio" => "Permet recórrer tots els elements d'un array.",
        "tecno" => "JavaScript",
    ],
    [
        "titol" => "Components",
        "descripcio" => "Permeten dividir la interfície en peces reutilitzables.",
        "tecno" => "React",
    ],
    [
        "titol" => "Estructura HTML5",
        "descripcio" => "Utilitzem etiquetes semàntiques per organitzar el contingut.",
        "tecno" => "HTML/CSS",
    ],
    [
        "titol" => "Docker compose",
        "descripcio" => "Permet aixecar diversos serveis alhora (per exemple, una web i una base de dades).",
        "tecno" => "Docker",
    ],
    [
        "titol" => "Consultes SQL bàsiques",
        "descripcio" => "Permeten obtenir informació de la base de dades.",
        "tecno" => "BBDD",
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Projecto - 3</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <header>
                <div class="lado_izq">
                    <img src="assets/codigo.png" alt="Codigo">
                    <h1>Chuleta DAW2</h1>                    
                </div>
                <div class="lado_der">
                    <ul>
                        <li><a href="#">Inici</a></li>
                        <li><a href="#">Conceptes</a></li>
                        <li><a href="#">Resum</a></li>
                    </ul>
                </div>
            </header>
        </div>
        <div class="fondo_azul">
            <div class="fondo_azul_lado_izq">
                <h2>Chuleta digital DAW2</h2>
                <p>Els conceptes clau del curs, en un sol lloc</p>
            </div>
            <div class="fondo_azul_lado_der">
                <img src="assets/gorro.png" alt="">
                <p>Una pagina per repassar de manera ràpida els que hem après a DAW2. Feta per estudiar, no per copiar </p>
            </div>
        </div>
        <div class="lista_tecno">
            <ul>
                <?php foreach ($tecno as $t): ?>
                    <li><?= $t ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="cajas">
            <div class="cajas_arriba">
                <div class="caja1">
                    <div class="caja1_img">
                        <img src="assets/php.png" alt="">
                        <span><?= $tecno[1] ?></span>
                    </div>
                    <div class="caja1_txt">
                        <h4><?= $targetes[0]["titol"] ?></h4>
                        <span><?= $targetes[0]["descripcio"] ?></span>
                        <img src="<?= $targetes[0]["img"] ?>" alt="">
                        <span><?= $tecno[1] ?></span>
                    </div>                    
                </div>
                <div class="caja1">
                    <div class="caja1_img">
                        <img src="assets/php.png" alt="">
                        <span><?= $tecno[1] ?></span>
                    </div>
                    <div class="caja1_txt">
                        <h4><?= $targetes[1]["titol"] ?></h4>
                        <span><?= $targetes[1]["descripcio"] ?></span>
                        <img src="<?= $targetes[0]["img"] ?>" alt="">
                        <span><?= $tecno[1] ?></span>
                    </div>                    
                </div>
                <div class="caja1">
                    <div class="caja1_img amarillo">
                        <img src="assets/js.png" alt="">
                        <span><?= $tecno[2] ?></span>
                    </div>
                    <div class="caja1_txt">
                        <h4><?= $targetes[2]["titol"] ?></h4>
                        <span><?= $targetes[2]["descripcio"] ?></span>
                        <img src="<?= $targetes[0]["img"] ?>" alt="">
                        <span><?= $tecno[2] ?></span>
                    </div>                    
                </div>
                <div class="caja1">
                    <div class="caja1_img amarillo">
                        <img src="assets/js.png" alt="">
                        <span><?= $tecno[2] ?></span>
                    </div>
                    <div class="caja1_txt">
                        <h4><?= $targetes[0]["titol"] ?></h4>
                        <span><?= $targetes[0]["descripcio"] ?></span>
                        <img src="<?= $targetes[0]["img"] ?>" alt="">
                        <span><?= $tecno[2] ?></span>
                    </div>                    
                </div>
            </div>
            <div class="cajas_abajo">
                <div class="caja1">
                    <div class="caja1_img azul_claro">
                        <img src="assets/react.png" alt="">
                        <span><?= $tecno[3] ?></span>
                    </div>
                    <div class="caja1_txt">
                        <h4><?= $targetes[0]["titol"] ?></h4>
                        <span><?= $targetes[0]["descripcio"] ?></span>
                        <img src="<?= $targetes[0]["img"] ?>" alt="">
                        <span><?= $tecno[3] ?></span>
                    </div>                    
                </div>
                <div class="caja1">
                    <div class="caja1_img verde">
                        <img src="assets/html.png" alt="">
                        <span><?= $tecno[4] ?></span>
                    </div>
                    <div class="caja1_txt">
                        <h4><?= $targetes[1]["titol"] ?></h4>
                        <span><?= $targetes[1]["descripcio"] ?></span>
                        <img src="<?= $targetes[0]["img"] ?>" alt="">
                        <span><?= $tecno[4] ?></span>
                    </div>                    
                </div>
                <div class="caja1">
                    <div class="caja1_img lila">
                        <img src="assets/docker.png" alt="">
                        <span><?= $tecno[5] ?></span>
                    </div>
                    <div class="caja1_txt">
                        <h4><?= $targetes[2]["titol"] ?></h4>
                        <span><?= $targetes[2]["descripcio"] ?></span>
                        <img src="<?= $targetes[0]["img"] ?>" alt="">
                        <span><?= $tecno[5] ?></span>
                    </div>                    
                </div>
                <div class="caja1">
                    <div class="caja1_img rojo">
                        <img src="assets/bbdd.png" alt="">
                        <span><?= $tecno[6] ?></span>
                    </div>
                    <div class="caja1_txt">
                        <h4><?= $targetes[0]["titol"] ?></h4>
                        <span><?= $targetes[0]["descripcio"] ?></span>
                        <img src="<?= $targetes[0]["img"] ?>" alt="">
                        <span><?= $tecno[6] ?></span>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>