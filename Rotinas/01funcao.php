<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     function soma  ( $a, $b){
        $s = $a + $b;

        echo "A soma vale $s";

     }
     
     soma(3,4);


     function subtrair ($c, $d){
        $s = $c - $d;

        echo "</br> A subtracao vale $s ";
     }
     
     subtrair(5,2);


     function mult ($e, $f){
        $s = $e * $f;

        echo "'</br> A multiplicacao e $s";


     }
        mult(5,5);

        ?>
</body>
</html>