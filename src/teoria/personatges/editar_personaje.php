<?php
require_once('config.php');

try {
    $pdo = db();
} catch (PDOException $e) {
    die("Error de connexió a la base de dades: " . $e->getMessage());
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nom = trim($_POST['nom'] ?? '');
    $genere = trim($_POST['genere'] ?? '');

    if ($nom !== '' && $genere !== '') {
        $sql = 'UPDATE videojocs SET nom = :nom, genere = :genere WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nom' => $nom,
            ':genere' => $genere,
            ':id' => $id
        ]);

        header("Location: conf.php");
        exit();
    } else {
        $error = "Tots els camps són obligatoris.";
    }
}

$id = $_GET['id'];
$sql = 'SELECT * FROM videojocs WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute([':id' => $id]);
$joc = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$joc) {
    die("No s'ha trobat el registre.");
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar registre - <?= $joc['nom'] ?></title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

    <div class="contenedor">
        <div class="cabecera">
            <h1>Editar registre</h1>
            <a href="conf.php" class="btn btn-volver">← Tornar</a>
        </div>

        <form method="POST" action="editar_personaje.php?id=<?= $id ?>" class="formulario">
            <input type="hidden" name="id" value="<?= $id ?>">
            
            <div class="grupo-campo">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" value="<?= $joc['nom'] ?>" required>
            </div>

            <div class="grupo-campo">
                <label for="genere">Gènere:</label>
                <input type="text" id="genere" name="genere" value="<?= $joc['genere'] ?>" required>
            </div>

            <div class="acciones-formulario">
                <button type="submit" class="btn btn-crear">Actualitzar</button>
                <a href="conf.php" class="btn btn-volver">Cancel·lar</a>
            </div>
        </form>
    </div>

</body>
</html>