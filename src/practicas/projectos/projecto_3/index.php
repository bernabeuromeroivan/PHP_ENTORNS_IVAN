<?php

$tecno = ["Totes", "PHP", "JavaScript", "React", "HTML/CSS", "Docker", "BBDD", "Projectes"];

$targetes = [
    [
        "titol" => "Variables",
        "img" => "assets/img1.png",
        "descripcio" => "Serveixen per guardar informació que després podem utilitzar.",
        "tecno" => "PHP",
        "destacat" => true
    ],
    [
        "titol" => "If / else",
        "img" => "assets/img2.png",
        "descripcio" => "Permet executar un codi o un altre segons una condició.",
        "tecno" => "PHP",
        "destacat" => false
    ],
    [
        "titol" => "Manipular el DOM",
        "img" => "assets/img3.png",
        "descripcio" => "Permet modificar el contingut de la pàgina des de JavaScript.",
        "tecno" => "JavaScript",
        "destacat" => true
    ],
    [
        "titol" => "Array i forEach",
        "img" => "assets/img4.png",
        "descripcio" => "Permet recórrer tots els elements d'un array.",
        "tecno" => "JavaScript",
        "destacat" => false
    ],
    [
        "titol" => "Components",
        "img" => "assets/img5.png",
        "descripcio" => "Permeten dividir la interfície en peces reutilitzables.",
        "tecno" => "React",
        "destacat" => true
    ],
    [
        "titol" => "Estructura HTML5",
        "img" => "assets/img6.png",
        "descripcio" => "Utilitzem etiquetes semàntiques per organitzar el contingut.",
        "tecno" => "HTML/CSS",
        "destacat" => false
    ],
    [
        "titol" => "Docker compose",
        "img" => "assets/img7.png",
        "descripcio" => "Permet aixecar diversos serveis alhora (per exemple, una web i una base de dades).",
        "tecno" => "Docker",
        "destacat" => true
    ],
    [
        "titol" => "Consultes SQL bàsiques",
        "img" => "assets/img8.png",
        "descripcio" => "Permeten obtenir informació de la base de dades.",
        "tecno" => "BBDD",
        "destacat" => false
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
                <?php for ($i = 0; $i < 4; $i++): ?>
                    <?php
                    if ($targetes[$i]["tecno"] == "PHP") {
                        $color = "";
                    } elseif ($targetes[$i]["tecno"] == "JavaScript") {
                        $color = "amarillo";
                    } elseif ($targetes[$i]["tecno"] == "React") {
                        $color = "azul_claro";
                    } elseif ($targetes[$i]["tecno"] == "HTML/CSS") {
                        $color = "verde";
                    } elseif ($targetes[$i]["tecno"] == "Docker") {
                        $color = "lila";
                    } else {
                        $color = "rojo";
                    }
                    ?>
                    <div class="caja1">
                        <div class="caja1_img <?= $color ?>">
                            <span><?= $targetes[$i]["tecno"] ?></span>
                        </div>

                        <div class="caja1_txt">
                            <h4>
                                <?= $targetes[$i]["titol"] ?>
                                <?php if ($targetes[$i]["destacat"] == true): ?>
                                    <span class="estrella">★</span>
                                <?php endif; ?>
                            </h4>
                            <span><?= $targetes[$i]["descripcio"] ?></span>
                            <img src="<?= $targetes[$i]["img"] ?>" alt="">
                            <span><?= $targetes[$i]["tecno"] ?></span>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="cajas_abajo">
                <?php for ($i = 4; $i < 8; $i++): ?>
                    <?php
                    if ($targetes[$i]["tecno"] == "PHP") {
                        $color = "";
                    } elseif ($targetes[$i]["tecno"] == "JavaScript") {
                        $color = "amarillo";
                    } elseif ($targetes[$i]["tecno"] == "React") {
                        $color = "azul_claro";
                    } elseif ($targetes[$i]["tecno"] == "HTML/CSS") {
                        $color = "verde";
                    } elseif ($targetes[$i]["tecno"] == "Docker") {
                        $color = "lila";
                    } else {
                        $color = "rojo";
                    }
                    ?>
                    <div class="caja1">
                        <div class="caja1_img <?= $color ?>">
                            <img src="<?= $config_tecno[$targetes[$i]["tecno"]]["icono"] ?? '' ?>" alt="">
                            <span><?= $targetes[$i]["tecno"] ?></span>
                        </div>

                        <div class="caja1_txt">
                            <h4>
                                <?= $targetes[$i]["titol"] ?>
                                <?php if ($targetes[$i]["destacat"] == true): ?>
                                    <span class="estrella">★</span>
                                <?php endif; ?>
                            </h4>
                            <span><?= $targetes[$i]["descripcio"] ?></span>
                            <img src="<?= $targetes[$i]["img"] ?>" alt="">
                            <span><?= $targetes[$i]["tecno"] ?></span>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="abajo">
            <div class="resumen">
                <div class="resumen-izq">
                    <h3 class="resumen-titulo">📊 Resum</h3>
                    <ul class="resumen-list">
                        <?php 
                        $total = 0;
                        foreach ($tecno as $t): 
                            if ($t != "Totes" && $t != "Projectes"): 
                                $cantidad = 0;
                                foreach ($targetes as $targeta) {
                                    if ($targeta["tecno"] == $t) {
                                        $cantidad++;
                                    }
                                }
                                $total += $cantidad; 
                                ?>
                                <li>
                                    <span class="concepto-nombre"><?= $t ?></span>
                                    <span class="concepto-num"><?= $cantidad ?></span>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="resumen-der">
                    <span class="total">Total</span>
                    <span class="total_t"><?= $total ?></span>
                </div>
            </div>
            <div class="assignatures-card">
                <h3 class="assignatures-titulo">
                    📖 Assignatures
                </h3>

                <div class="assignatures-lista">
                    <?php foreach ($tecno as $t): ?>
                        <span class="btn-assignatura"><?= $t ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="caja_resumen">
                <h2>🎯 Conceptes destacats</h2>
                <div class="destacados">
                    <?php foreach ($targetes as $targeta): ?>
                        <?php if ($targeta["destacat"] == true): ?>
                            <p>⭐ <?= $targeta["titol"] ?></p>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>