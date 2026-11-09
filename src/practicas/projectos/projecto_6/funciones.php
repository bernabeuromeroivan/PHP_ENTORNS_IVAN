<?php

include_once "numeros.php";

if (!isset($_SESSION['saldo'])) {
    $_SESSION['saldo'] = 1000;
}

$mensaje = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $apuesta = $_POST['monto'];
    $numeroElegido = $_POST['Numero'];
    $colorElegido = $_POST['tipo_apuesta'];
    $totalApostado = 0;
    if ($numeroElegido != "") {
        $totalApostado += $apuesta;
    }
    if ($colorElegido == "rojo" || $colorElegido == "negro") {
        $totalApostado += $apuesta;
    }
    if ($apuesta > 0 && $totalApostado <= $_SESSION['saldo']) {
        if ($numeroElegido != "") {
            $rand = array_rand($_SESSION['numeros']);
            $numeroGanador = $_SESSION['numeros'][$rand]['num'];
            if ($numeroElegido == $numeroGanador) {
                $ganancia = $apuesta * 4;
                $_SESSION['saldo'] += $ganancia;
                $mensaje .= "Has acertado el número. Ganaste $$ganancia. ";
            } else {
                $_SESSION['saldo'] -= $apuesta;
                $mensaje .= "Fallaste el número. Salió $numeroGanador. Perdiste $$apuesta. ";
            }
        }
        if ($colorElegido == "rojo" || $colorElegido == "negro") {
            $rand = array_rand($_SESSION['numeros']);
            $colorGanador = $_SESSION['numeros'][$rand]['color'];
            if ($colorElegido == $colorGanador) {
                $ganancia = $apuesta * 2;
                $_SESSION['saldo'] += $ganancia;
                $mensaje .= "Has acertado el color. Ganaste $$ganancia.";
            } else {
                $_SESSION['saldo'] -= $apuesta;
                $mensaje .= "Fallaste el color. Salió $colorGanador. Perdiste $$apuesta.";
            }
        }
    } else {
        $mensaje = "No tienes saldo suficiente o la apuesta no es válida.";
    }
}
$saldo = $_SESSION['saldo'];
?>