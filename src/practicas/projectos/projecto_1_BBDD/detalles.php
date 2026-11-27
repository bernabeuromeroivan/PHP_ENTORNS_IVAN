<?php
require_once('config.php');
$pdo = db();

$id = $_GET['detalles'] ?? null;

if (!$id) {
    header('Location: index.php');
    exit;
}

$stmt = $pdo->prepare('SELECT * FROM anuncios WHERE id = :id');
$stmt->execute(['id' => $id]);
$anuncio = $stmt->fetch();

if (!$anuncio) {
    header('Location: index.php');
    exit;
}

$stmtCat = $pdo->prepare('SELECT nombre FROM categorias WHERE id = :id');
$stmtCat->execute(['id' => $anuncio['categoria_id']]);
$categoria = $stmtCat->fetch();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $anuncio['titulo']; ?> - Resell</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header class="header">
        <div class="header-contenido">
            <a href="index.php" class="logo">Re<span>sell</span></a>
            <nav class="nav">
                <a href="index.php" class="btn-volver">← Volver al catálogo</a>
                <a href="publicar.php" class="btn-anadir">Publicar anuncio</a>
            </nav>
        </div>
    </header>

    <main class="contenedor-detalle">
        <div class="detalle-card">
            <div class="detalle-imagen">
                <img src="<?php echo $anuncio['foto']; ?>" alt="<?php echo $anuncio['titulo']; ?>">
            </div>

            <div class="detalle-info">
                <?php if (!empty($anuncio['categoria_nombre'])): ?>
                    <span class="badge-categoria"><?php echo $anuncio['categoria_nombre']; ?></span>
                <?php endif; ?>

                <h1><?php echo $anuncio['titulo']; ?></h1>
                
                <p class="detalle-precio"><?php echo $anuncio['precio']; ?> €</p>

                <div class="detalle-descripcion">
                    <h3>Descripción</h3>
                    <p><?php echo ($anuncio['descripcion'] ?? 'Sin descripción disponible.'); ?></p>
                </div>

                <div class="detalle-acciones">
                    <a href="index.php?eliminar=<?php echo $anuncio['id']; ?>" 
                       class="btn-eliminar" 
                       onclick="return confirm('¿Seguro que quieres eliminar este anuncio?');">
                       Eliminar anuncio
                    </a>
                </div>
            </div>
        </div>
    </main>

</body>
</html>