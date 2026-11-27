<?php
require_once('config.php');

$id = $_GET['id'];

try {
    $pdo = db();
} catch (PDOException $e) {
    die("Error de connexió a la base de dades: " . $e->getMessage());
}

$sql = 'SELECT * FROM videojocs WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute([':id' => $id]);

$joc = $stmt->fetch(PDO::FETCH_ASSOC);

$nom = $joc['nom'];
$genere = $joc['genere'];
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalls - <?php echo $nom; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="contenedor">
        <div class="cabecera">
            <h1><?php echo $nom; ?></h1>
            <a href="conf.php" class="btn btn-volver">← Tornar</a>
        </div>

        <div class="tarjeta-detalle">
            <div class="campo-detalle">
                <span class="etiqueta">Nom del videojoc:</span>
                <span class="valor"><?php echo $nom; ?></span>
            </div>

            <div class="campo-detalle">
                <span class="etiqueta">Gènere:</span>
                <span class="genero"><?php echo $genere; ?></span>
            </div>
        </div>

        <div class="acciones-detalle">
            <a href="editar_personaje.php?id=<?php echo $id; ?>" class="btn btn-editar">Editar videojoc</a>
        </div>
    </div>

</body>
</html>