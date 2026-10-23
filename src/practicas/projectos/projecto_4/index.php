<?php
require_once 'dades.php';

if (!isset($_SESSION['encarrecs'])) {
    $_SESSION['encarrecs'] = $encarrecs;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["afegir"])) {
    $nouEncarrec = [
        "titol" => $_POST["titol"],
        "client" => $_POST["client"],
        "hores" => $_POST["hores"],
        "estat" => $_POST["estat"],
        "etiquetes" => explode(",", $_POST["etiquetes"])
    ];

    $_SESSION['encarrecs'][] = $nouEncarrec;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["eliminar"])) {
    $id = $_POST["id"];
    unset($_SESSION['encarrecs'][$id]);
    $_SESSION['encarrecs'] = array_values($_SESSION['encarrecs']);
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Encàrrecs</title>
</head>
<body>
    <div class="container">
        <?php include "includes/header.php"; ?>
        <section class="banner-section">
            <div class="banner-content">
                <span class="banner-tag">AGÈNCIA WEB · TAULER DE PROJECTES</span>
                <h2 class="banner-title">Gestor d'encàrrecs</h2>
                <p class="banner-description">Consulta la feina de l'equip, revisa les hores previstes i registra encàrrecs nous.</p>
            </div>
        </section>

        <div class="encargos">
            <p>Total de encarrecs: <?= count($_SESSION['encarrecs'] ?? []) ?></p>
            <p>Hores estimades: <?= array_sum(array_column($_SESSION['encarrecs'] ?? [], 'hores')) ?></p>            
        </div>

        <div class="subtitulo">
            <span>Projectes actius</span>
            <h2>Llistat d'encarrecs</h2>
        </div>

        <div class="cards">
            <?php if (!empty($_SESSION['encarrecs'])): ?>
                <?php foreach ($_SESSION['encarrecs'] as $id => $e): ?>
                    <div class="card">
                        <div class="card-header">
                            <?php
                            $estat = $e['estat'] ?? 'Pendent';
                            if ($estat === 'Pendent') {
                                echo '<span class="etiqueta-estat pendent">Pendent</span>';
                            } elseif ($estat === 'En procés') {
                                echo '<span class="etiqueta-estat proces">En procés</span>';
                            } else {
                                echo '<span class="etiqueta-estat acabat">Acabat</span>';
                            }
                            ?>
                            <span class="card-time"><?= ($e['hores']) ?> h</span>
                        </div>
                        <h3 class="card-title"><?= ($e['titol'] ?? '') ?></h3>
                        <div class="card-client">Client: <strong><?= ($e['client']) ?></strong></div>
                        <div class="card-tags"><?= (implode(' · ', $e['etiquetes'] ?? [])) ?></div>
                        <div class="card-actions">
                            <a href="detall.php?id=<?= $id ?>" class="btn-primary">Veure detall</a>
                            <form method="POST" style="display:inline;">
                                <input type="hidden" name="id" value="<?= $id ?>">
                                <button type="submit" name="eliminar" class="btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php else: ?>
                <p>No hi ha encàrrecs disponibles.</p>
            <?php endif; ?>
        </div>

        <section id="nou-encarrec" class="seccio-formulari">
            <div class="formulari-contenidor">
                <div class="formulari-info">
                    <span class="detall-subtitol">ALTA DE PROJECTE</span>
                    <h2>Afegir un encàrrec</h2>
                    <p>Emplena totes les dades. Les etiquetes s'han d'escriure separades per comes.</p>
                </div>
                <form method="POST" class="el-formulari">
                    <div class="camp-form">
                        <label>Títol</label>
                        <input type="text" name="titol" placeholder="Ex.: Redisseny d'una botiga" required>
                    </div>
                    <div class="camp-form">
                        <label>Client</label>
                        <input type="text" name="client" placeholder="Nom del client" required>
                    </div>
                    <div class="fila-doble">
                        <div class="camp-form">
                            <label>Hores estimades</label>
                            <input type="number" name="hores" min="1" required>
                        </div>
                        <div class="camp-form">
                            <label>Estat</label>
                            <select name="estat">
                                <option value="Pendent">Pendent</option>
                                <option value="En procés">En procés</option>
                                <option value="Acabat">Acabat</option>
                            </select>
                        </div>
                    </div>
                    <div class="camp-form">
                        <label>Etiquetes</label>
                        <input type="text" name="etiquetes" placeholder="PHP, Docker, Responsive" value="PHP, Docker, Responsive">
                    </div>
                    <button type="submit" name="afegir" class="boto-afegir">Afegir encàrrec</button>
                </form>
            </div>
        </section>
    </div>
</body>
</html>