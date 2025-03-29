<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculos PHP</title>
</head>
<body>

<?php
// Soma
$n1 = 3;
$n2 = 2;
$soma = $n1 + $n2;
echo "<h1>A soma entre $n1 e $n2 é igual a $soma</h1>";

// Subtração
$n3 = 4;
$n4 = 2;
$sub = $n3 - $n4;
echo "<h1>A subtração entre $n3 e $n4 é igual a $sub</h1>";

// Multiplicação
$n5 = 5;
$n6 = 5;
$mult = $n5 * $n6;
echo "<h1>A multiplicação entre $n5 e $n6 é igual a $mult</h1>"; // Adicionei o ponto e vírgula aqui

// Divisão
$n8 = 10;
$n7 = 2;
$div = $n8 / $n7;
echo "<h1>A divisão entre $n8 e $n7 é igual a $div</h1>";

$nota1 = 7;
$nota2 = 8;
$soma = ($nota1 + $nota2) / 2;

echo "<h1>A média entre $nota1 e $nota2 é igual a $soma</h1>";

$nota3 = $_GET["a"];
$nota4 = $_GET["b"];

echo "<h1>A média entre $nota3 e $nota4 é igual a " . ($nota3 + $nota4) / 2 . "</h1>";

?>

</body>
</html>