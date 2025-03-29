<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Formulário</title>
</head>
<body>
    <div>
        
    <?php 
  $nome = isset ($_GET["nome"]) ? $_GET["nome"]: ["Não informado"];
  $ano = isset ($_GET["ano"]) ? $_GET["ano"]: 0;
  $marca = isset ($_GET["marca"])? $_GET["marca"] : ["Sem marca"];

  echo "<h1>nome do carro $nome, marca  $marca ano $ano</h1>";

   ?>

        <br><br>
        <a href="./04exercicio.html">Voltar</a>
    </div>
</body>
</html>