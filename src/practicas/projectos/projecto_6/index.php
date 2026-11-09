<?php
session_start();
include_once "funciones.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruleta Americana</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            background-color: #0f172a;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .ruleta-container {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .ruleta-container img {
            max-width: 90%;
            max-height: 85vh;
            width: auto;
            height: auto;
            object-fit: contain;
            filter: drop-shadow(0 0 25px rgba(0, 0, 0, 0.8));
        }

        .resultado-box {
            position: absolute;
            top: 25px;
            background: rgba(15, 23, 42, 0.9);
            color: #ffffff;
            padding: 12px 24px;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            font-weight: bold;
        }

        .panel-apuestas {
            position: absolute;
            bottom: 25px;
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 15px 25px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            gap: 20px;
            color: #ffffff;
        }

        .saldo-box {
            font-size: 1.1rem;
            font-weight: 600;
            color: #4ade80;
            background: rgba(0, 0, 0, 0.4);
            padding: 8px 14px;
            border-radius: 8px;
            border: 1px solid rgba(74, 222, 128, 0.2);
        }

        .form-apuesta {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .form-apuesta label {
            font-size: 0.95rem;
            color: #cbd5e1;
        }

        .form-apuesta input[type="number"],
        .form-apuesta select {
            background: #1e293b;
            border: 1px solid #334155;
            color: #fff;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 0.95rem;
            outline: none;
            transition: border-color 0.2s;
        }

        .form-apuesta input[type="number"]:focus,
        .form-apuesta select:focus {
            border-color: #38bdf8;
        }

        .btn-apostar {
            background-color: #2563eb;
            color: #ffffff;
            border: none;
            padding: 8px 18px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: background 0.2s, transform 0.1s;
        }

        .btn-apostar:hover {
            background-color: #1d4ed8;
        }

        .btn-apostar:active {
            transform: scale(0.97);
        }
    </style>
</head>
<body>

    <?php if (!empty($mensaje)): ?>
        <div class="resultado-box">
            <?= $mensaje ?>
        </div>
    <?php endif; ?>

    <div class="ruleta-container">
        <img src="assets/ruleta.png" alt="Ruleta Americana">
    </div>

    <div class="panel-apuestas">
        <div class="saldo-box">
            Saldo: $<span><?= $saldo ?></span>
        </div>
        <form action="" method="POST" class="form-apuesta">
            <label for="apuesta">Tu apuesta:</label>
            <input type="number" id="apuesta" name="monto" min="1" max="<?= $saldo ?>" placeholder="Monto" required>
            <select name="tipo_apuesta">
                <option value="">Selecciona opción</option>
                <option value="rojo">Rojo</option>
                <option value="negro">Negro</option>
                <option value="par">Par</option>
                <option value="impar">Impar</option>
            </select>
            <label for="numero">Número:</label>
            <input type="number" id="numero" name="Numero" min="0" max="36" placeholder="Número">
            <button type="submit" class="btn-apostar">Jugar</button>
            <a href="reset.php" class="btn-apostar" style="background-color: #dc2626;">Reiniciar Juego</a>
        </form>
    </div>
</body>
</html>