<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST" &&  isset( $_POST["accion"] ) && $_POST["accion"] === "reiniciar") {
    if (!isset( $_SESSION["usuari_actiu"] ) || $_SESSION["usuari_actiu"]["rol"] !== "admin") {
        header( "Location: login.php" );
        exit;
    }
    $_SESSION = [];
    session_destroy();

    } else {
        unset( $_SESSION["usuari_actiu"] );
        unset( $_SESSION["partida"] );
}
header( "Location: index.php" );
exit;