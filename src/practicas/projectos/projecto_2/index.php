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
$carpeta = "assets/carpeta.png";
$caution = "assets/caution.png";
$hora = "assets/hora.png";
$compra = "assets/compra.png";
$blog = "assets/blog.png";
$audi = "assets/auditoria.png";
$fitxa = "assets/fitxa.png";
$galeria = "assets/galeria.png";
$ajustes = "assets/integracio.png";
$botiga = "assets/botiga.png";
$cierre = "assets/cierre.png";
$menu = ["Inici", "Projectes", "Tecnologies", "Sobre"];

$prioritat_alta = 0;
foreach ($prioritats as $p) {
    if ($p >= 7) {
        $prioritat_alta++;
    }
}

$boton = "";
foreach ($prioritats as $p) {
    if ($p >= 7) {
        $boton = "Alta";
    }
    else if($p >= 4 || $p <= 6){
        $boton = "Mitjana";
    }
    else{
        $boton = "Baixa";
    }
}

$caja = ["Projectes", "Prioritat alta", "Hores estimades", "Tecnologies"];
$gris = ["Projectes registrats al panell", "Projectes amb prioritat alta", "Suma total d'hores del projectes", "Eines i tecnologies utilitzades"];
$actius = "Projectes actius";
$lista = "Llista de projectes del curs. Cada targeta mostra la informació principal i la seva prioritat";
$numeros = ["1", "2", "3", "4", "5", "6", "7", "8"];
$img1 = "assets/diente.png";
$tipus = ["Tipus: Web", "Tipus: Ecommerce", "Tipus: CMS", "Tipus: Qualitat"];
$landi = ["Landing page moderna i responsive", "Cataleg de productes artesans", "Blog amb noticies i articles", "Revisio i millores de versio mobil", "Pagina de servei amb formulari", "Galeria filtrable de projectes", "Connexio amb API externa", "Botiga amb productes i pagament"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Projecto - 2</title>
    <script src="https://kit.fontawesome.com/ba4676a391.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header class="encabezado">
            <div class="div-header">
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
                    <button><?= $menu[0] ?></button>
                    <button><?= $menu[1] ?></button>
                    <button><?= $menu[2] ?></button>
                    <button><?= $menu[3] ?></button>
                </div>
            </div>
        </header>
        <div class="projectos">
            <div class="carpeta cuadro azul">
                <div class="div-img">
                    <img src="<?= $carpeta ?>" alt="">                    
                </div>
                <div class="div-txt">
                    <span class="numero"><?= count($noms_projectes) ?></span>
                    <p><?= $caja[0] ?></p>
                    <span class="gris"><?= $gris[0] ?></span>                    
                </div>
            </div>
            <div class="carpeta cuadro rojo">
                <div class="div-img">
                    <img src="<?= $caution ?>" alt="">                    
                </div>
                <div class="div-txt">
                    <span class="numero"><?= $prioritat_alta ?></span>
                    <p><?= $caja[1] ?></p>
                    <span class="gris"><?= $gris[1] ?></span>                    
                </div>
            </div>
            <div class="carpeta cuadro verde">
                <div class="div-img">
                    <img src="<?= $hora ?>" alt="">                    
                </div>
                <div class="div-txt">
                    <span class="numero"><?= array_sum($hores_estimades) ?>h</span>
                    <p><?= $caja[2] ?></p>
                    <span class="gris"><?= $gris[2] ?></span>                    
                </div>
            </div>
            <div class="carpeta cuadro morado">
                <div class="div-img">
                    <img src="<?= $cierre ?>" alt="">                    
                </div>
                <div class="div-txt">
                    <span class="numero"><?= count($tecnologies) ?></span>
                    <p><?= $caja[3] ?></p>
                    <span class="gris"><?= $gris[3] ?></span>                    
                </div>
            </div>
        </div>
        <h2 class="actius"><?= $actius ?></h2>
        <span class="lista"><?= $lista ?></span>  
        <div class="medio">
            <div class="arriba">
                <div class="caja-medio">
                    <div class="noms">
                        <span># <?= $numeros[0] ?></span>
                        <h4 class="nom"><?= $noms_projectes[0] ?></h4>
                        <div class="div-btn">
                            <button class="noms-boton"><?= $boton ?></button> 
                        </div>                        
                    </div>
                    <div class="imagen">
                        <img src="<?= $img1 ?>" alt="">
                        <div class="imagen-txt">
                            <span class="tipo"><?= $tipus[0] ?></span>
                            <span class="tipo"><?= $landi[0] ?></span>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="div1">
                            <span> ⏱<?= $hores_estimades[0] ?>h</span>
                        </div>
                        <div class="div2">
                            <span> Prioritat: <?= $prioritats[0] ?>/10</span>
                        </div>
                    </div>
                </div>
                <div class="caja-medio">
                    <div class="noms">
                        <span># <?= $numeros[1] ?></span>
                        <h4 class="nom"><?= $noms_projectes[1] ?></h4>
                        <div class="div-btn">
                            <button class="noms-boton"><?= $boton ?></button> 
                        </div>                        
                    </div>
                    <div class="imagen">
                        <img src="<?= $compra ?>" alt="">
                        <div class="imagen-txt">
                            <span class="tipo"><?= $tipus[1] ?></span>
                            <span class="tipo"><?= $landi[1] ?></span>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="div1">
                            <span> ⏱<?= $hores_estimades[1] ?>h</span>
                        </div>
                        <div class="div2">
                            <span> Prioritat: <?= $prioritats[1] ?>/10</span>
                        </div>
                    </div>
                </div>
                <div class="caja-medio">
                    <div class="noms">
                        <span># <?= $numeros[2] ?></span>
                        <h4 class="nom"><?= $noms_projectes[2] ?></h4>
                        <div class="div-btn">
                            <button class="noms-boton"><?= $boton ?></button> 
                        </div>                        
                    </div>
                    <div class="imagen">
                        <img src="<?= $blog ?>" alt="">
                        <div class="imagen-txt">
                            <span class="tipo"><?= $tipus[2] ?></span>
                            <span class="tipo"><?= $landi[2] ?></span>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="div1">
                            <span> ⏱<?= $hores_estimades[2] ?>h</span>
                        </div>
                        <div class="div2">
                            <span> Prioritat: <?= $prioritats[2] ?>/10</span>
                        </div>
                    </div>
                </div>
                <div class="caja-medio">
                    <div class="noms">
                        <span># <?= $numeros[3] ?></span>
                        <h4 class="nom"><?= $noms_projectes[3] ?></h4>
                        <div class="div-btn">
                            <button class="noms-boton"><?= $boton ?></button> 
                        </div>                        
                    </div>
                    <div class="imagen">
                        <img src="<?= $audi ?>" alt="">
                        <div class="imagen-txt">
                            <span class="tipo"><?= $tipus[3] ?></span>
                            <span class="tipo"><?= $landi[3] ?></span>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="div1">
                            <span> ⏱<?= $hores_estimades[3] ?>h</span>
                        </div>
                        <div class="div2">
                            <span> Prioritat: <?= $prioritats[3] ?>/10</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="abajo">
                <div class="caja-medio">
                    <div class="noms">
                        <span># <?= $numeros[4] ?></span>
                        <h4 class="nom"><?= $noms_projectes[4] ?></h4>
                        <div class="div-btn">
                            <button class="noms-boton"><?= $boton ?></button> 
                        </div>                        
                    </div>
                    <div class="imagen">
                        <img src="<?= $fitxa ?>" alt="">
                        <div class="imagen-txt">
                            <span class="tipo"><?= $tipus[0] ?></span>
                            <span class="tipo"><?= $landi[4] ?></span>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="div1">
                            <span> ⏱<?= $hores_estimades[4] ?>h</span>
                        </div>
                        <div class="div2">
                            <span> Prioritat: <?= $prioritats[4] ?>/10</span>
                        </div>
                    </div>
                </div>
                <div class="caja-medio">
                    <div class="noms">
                        <span># <?= $numeros[5] ?></span>
                        <h4 class="nom"><?= $noms_projectes[5] ?></h4>
                        <div class="div-btn">
                            <button class="noms-boton"><?= $boton ?></button> 
                        </div>                        
                    </div>
                    <div class="imagen">
                        <img src="<?= $galeria ?>" alt="">
                        <div class="imagen-txt">
                            <span class="tipo"><?= $tipus[2] ?></span>
                            <span class="tipo"><?= $landi[5] ?></span>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="div1">
                            <span> ⏱<?= $hores_estimades[5] ?>h</span>
                        </div>
                        <div class="div2">
                            <span> Prioritat: <?= $prioritats[5] ?>/10</span>
                        </div>
                    </div>
                </div>
                <div class="caja-medio">
                    <div class="noms">
                        <span># <?= $numeros[6] ?></span>
                        <h4 class="nom"><?= $noms_projectes[6] ?></h4>
                        <div class="div-btn">
                            <button class="noms-boton"><?= $boton ?></button> 
                        </div>                        
                    </div>
                    <div class="imagen">
                        <img src="<?= $ajustes ?>" alt="">
                        <div class="imagen-txt">
                            <span class="tipo"><?= $tipus[0] ?></span>
                            <span class="tipo"><?= $landi[6] ?></span>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="div1">
                            <span> ⏱<?= $hores_estimades[6] ?>h</span>
                        </div>
                        <div class="div2">
                            <span> Prioritat: <?= $prioritats[6] ?>/10</span>
                        </div>
                    </div>
                </div>
                <div class="caja-medio">
                    <div class="noms">
                        <span># <?= $numeros[7] ?></span>
                        <h4 class="nom"><?= $noms_projectes[7] ?></h4>
                        <div class="div-btn">
                            <button class="noms-boton"><?= $boton ?></button> 
                        </div>                        
                    </div>
                    <div class="imagen">
                        <img src="<?= $botiga ?>" alt="">
                        <div class="imagen-txt">
                            <span class="tipo"><?= $tipus[1] ?></span>
                            <span class="tipo"><?= $landi[7] ?></span>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="div1">
                            <span> ⏱<?= $hores_estimades[7] ?>h</span>
                        </div>
                        <div class="div2">
                            <span> Prioritat: <?= $prioritats[7] ?>/10</span>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <div class="abajo">
            <div class="abajo_izq">
                <div class="abajo_img">
                    <img src="assets/grafica.png" alt="">
                </div>
                <div class="abajo_txt">

                </div>
            </div>
            <div class="abajo_der">

            </div>
        </div>     
    </div>
</body>
</html>