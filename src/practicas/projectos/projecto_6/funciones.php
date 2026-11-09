<?php
include_once "numeros.php";


if (!isset($_SESSION['saldo'])) {
    $_SESSION['saldo'] = 1000;
}

$mensaje = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $apuesta = $_POST['monto'];
    $numeroElegido = $_POST['Numero'];
    $tipoElegido = $_POST['tipo_apuesta'];
    $colorElegido = $_POST['tipo_apuesta'];
    $totalApostado = 0;
    if ($numeroElegido != "") {
        $totalApostado += $apuesta;
    }
    if ($tipoElegido == "par" || $tipoElegido == "impar") {
        $totalApostado += $apuesta;
    }
    if ($apuesta > 0 && $totalApostado <= $_SESSION['saldo']) {
        $rand = array_rand($_SESSION['numeros']);
        $numeroGanador = $_SESSION['numeros'][$rand]['num'];
        if ($numeroElegido != "") {
            if ($numeroElegido == $numeroGanador) {
                $ganancia = $apuesta * 2;
                $_SESSION['saldo'] += $ganancia;
                $mensaje .= "Has acertado el número. Salió $numeroGanador. Ganaste $$ganancia. Has acertado la apuesta de $tipoElegido ";
            } else {
                $_SESSION['saldo'] -= $apuesta;
                $mensaje .= "Fallaste el número. Salió $numeroGanador. Perdiste $$apuesta. ";
            }
        }
        if ($tipoElegido == "par" || $tipoElegido == "impar") {
            if ($numeroGanador % 2 == 0) {
                $tipoGanador = "par";
            } else {
                $tipoGanador = "impar";
            }
            if ($tipoElegido == $tipoGanador) {
                $ganancia = $apuesta * 2;
                $_SESSION['saldo'] += $ganancia;
                $mensaje .= "Has acertado la apuesta de $tipoElegido. Ganaste $$ganancia.";
            } else {
                $_SESSION['saldo'] -= $apuesta;
                $mensaje .= "Fallaste la apuesta de par/impar. Salió $tipoGanador. Perdiste $$apuesta.";
            }
        }
    } else {
        $mensaje = "No tienes saldo suficiente o la apuesta no es válida.";
    }
    if ($colorElegido == "rojo" || $colorElegido == "negro") {
        $rand = array_rand($_SESSION['numeros']);
        $colorGanador = $_SESSION['numeros'][$rand]['color'] ?? "verde";
        if ($colorElegido == $colorGanador) {
            $ganancia = $apuesta * 2;
            $_SESSION['saldo'] += $ganancia;
            $mensaje .= "Has acertado el color. Ganaste $$ganancia.";
        } else {
            $_SESSION['saldo'] -= $apuesta;
            $mensaje .= "Fallaste el color. Salió $colorGanador. Perdiste $$apuesta.";
        }
    }
}
$saldo = $_SESSION['saldo'];
?>