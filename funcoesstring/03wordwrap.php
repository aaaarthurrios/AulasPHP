<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wordwrap Example</title>
</head>
<body>
    <?php
    $t = "Cria quebras de linha ou divisões em uma string em um tamanho especificado.";
    // Wrap text at 20 characters per line with <br> tags
    $r = wordwrap($t, 20, "<br>\n", true);
    echo $r;
    ?>
</body>
</html> 