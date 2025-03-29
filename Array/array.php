<?php 
$nomes = array("André", "Bruno", "Carlos", "Diego", "Eduardo");
$nomes = ["André", "Bruno", "Carlos", "Diego", "Eduardo"];



echo $nomes[0]; // André

echo $nomes[1]; // Bruno
// etc...   
$nomes[4]; // Eduardo
$nomes[5] = "Fernando"; // Exemplo 1
$nomes[] = "Gabriel"; // Exemplo 2
$nomes[60] = "Henrique"; // Exemplo 3


// Exemplo 4
$cesta = [
	'banana' => 12,
	'laranja' => 6,
	'abacaxi' => 2
]; // Fim do exemplo 4
$cesta['uva'] = 1; // Exemplo 5



?>