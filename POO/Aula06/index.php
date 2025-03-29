<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skate</title>
</head>
<body>
    <h1>Skate</h1>

    <pre>

<?php 

require_once "skate.php";

$skate = new skate();


$skate -> shape = "Cruiser";
$skate -> cor = "Preto";
$skate -> rolamento = "A";

$skate -> flip = true;
$skate -> manobra();

print_r($skate);

echo "<br>";

$skate2 = new skate ();


$skate2 -> shape = "longboard";
$skate2 -> cor = "Azul";
$skate2 -> rolamento = "B";

$skate2 -> ollie = true;
$skate2 -> manobra2();

print_r($skate2);


?>




    </pre>
</body>
</html>