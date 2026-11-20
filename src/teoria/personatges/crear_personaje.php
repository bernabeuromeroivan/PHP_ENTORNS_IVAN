<?php

require_once ('config.php');
$pdo = db();

$sql = 'SELECT id, nom FROM videojocs ORDER BY nom';
$stmt = $pdo->query($sql);
$v = $stmt->fetchAll();

?>

<form method="post">
    <label>
        Nom:
        <input type="text" name="nom">
    </label>
    <br><br>
    <label>
        Descripció:
        <textarea name="descripcio"></textarea>
    </label>
    <br><br>
    <label>
        Videojoc:
        <select name="videojoc_id">
            <?php foreach ($v as $videojoc): ?>
                <option value="<?= $videojoc['id'] ?>">
                    <?= $videojoc['nom'] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>
    <br><br>
    <button type="submit">
        Crear personatge
    </button>
</form>