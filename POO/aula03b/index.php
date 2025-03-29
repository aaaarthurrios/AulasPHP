<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <pre>

<?php

require_once 'carros02.php';

$c1 = new Carro02("VECTRA ", "EXPRESSION ", "Preto", 2009);

$c2 = new Carro02("GOLF", "GTI ", "Cinza", 2014);

$c3 = new Carro02("CORSA", "CLASSIC", "PRATA", 2008);

$c4 = new Carro02("Corolla", " XEi", "Cinza Celestial", 2025);

print_r($c2);
print_r($c1);
print_r($c3);
print_r($c4);

//$c2->setNome("fusca");
//$c2-> setAno(2005);


//echo  " O carro e um {$c2->getNome()} e o ano e {$c2->getAno()}";



?>


</pre>
</body>

</html>