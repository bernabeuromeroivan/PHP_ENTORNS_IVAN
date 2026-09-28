<?php

$noms_projectes = [
    "Landing per a clínica dental",
    "Catàleg de productes artesans",
    "Blog corporatiu escola",
    "Auditoria responsive",
    "Fitxa de servei amb CTA",
    "Galeria de projectes",
    "Botiga online bàsica",
    "Optimització d'imatges"
];

$tipus_projectes = [
    "Web",
    "Ecommerce",
    "CMS",
    "Qualitat",
    "Web",
    "CMS",
    "Ecommerce"
];

$hores_estimades = [6, 4, 3, 5, 2, 4, 8, 3];

$prioritats = [7, 5, 2, 8, 4, 3, 9, 6];

$tecnologies = ["HTML", "CSS", "PHP", "Docker", "WordPress", "Shopify"];

$titulo = "Panell intern de projectes";
$subtit = "Agencia digital · Gestio de projectes de estudi";
$logo = "assets/layer.png";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Projecto - 2</title>
    <script src="https://kit.fontawesome.com/ba4676a391.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="parte_izq">
            <div class="div_logo">
                <img src="<?= $logo ?>" alt="">
            </div>
            <div class="div_txt">
                <h1 class="titulo"><?= $titulo ?></h1>
                <span class="subtit"><?= $subtit ?></span>
            </div>            
        </div>
        <div class="parte_der">
            <ul>
                <button>Inici</button>
                <button></button>
                <button></button>
                <button></button>
            </ul>
        </div>
    </header>
</body>
</html>