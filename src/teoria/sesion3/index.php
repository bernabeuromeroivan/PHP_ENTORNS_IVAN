<?php
//Array 1
$array = [1, 2, "Santiago", 4, 5];
//Array 2
$alumne = [
    "Nom" => 'Albert',
    "Edad" => 31
];
//Array 3
$alumnos = [
    [
        "Nombre" => 'Paco',
        "Apellido" => 'Porras',
        "Edad" => 15
    ],
    [
        "Nombre" => 'Robert',
        "Apellido" => 'Ramirez',
        "Edad" => 19     
    ]
];


//Manera 1 de printear un array o lista Print_r
echo '<pre>';
print_r($array);
echo '</pre>';
//Manera 2 de printear un array o lista Var Dump
echo '<pre>';
var_dump ($array);
echo '</pre>';

echo '<pre>';
var_dump($alumne);
echo '</pre>';

echo '<pre>';
var_dump($alumnos);
echo '</pre>';

echo '<pre>';
print_r($alumnos);
echo '</pre>';

foreach($alumnos as $id=>$alumnos):?>
<div>
    <h1><?= $id ?></h1>
    <h2><?= $alumnos["Nombre"] ?></h2>
    <a href="index2.php?id=<?= $id ?> ">Link</a>
</div>
<?endforeach?>