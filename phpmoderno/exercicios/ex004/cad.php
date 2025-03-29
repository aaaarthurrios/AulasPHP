<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <link rel="stylesheet" href="style.css">
    
</head>
<body>
<header>
    <h1>Resultado do Processamento</h1>
</header>
<main>
    <?php 
//var_dump($_GET);
//var_dump($_REQUEST); // $_GET e _$POST _$COOKIE

$nome = $_GET["nome"] ?? "sem nome" ;
$sobrenome = $_GET["sobrenome"] ?? "sem sobrenome";
echo "<p>e um prazer conhecer você, <strong>$nome $sobrenome! </strong> esse e meu site! </p>";
            ?>
            <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>

</main>
</body>
</html>