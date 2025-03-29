<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Conversor de Moedas</h1>
    <main>
        
<?php 
$cotacao = 5.15;

//Quantos reais eu tenho?

$real = 1000;

//Equivalente em dolar

$dolar = $real / $cotacao;

//mostrar na tela


//echo "Seus R\$". number_format($real, 2). " equivalem a US\$". number_format($dolar, 2);	



// Formatacao de moedas com internacionalizacao

$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

echo "Seus ". numfmt_format_currency($padrao,$real, "BRL"). " equivalem a ". numfmt_format_currency($padrao,$dolar, "USD");	

?>
</main>
<button onclick="history.go(-1)"> Voltar </button>
</body>
</html>