<?php
include_once "dades.php";

if(!isset($_SESSION['username'])){
  header('Location: index.php');
}

if (!isset($_SESSION['actual'])) {
    $_SESSION['actual'] = 0;
    $_SESSION['punts'] = 0;
}

$missatge = "";

if (isset($_POST['resposta'])) {
    $actual = $_SESSION['actual'];
    if ($_POST['resposta'] == $_SESSION['preguntes'][$actual]['correcta']) {
        $_SESSION['punts']++;
        $missatge = "Correcte!";
    } else {
        $missatge = "Incorrecte!";
    }
    
    $_SESSION['actual']++;
}

$actual = $_SESSION['actual'];
$total = count($_SESSION['preguntes']);
?>

<!doctype html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Trivial</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>

    <?php include_once "includes/header.php" ?>

    <main class="contenidor">
      <section class="panell">
        <h1>Hola</h1>
        <p class="subtitol">Respon la pregunta i continua avançant.</p>
        
        <div class="estadistiques">
          <span><strong>Puntuació:</strong> <?php echo $_SESSION['punts']; ?> punts</span>
          <span><strong>Progrés:</strong> <?php echo $actual; ?> de <?php echo $total; ?></span>
          <span><strong>Pendents:</strong> <?php echo $total - $actual; ?></span>
        </div>

        <?php if ($actual < $total): ?>
          <?php $p = $_SESSION['preguntes'][$actual]; ?>
          
          <span class="etiqueta"><?php echo $p['categoria']; ?></span>
          <h2 style="margin-top: 15px"><?php echo $p['pregunta']; ?></h2>
          
          <form method="post" action="joc.php">
            <?php foreach ($p['opcions'] as $num => $opcio): ?>
              <label class="resposta">
                <input type="radio" name="resposta" value="<?php echo $num; ?>" required />
                <?php echo $opcio; ?>
              </label>
            <?php endforeach; ?>
            
            <button class="btn" type="submit">Comprovar resposta</button>
          </form>

        <?php else: ?>
          <h2>Joc acabat!</h2>
          <p>Has aconseguit <?php echo $_SESSION['punts']; ?> punts.</p>
        <?php endif; ?>

        <?php if ($missatge != ""): ?>
          <div class="alerta"><?php echo $missatge; ?></div>
        <?php endif; ?>

      </section>
    </main>

    <?php include_once "includes/footer.php" ?>
  </body>
</html>