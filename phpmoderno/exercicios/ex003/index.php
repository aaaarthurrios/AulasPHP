<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <pre>
    <h1>Teste de tipos primitivos</h1>
    <?php

    // 0x = hexadecimal 0b = binário 0 = Octal
    //$num = 0x10; // Em hexadecimal
    //echo "O valor da variável é $num";


   // $v = 300;
    //var_dump($v);

    //$num = (integer)3e2; // 3 x 10(2)
    //echo "O valor é $num";
    

    //$num = (int) "950";
    //var_dump($num);  

    //$vet = [6.5, 2, "Maria", 3, "João"];
//var_dump($vet);

class pessoa{

public $nome;
    public $idade;
}
$p = new pessoa();
var_dump($p);
        ?>
    <pre>
    
</body>
</html>