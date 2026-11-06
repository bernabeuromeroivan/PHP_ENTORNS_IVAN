<?php
include_once "container.php";
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_SESSION['basuras'])) {
        foreach ($_SESSION['basuras'] as $index => $b) {
            $_SESSION['basuras'][$index]['elemento'] = 0;
        }
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['basura_index'])) {
        $index = $_POST['basura_index'];
        if (isset($_SESSION['basuras'][$index])) {
            if (!isset($_SESSION['basuras'][$index]['elemento'])) {
                $_SESSION['basuras'][$index]['elemento'] = 0;
            }
            if ($_SESSION['basuras'][$index]['elemento'] < 7) {
                $_SESSION['basuras'][$index]['elemento']++;
                if ($_SESSION['basuras'][$index]['elemento'] == 7) {
                    echo "El contenedor " .$_SESSION['basuras'][$index]['container'] . " " .  "esta lleno" ;
                }
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reciclaje</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }


        body {
            background-color: #f4f7f6;
            color: #333;
            padding-bottom: 2rem;
        }


        .grid-container {
            max-width: 900px;
            margin: 2rem auto;
            padding: 1.5rem;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            gap: 1.5rem;
        }


        .card-basura {
            background-color: #f9f9f9;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 0.5rem;
            text-align: center;
            overflow: hidden;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }


        .card-basura:hover {
            transform: translateY(-4px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }


        .card-basura img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 6px;
        }


        .lista {
            max-width: 900px;
            margin: 1.5rem auto;
            padding: 1rem 1.5rem;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.75rem;
        }


        .lista p {
            background-color: #e8f5e9;
            color: #2e7d32;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.95rem;
            border: 1px solid #c8e6c9;
        }


        .nombre {
            max-width: 900px;
            margin: 1.5rem auto;
            padding: 1.5rem;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
        }


        .nombre button {
            background-color: #2e7d32;
            color: #ffffff;
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.2s ease, transform 0.1s ease, box-shadow 0.2s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }


        .nombre button:hover {
            background-color: #1b5e20;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }


        .nombre button:active {
            transform: translateY(0);
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <?php include_once "includes/header.php"; ?>
    <div class="grid-container">
        <?php
        if (isset($_SESSION['basuras'])) {
            foreach ($_SESSION['basuras'] as $b) {
                $imagen =$b['img'] ;
                $nombre = $b['container'] ;
                echo '<div class="card-basura">';
                    $rand = array_rand($_SESSION['basuras']);
                    echo("<img src='{$_SESSION['basuras'][$rand]['img']}'>");
                echo '</div>';
            }
        }
        ?>
    </div>
    <div class="lista">
        <?php
        if (isset($_SESSION['basuras'])) {
            foreach ($_SESSION['basuras'] as $b) {
                $elemento = $b['elemento'] ;
                $nombre =$b['container'] ;
                echo '<p>' . $nombre . ' ' . $elemento . '/7</p>';
            }
        }
        ?>
    </div>
    <div class="nombre">
        <form method="POST" action="">
            <?php
            if (isset($_SESSION['basuras'])) {
                foreach ($_SESSION['basuras'] as $index => $b) {
                    $nombre = $b['container'];
                    echo '<button type="submit" name="basura_index" value="' . $index . '">';
                    echo $nombre;
                    echo '</button>';
                }
            }
            ?>
        </form>
    </div>
    <?php include_once "includes/footer.php"; ?>
</body>
</html>