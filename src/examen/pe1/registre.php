<?php
include_once "dades.php";

$missatge = "";

if (isset($_POST['usuari'])) {
    $usuari = $_POST['usuari'];
    $pass1 = $_POST['password'];
    $repetida = $_POST['repetida'];

    if ($pass1 != $repetida) {
        $missatge = "Les contrasenyes no coincideixen.";
    } else {
        $existeix = false;
        foreach ($_SESSION['usuaris'] as $u) {
            if ($u['usuari'] == $usuari) {
                $existeix = true;
            }
        }

        if ($existeix) {
            $missatge = "Aquest nom d'usuari ja existeix.";
        } else {
            $nou_id = count($_SESSION['usuaris']) + 1;
            
            $_SESSION['usuaris'][] = [
                "id" => $nou_id,
                "usuari" => $usuari,
                "password" => password_hash($pass1, PASSWORD_DEFAULT),
                "rol" => "jugador"
            ];

            $missatge = "Usuari registrat correctament! Ja pots iniciar sessió.";
        }
    }
}
?>

<!doctype html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registre</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>

    <?php include_once "includes/header.php" ?>

    <main class="contenidor">
      <section class="panell ample-mig">
        <h1>Registre de jugador</h1>
        <p class="subtitol">Crea un compte per poder jugar.</p>

        <?php if ($missatge != ""): ?>
          <div class="alerta"><?php echo $missatge; ?></div>
        <?php endif; ?>

        <form action="registre.php" method="post">
          <label class="camp">
            Nom d'usuari
            <input type="text" name="usuari" placeholder="Ex.: anna" required />
          </label>
          <label class="camp">
            Contrassenya
            <input type="password" name="password" required />
          </label>
          <label class="camp">
            Repeteix la contrassenya
            <input type="password" name="password2" required />
          </label>
          <button class="btn" type="submit">Registrar-me</button>
        </form>

        <p class="nota">
          Els nous comptes han de tenir sempre el rol de jugador.
        </p>
      </section>
    </main>

    <?php include_once "includes/footer.php" ?>
  </body>
</html>