<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>
<body>
    <pre>
<?php 

//chamadaa da classe
require_once 'Caneta.php';

$c1 = new Caneta();
$c1-> destampar();
$c1->rabiscar();


$c1-> tampada = false;
$c1->cor = "Azul";
$c1->ponta = 0.5;


 



print_r($c1);

echo "<br>";

$c2 = new Caneta;
$c2->cor = "Vermelha";
$c2->ponta = 0.7;
$c2->tampar();

print_r($c2);


?>
</pre>
</body>
</html>