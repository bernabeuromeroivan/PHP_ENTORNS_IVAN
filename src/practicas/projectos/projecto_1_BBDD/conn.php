<?php
require_once('config.php');

try {
  $pdo = db();
} catch (PDOException $e) {
  die("Error de connexió a la base de dades: " . $e->getMessage());
}

$sql = 'SELECT id, talla, marca, modelo, precio, foto FROM bambas';

$stmt = $pdo->query($sql);

$bambas = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>BAMBAS - Catálogo</title>
</head>
<body>

    <h1>Catálogo de Bambas</h1>

    <div class="catalogo">
        <?php if (count($bambas) > 0): ?>
            <?php foreach ($bambas as $b): ?>
                <div class="tarjeta">
                    <img src="<?php echo ($b['foto']); ?>" alt="<?php echo ($b['modelo']); ?>">
                    <p class="marca"><?php echo ($b['marca']); ?></p>
                    <h2 class="modelo"><?php echo ($b['modelo']); ?></h2>
                    <div class="detalles">
                        <span class="talla">Talla: <?php echo ($b['talla']); ?></span>
                        <span class="precio"><?php echo ($b['precio']); ?> €</span>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No hay bambas registradas en la base de datos.</p>
        <?php endif; ?>
    </div>

</body>
</html>