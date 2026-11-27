<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['nom'] ?? '');
    $genere = trim($_POST['genere'] ?? '');

    try {
        $pdo = db();
        $sql = 'INSERT INTO videojocs (nom, genere) VALUES (:nom, :genere)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nom' => $nom,
            ':genere' => $genere
        ]);

        header("Location: conf.php");
        exit();
    } catch (PDOException $e) {
        die("Error al crear: " . $e->getMessage());
    }
    } else {
        $error = "Tots els camps són obligatoris.";
    }
?>

<h1>Crear nou registre</h1>

<form method="POST" action="crear_personaje.php">
    <p>
        <label>Nom:</label><br>
        <input type="text" name="nom" required>
    </p>
    <p>
        <label>Gènere:</label><br>
        <input type="text" name="genere" required>
    </p>
    <button type="submit">Guardar</button>
    <a href="conf.php"><button type="button">Cancel·lar</button></a>
</form>