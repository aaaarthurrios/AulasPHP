
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
            $n = $_REQUEST["num"] ??  0;
            $antecesor = $n -1;
            $sucessor = $n +1;

            echo "O número escolhido foi <strong>$n</strong>";
            echo "<br> O <em>antecessor</em> é $antecesor";
            echo "<br> O <em>sucessor</em> é $sucessor";


            ?>

            
        </p>
        
      <button onclick="javascript:history.go(-1)"	> &#x2B05; Voltar</button>
    </main>
</body>
</html>