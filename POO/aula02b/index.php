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
$c1 -> modelo = "Bic Cristal";  
$c1 -> cor = "Azul";
$c1 -> rabiscar();
print_r($c1);


?>
</pre>
</body>
</html>