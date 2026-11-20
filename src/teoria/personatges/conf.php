<?php
require_once('config.php');
// Obtenim la connexió PDO amb la base de dades.
try {
  $pdo = db();
} catch (PDOException $e) {
  die("Error de connexió a la base de dades: " . $e->getMessage());
}
// Escrivim la consulta SQL que volem executar.
$sql = 'SELECT id, nom, genere FROM videojocs ORDER BY nom';
// Executem la consulta utilitzant la connexió PDO.
$stmt = $pdo->query($sql);
// Recuperem totes les files retornades per MySQL.
// Cada fila serà un array associatiu.
$videojocs = $stmt->fetchAll();
// Mostrem les dades.
echo '<h1>Videojocs de MySQL</h1>';
foreach ($videojocs as $joc) {
  echo '<p>' . $joc['nom'] . ' (' . $joc['genere'] . ')</p>';
}

?>