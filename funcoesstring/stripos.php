<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
  $frase = "O rato roeu a roupa do rei de roma";
  $pos = stripos($frase, "RATO");
  echo " $frase <br> A palavra 'rato' foi encontrada na posição: $pos";
    
    ?>
</body>
</html>