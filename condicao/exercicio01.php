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
        $a = isset ($_GET["ano"])? $_GET["ano"]: 1900;
        $i =  date("Y") - $a;
        echo "Voce nasceu em $a e tera $i anos.";

        if($i >= 18){
            $v = "ja pode votar";
            $d = "ja pode dirigir";

        } else {
            $v = "não pode votar";
            $d = "não pode dirigir";
        }
        echo " Com essa idade voce $v e também $d ";




            ?>
            
<a href="../condicao/exercicio01.html">Voltar</a>
       
    </div>
</body>
</html>