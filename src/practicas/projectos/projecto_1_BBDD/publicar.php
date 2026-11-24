<?php
require_once('config.php');
$pdo = db();

$mensaje = "";

$categorias = $pdo->query("SELECT id, nombre FROM categorias")->fetchAll();
$usuarios   = $pdo->query("SELECT id, nombre FROM usuarios")->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo       = $_POST['titulo'] ?? '';
    $descripcion  = $_POST['descripcion'] ?? '';
    $precio       = $_POST['precio'] ?? '';
    $foto         = $_POST['foto'] ?? '';
    $categoria_id = $_POST['categoria_id'] ?? '';
    $usuario_id   = $_POST['usuario_id'] ?? '';

    $sql = "INSERT INTO anuncios (titulo, descripcion, precio, foto, categoria_id, usuario_id) 
            VALUES (:titulo, :descripcion, :precio, :foto, :categoria_id, :usuario_id)";
    $stmt = $pdo->prepare($sql);
    
    try {
        $stmt->execute([
            'titulo'       => $titulo,
            'descripcion'  => $descripcion,
            'precio'       => $precio,
            'foto'         => $foto,
            'categoria_id' => $categoria_id,
            'usuario_id'   => $usuario_id
        ]);

        header('Location: index.php');
        exit;
    } catch (PDOException $e) {
        $mensaje = "Error al guardar: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar Anuncio - Resell</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header class="header">
        <div class="header-contenido">
            <a href="index.php" class="logo">Re<span>sell</span></a>
            <nav class="nav">
                <a href="index.php" class="btn-volver">← Volver al catálogo</a>
            </nav>
        </div>
    </header>

    <div class="contenedor-form">
        <div class="tarjeta-form">
            <h1>Publicar nuevo anuncio</h1>
            <p class="subtitulo">Rellena los datos de tu producto para ponerlo a la venta</p>

            <?php if ($mensaje !== ""): ?>
                <div class="alerta-error"><?php echo $mensaje; ?></div>
            <?php endif; ?>

            <form method="POST" action="publicar.php">
                <div class="campo">
                    <label for="usuario_id">Vendedor (Usuario)</label>
                    <select id="usuario_id" name="usuario_id" required>
                        <option value="">Selecciona un usuario...</option>
                        <?php foreach ($usuarios as $user): ?>
                            <option value="<?php echo $user['id']; ?>">
                                <?php echo $user['nombre']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="campo">
                    <label for="titulo">Título del producto</label>
                    <input type="text" id="titulo" name="titulo" placeholder="Ej: GTA 6 PS5" required>
                </div>

                <div class="campo">
                    <label for="categoria_id">Categoría</label>
                    <select id="categoria_id" name="categoria_id" required>
                        <option value="">Selecciona una categoría...</option>
                        <?php foreach ($categorias as $cat): ?>
                            <option value="<?php echo $cat['id']; ?>">
                                <?php echo $cat['nombre']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="campo">
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" name="descripcion" rows="3" placeholder="Ej: Nuevo precintado, entrega en mano..." required></textarea>
                </div>

                <div class="campo">
                    <label for="precio">Precio (€)</label>
                    <input type="number" id="precio" name="precio" step="0.01" placeholder="Ej: 65.00" required>
                </div>

                <div class="campo">
                    <label for="foto">Enlace de la imagen (URL)</label>
                    <input type="url" id="foto" name="foto" placeholder="https://ejemplo.com/foto.jpg" required>
                </div>

                <button type="submit" class="btn-submit">Publicar anuncio ahora</button>
            </form>
        </div>
    </div>

</body>
</html>