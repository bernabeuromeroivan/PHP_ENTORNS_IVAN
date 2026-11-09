<?php
if (!isset($_SESSION['numeros'])) {
$_SESSION['numeros'] = [
        ["id" => 0,  "num" => "00"],
        ["id" => 1,  "num" => "0",  "color" => "verde"],
        ["id" => 2,  "num" => 1,    "color" => "rojo"],
        ["id" => 3,  "num" => 2,    "color" => "negro"],
        ["id" => 4,  "num" => 3,    "color" => "rojo"],
        ["id" => 5,  "num" => 4,    "color" => "negro"],
        ["id" => 6,  "num" => 5,    "color" => "rojo"],
        ["id" => 7,  "num" => 6,    "color" => "negro"],
        ["id" => 8,  "num" => 7,    "color" => "rojo"],
        ["id" => 9,  "num" => 8,    "color" => "negro"],
        ["id" => 10, "num" => 9,    "color" => "rojo"],
        ["id" => 11, "num" => 10,   "color" => "negro"],
        ["id" => 12, "num" => 11,   "color" => "negro"],
        ["id" => 13, "num" => 12,   "color" => "rojo"],
        ["id" => 14, "num" => 13,   "color" => "negro"],
        ["id" => 15, "num" => 14,   "color" => "rojo"],
        ["id" => 16, "num" => 15,   "color" => "negro"],
        ["id" => 17, "num" => 16,   "color" => "rojo"],
        ["id" => 18, "num" => 17,   "color" => "negro"],
        ["id" => 19, "num" => 18,   "color" => "rojo"],
        ["id" => 20, "num" => 19,   "color" => "rojo"],
        ["id" => 21, "num" => 20,   "color" => "negro"],
        ["id" => 22, "num" => 21,   "color" => "rojo"],
        ["id" => 23, "num" => 22,   "color" => "negro"],
        ["id" => 24, "num" => 23,   "color" => "rojo"],
        ["id" => 25, "num" => 24,   "color" => "negro"],
        ["id" => 26, "num" => 25,   "color" => "rojo"],
        ["id" => 27, "num" => 26,   "color" => "negro"],
        ["id" => 28, "num" => 27,   "color" => "rojo"],
        ["id" => 29, "num" => 28,   "color" => "negro"],
        ["id" => 30, "num" => 29,   "color" => "negro"],
        ["id" => 31, "num" => 30,   "color" => "rojo"],
        ["id" => 32, "num" => 31,   "color" => "negro"],
        ["id" => 33, "num" => 32,   "color" => "rojo"],
        ["id" => 34, "num" => 33,   "color" => "negro"],
        ["id" => 35, "num" => 34,   "color" => "rojo"],
        ["id" => 36, "num" => 35,   "color" => "negro"],
        ["id" => 37, "num" => 36,   "color" => "rojo"]
    ];
}

if(!isset($_SESSION['rojos'])){
    $_SESSION['rojos'] = [1, 3, 5, 7, 9, 12, 14, 16, 18, 19, 21, 23, 25, 27, 30, 32, 34, 36];
}

if(!isset($_SESSION['negros'])){
    $_SESSION['negros'] = [2, 4, 6, 8, 10, 11, 13, 15, 17, 20, 22, 24, 26, 28, 29, 31, 33, 35];
}
?>