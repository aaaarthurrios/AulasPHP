
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
/*
Esse exercicio é para mostrar o uso do operador de
 incremento e decremento
*/
    $atual = $_GET["aa"]; //Essa linha pega o ano atual
    echo "O ano atual é $atual e o ano anterior é " . --$atual;

    ?>
</body>
</html>