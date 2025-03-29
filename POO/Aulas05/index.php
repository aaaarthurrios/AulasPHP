<?php 


$bicicleta = new Bicicleta();


$bicicleta -> nome = "Caloi";
$bicicleta -> cor = "Vermelha";
$bicicleta -> marca = "Caloi";
$bicicleta -> pedalando = true;

$bicicleta -> pedalar();

echo "<br>";

$bicicleta2 = new bicicleta();

$bicicleta2 -> nome = "Caloi2";
$bicicleta2 -> cor = "Vermelha";
$bicicleta2 -> marca = "Caloi";
$bicicleta2 -> pedalando = false;

$bicicleta2 -> pedalar();

echo "<br>";
$bicicleta3 = new bicicleta();

$bicicleta3 ->  nome = "Caloi";
$bicicleta3 -> cor = "Azul";
$bicicleta3 -> marca = "caloi";
$bicicleta3 -> pedalando = false;

$bicicleta3 -> pedalar();




?>