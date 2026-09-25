<?php

echo 'Hola';
$edat = 24;
$asignatura = 10;

//Condicional simple
if($edat >= 18){
    echo (" Ets mayor de edat ");
}
else{
    echo (" Ets menor de edat ");
}

if($asignatura <= 10){
    echo (" Repites ");
}
else{
    echo (" Has aprobat ");
}
?>

<?php if ($edat >= 18):?>
    <p>Eres mayor de edat</p>
<?php else:?>
    <p>Eres menor de edat</p>
    <?php endif ?>