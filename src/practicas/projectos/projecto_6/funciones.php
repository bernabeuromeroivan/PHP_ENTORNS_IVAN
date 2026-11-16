<?php
include_once "numeros.php";
if (!isset($_SESSION['saldo'])) {
    $_SESSION['saldo'] = 1000;
}
$mensaje = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $apuesta = $_POST['monto'] ?? 0;
    $numeroElegido = $_POST['Numero'] ?? '';
    $numerosElegidos = $_POST['numeros'] ?? '';
    $tipoElegido = $_POST['tipo_apuesta'] ?? '';
    $colorElegido = $_POST['color'] ?? '';
    if ($apuesta <= 0 || $apuesta > $_SESSION['saldo']) {
        $mensaje = "No tienes saldo suficiente o la apuesta no es válida.";
    } else {
        $rand = array_rand($_SESSION['numeros']);
        $numeroGanador = $_SESSION['numeros'][$rand]['num'];
        $ganancia = 0;
        $acertado = false;
        $multiplicador = 0;
        if ($tipoElegido == "numero") {
            if ($numeroElegido != "" && $numeroElegido == $numeroGanador) {
                $acertado = true;
                $multiplicador = 35;
            }
        } else if ($tipoElegido == "par") {
            if ($numeroGanador != 0 && $numeroGanador % 2 == 0) {
                $acertado = true;
                $multiplicador = 1;
            }
        } else if ($tipoElegido == "impar") {
            if ($numeroGanador % 2 != 0) {
                $acertado = true;
                $multiplicador = 1;
            }
        } else if ($tipoElegido == "rojo" || $tipoElegido == "negro") {
            $colorGanador = $_SESSION['numeros'][$rand]['color'] ?? 'verde';
            if ($tipoElegido == $colorGanador) {
                $acertado = true;
                $multiplicador = 1;
            }
        } else if ($tipoElegido == "caballo") {
            $numeros = explode(",", $numerosElegidos);
            if (in_array($numeroGanador, $numeros)) {
                $acertado = true;
                $multiplicador = 17;
            }
        } else if ($tipoElegido == "primeros18") {
            if (in_array($numeroGanador, $_SESSION['primeros18'])) {
                $acertado = true;
                $multiplicador = 1;
            }
        } else if ($tipoElegido == "ultimos18") {
            if (in_array($numeroGanador, $_SESSION['ultimos18'])) {
                $acertado = true;
                $multiplicador = 1;
            }
        } else if ($tipoElegido == "primeros12") {
            if ($numeroGanador >= 1 && $numeroGanador <= 12) {
                $acertado = true;
                $multiplicador = 2;
            }
        } else if ($tipoElegido == "segundos12") {
            if ($numeroGanador >= 13 && $numeroGanador <= 24) {
                $acertado = true;
                $multiplicador = 2;
            }
        } else if ($tipoElegido == "terceros12") {
            if ($numeroGanador >= 25 && $numeroGanador <= 36) {
                $acertado = true;
                $multiplicador = 2;
            }
        } else if ($tipoElegido == "primeracolumna") {
            if (in_array($numeroGanador, $_SESSION['primeracolumna'])) {
                $acertado = true;
                $multiplicador = 2;
            }
        } else if ($tipoElegido == "segundacolumna") {
            if (in_array($numeroGanador, $_SESSION['segundacolumna'])) {
                $acertado = true;
                $multiplicador = 2;
            }
        } else if ($tipoElegido == "terceracolumna") {
            if (in_array($numeroGanador, $_SESSION['terceracolumna'])) {
                $acertado = true;
                $multiplicador = 2;
            }
        }
        $_SESSION['saldo'] -= $apuesta;
        if ($acertado) {
            $ganancia = $apuesta * $multiplicador;
            $_SESSION['saldo'] += $apuesta + $ganancia;
            $mensaje = "¡Has acertado! Salió el número $numeroGanador. Ganaste $ganancia puntos.";
        } else {
            $mensaje = "Has fallado. Salió el número $numeroGanador. Has perdido $apuesta puntos.";
        }
    }
}
$saldo = $_SESSION['saldo'];
?>