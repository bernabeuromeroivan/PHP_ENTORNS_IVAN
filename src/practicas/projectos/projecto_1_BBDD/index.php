<?php
require_once('config.php');
$pdo = db();

if (isset($_GET['eliminar'])) {
    $stmt = $pdo->prepare('DELETE FROM anuncios WHERE id = :id');
    $stmt->execute(['id' => $_GET['eliminar']]);
    header('Location: index.php');
    exit;
}

$categorias = $pdo->query('SELECT id, nombre FROM categorias')->fetchAll();

// 4. Comprobamos si el usuario ha elegido alguna categoría para filtrar
$categoriaSeleccionada = $_GET['categoria'] ?? '';

if ($categoriaSeleccionada !== '') {
    $stmt = $pdo->prepare('SELECT * FROM anuncios WHERE categoria_id = :cat');
    $stmt->execute(['cat' => $categoriaSeleccionada]);
    $anuncios = $stmt->fetchAll();
} else {
    $anuncios = $pdo->query('SELECT * FROM anuncios')->fetchAll();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Tienda - Resell</title>
    <link rel="stylesheet" href="styles.css?v=2">
</head>
<body>

    <header class="header">
        <div class="header-contenido">
            <a href="index.php" class="logo">Re<span>sell</span></a>
            
            <nav class="nav">
                <!-- Desplegable para filtrar: al cambiar, recarga la página con ?categoria=ID -->
                <select class="filtro-select" onchange="window.location.href = this.value ? 'index.php?categoria=' + this.value : 'index.php';">
                    <option value="">Todas las categorías</option>
                    <?php foreach ($categorias as $cat): ?>
                        <option value="<?php echo $cat['id']; ?>" <?php echo $categoriaSeleccionada == $cat['id'] ? 'selected' : ''; ?>>
                            <?php echo $cat['nombre']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>

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
                    
                    <div class="tarjeta-pie">
                        <p class="precio"><?php echo $item['precio']; ?> €</p>
                        <a href="index.php?eliminar=<?php echo $item['id']; ?>" 
                           class="btn-eliminar" 
                           onclick="return confirm('¿Seguro que quieres eliminar este anuncio?');">
                           Eliminar
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>

        <?php else: ?>
            <p>No hay anuncios en esta categoría.</p>
        <?php endif; ?>
    </div>

</body>
</html>