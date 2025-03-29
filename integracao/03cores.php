<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    // Verifica se os parâmetros foram enviados via GET
    $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto Generico";
    $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
    $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Formulário</title>
</head>
<body>
    <?php
    // Exibe o texto com o estilo aplicado
    echo "<span class='texto'>$txt</span>";
    ?>
</body>
</html>