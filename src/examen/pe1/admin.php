<?php
include_once "dades.php";

if (!isset($_SESSION['rol']) || $_SESSION['rol'] != "admin") {
    header("Location: login.php");
    exit();
}

if (isset($_POST['borrar'])) {
    $borrar = $_POST['borrar'];
    foreach ($_SESSION['preguntes'] as $index => $p) {
        if ($p['id'] == $borrar) {
            unset($_SESSION['preguntes'][$index]);
        }
    }
    $_SESSION['preguntes'] = array_values($_SESSION['preguntes']);
}
?>

<!doctype html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Administració</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <?php include_once "includes/header.php" ?>

    <main class="contenidor">
      <section class="panell">
        <div class="navegacio">
          <div>
            <h1>Gestió de preguntes</h1>
            <p class="subtitol">Banc de preguntes del Trivial</p>
          </div>
          <a class="btn" href="pregunta_formulari.php">+ Nova pregunta</a>
        </div>
        <div class="taula-responsive">
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Categoria</th>
                <th>Enunciat</th>
                <th>Accions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($_SESSION['preguntes'] as $p): ?>
                <tr>
                  <td><?php echo $p['id']; ?></td>
                  <td><?php echo $p['categoria']; ?></td>
                  <td><?php echo $p['pregunta']; ?></td>
                  <td>
                    <a class="btn btn-sec" href="pregunta_formulari.php?id=<?php echo $p['id']; ?>">Editar</a>
                    
                    <form method="post" action="admin.php" style="display:inline;">
                      <input type="hidden" name="borrar" value="<?php echo $p['id']; ?>">
                      <button class="btn btn-perill" type="submit">Eliminar</button>
                    </form>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </section>
    </main>

    <?php include_once "includes/footer.php" ?>
  </body>
</html>