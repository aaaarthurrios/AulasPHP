<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>

<body>
   <h1>POO CARROS</h1> 

   
<pre>
<?php 

require_once 'carro.php';

$car1 = new Carro();


$car1-> nome = "Porshe";
$car1-> cor = "Roxo";
$car1-> ano = 2020;
$car1-> modelo = "Taycan";

$car1->correr = true;
$car1 -> gasolina();


$car2 = new Carro();

$car2-> nome = "volkwagen golf";
$car2-> cor = "prata";
$car2-> ano = 2015;
$car2-> modelo = "Golf";

echo "<br>";
$car2->correr = false;
$car2-> gasolina();


echo "<br>";

$car3 = new Carro();
$car3-> nome = "Honda Civic";
$car3-> cor = "preto";
$car3-> ano = 2018;
$car3-> modelo = "Civic";

$car3->correr = true;
$car3-> gasolina();   
print_r($car1);
print_r($car2);
print_r($car3);



?>
</pre>
</body>
</html>