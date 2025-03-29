<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
         $frase = "A repetição é a mãe da retenção.";
         $novafrase = str_replace("mãe", "pai", $frase);
         echo "$novafrase";
            ?>
    </div>
</body>
</html>