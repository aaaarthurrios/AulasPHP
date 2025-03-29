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
$nome = isset ($_GET ["nome"]) ? $_GET["nome"] : ["não informado"];
$ano  = isset  ($_GET["ano"]) ? $_GET["ano"] :0;
$sexo =  isset ($_GET["sexo"]) ? $_GET["sexo"]: "[sem sexo]";
$idade = date ("Y") - $ano;
echo "<h1>Seu nome é $nome, você tem $idade anos e é do sexo $sexo</h1>";


?>
<a href="./02exercicio.html">Voltar</a>
</div>
</body>
</html>


