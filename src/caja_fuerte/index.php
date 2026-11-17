<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resolución de Enigmas - Número 18</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 40px; }
        .contenedor { max-width: 450px; margin: auto; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        label { font-weight: bold; display: block; margin-top: 15px; }
        input[type="text"], input[type="number"] { width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box; }
        button { margin-top: 20px; width: 100%; padding: 10px; background-color: #007BFF; color: white; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        .resultado { margin-top: 20px; padding: 15px; background-color: #e9f7ef; border-left: 5px solid #28a745; }
    </style>
</head>
<body>

<div class="contenedor">
    <h2>Formulario de Enigmas</h2>
    
    <form method="POST" action="">
        <label for="numero">Número inicial:</label>
        <input type="number" id="numero" name="numero" value="18" required>

        <label for="enigma1">Respuesta Enigma 1:</label>
        <input type="text" id="enigma1" name="enigma1" placeholder="Ej: tirita" required>

        <label for="enigma2">Respuesta Enigma 2:</label>
        <input type="text" id="enigma2" name="enigma2" placeholder="Ej: npc" required>

        <button type="submit" name="enviar">Calcular Resultado</button>
    </form>

    <?php
    if (isset($_POST['enviar'])) {
        $numero = $_POST['numero'];
        $resp1 = $_POST['enigma1'];
        $resp2 = $_POST['enigma2'];

        $codigo_final = $numero + strlen($resp1) + strlen($resp2);

        echo "<div class='resultado'>";
        echo "<h3>Resultado obtenido:</h3>";
        echo "<p><strong>Número inicial:</strong> " . $numero . "</p>";
        echo "<p><strong>Enigma 1:</strong> " . $resp1 . "</p>";
        echo "<p><strong>Enigma 2:</strong> " . $resp2 . "</p>";
        echo "<p><strong>Tu nuevo número / código:</strong> " . $codigo_final . "</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>