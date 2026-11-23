<?php
require_once('config.php');
$pdo = db();

$consulta = $pdo->query('SELECT * FROM anuncios');
$anuncios = $consulta->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Tienda</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header class="header">
        <div class="header-contenido">
            <a href="index.php" class="logo">Re<span>sell</span></a>
            <nav class="nav">
                <a href="publicar.php" class="btn-anadir">Publicar anuncio</a>
            </nav>
        </div>
    </header>

    <h1>Anuncios disponibles</h1>

    <div class="catalogo">
        <?php if (count($anuncios) > 0): ?>
            
            <?php foreach ($anuncios as $item): ?>
                <div class="tarjeta">
                    <img src="<?php echo $item['foto']; ?>" alt="Foto">
                    <h2><?php echo $item['titulo']; ?></h2>
                    <p><?php echo $item['precio']; ?> €</p>
                </div>
            <?php endforeach; ?>

        <?php else: ?>
            <p>Todavía no hay ningún anuncio publicado.</p>
        <?php endif; ?>
    </div>

</body>
</html>