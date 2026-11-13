<?php
include_once "dades.php";

$incorrecto = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuari = $_POST['usuari'] ?? '';
    $password = $_POST['password'] ?? '';
    $loginCorrecto = false;

    foreach ($_SESSION['usuaris'] as $u) {
        if ($u['usuari'] === $usuari && password_verify($password, $u['password'])) {
            $_SESSION['usuari'] = $u['usuari'];
            $_SESSION['rol'] = $u['rol'];
            $loginCorrecto = true;
            break;
        }
    }

    if ($loginCorrecto) {
        header('Location: joc.php');
        exit;
    } else {
        $incorrecto = "Usuario o contraseña incorrectos.";
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
