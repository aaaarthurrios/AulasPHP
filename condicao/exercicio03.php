<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Média</title>
</head>
<body>
    <div>
        <?php 
        // Converter para números decimais
        $nota1 = isset($_GET["nota1"]) ? (float)$_GET["nota1"] : 7;
        $nota2 = isset($_GET["nota2"]) ? (float)$_GET["nota2"] : 8;
        
        $mediafinal = ($nota1 + $nota2) / 2;

        if ($mediafinal >= 8) {
            echo "Aluno aprovado com média " . number_format($mediafinal, 1);
        } elseif ($mediafinal >= 5 && $mediafinal < 8) {
            echo "Aluno em recuperação com média " . number_format($mediafinal, 1);
        } else {
            echo "Aluno reprovado com média " . number_format($mediafinal, 1);
        }
        ?>
    </div>
</body>
</html>