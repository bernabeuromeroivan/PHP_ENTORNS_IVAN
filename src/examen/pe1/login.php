<?php
include_once "dades.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuari'] ?? '';
    $contrasenya = $_POST['password'] ?? '';
    $login = false;

    foreach ($_SESSION['usuaris'] as $u) {
        if ($u['usuari'] === $usuario && password_verify($contrasenya, $u['password'])) {
            $_SESSION['usuari'] = $u['usuari'];
            $_SESSION['rol'] = $u['rol'];
            $login = true;
            break;
        }
    }

    if ($login) {
        header('Location: joc.php');
        exit;
    }
}
?>

<!doctype html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>

    <?php require_once "includes/header.php" ?>

    <main class="contenidor">
      <section class="panell ample-mig">
        <h1>Iniciar sessió</h1>
        <p class="subtitol">Accedeix com a jugador o administrador.</p>
        <form action="#" method="POST">
          <label class="camp"
            >Nom d'usuari<input name="usuari" type="text" required /></label
          ><label class="camp"
            >Contrasenya<input
              name="password"
              type="password"
              required /></label
          ><button class="btn" type="submit">Entrar</button>
        </form>
        <p class="nota">
          La versió PHP ha de verificar la contrasenya i redirigir segons el
          rol.
        </p>
      </section>
    </main>
    <?php include_once "includes/footer.php" ?>
  </body>
</html>
