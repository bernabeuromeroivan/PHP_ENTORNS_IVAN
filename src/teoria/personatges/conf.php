<?php
require_once('config.php');

try {
    $pdo = db();
} catch (PDOException $e) {
    die("Error de connexió a la base de dades: " . $e->getMessage());
}

if (isset($_GET['eliminar'])) {
    $id_eliminar = $_GET['eliminar'];

    try {
        $sql_delete = 'DELETE FROM videojocs WHERE id = :id';
        $stmt_delete = $pdo->prepare($sql_delete);
        $stmt_delete->execute([':id' => $id_eliminar]);

        header("Location: conf.php");
        exit();
    } catch (PDOException $e) {
        die("Error al eliminar: " . $e->getMessage());
    }
}

$sql = 'SELECT id, nom, genere FROM videojocs ORDER BY id';
$stmt = $pdo->query($sql);
$videojocs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojocs de MySQL</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="contenedor">
        <div class="cabecera">
            <h1>Videojocs de MySQL</h1>
            <a href="crear_personaje.php" class="btn btn-crear">+ Afegir nou</a>
        </div>

        <div class="lista-juegos">
            <?php foreach ($videojocs as $joc): 
                $nom = $joc['nom'];
                $genere = $joc['genere'];
                $id = $joc['id'];
            ?>
                <div class="tarjeta-juego">
                    <div class="info-juego">
                        <span class="nombre"><?php echo $nom; ?></span>
                        <span class="genero"><?php echo $genere; ?></span>
                    </div>
                    <div class="acciones">
                        <a href="detalles_personaje.php?id=<?php echo $id; ?>" class="btn btn-detalles">Detalles</a>
                        <a href="editar_personaje.php?id=<?php echo $id; ?>" class="btn btn-editar">Editar</a>
                        <a href="conf.php?eliminar=<?php echo $id; ?>" class="btn btn-eliminar" onclick="return confirm('¿Seguro que quieres eliminarlo?');">Eliminar</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>
</html>