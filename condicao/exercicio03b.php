<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Média</title>
    <style>
        .container { max-width: 400px; margin: 20px auto; padding: 20px; }
        form { display: flex; flex-direction: column; gap: 10px; }
        input { padding: 5px; }
        .resultado { margin-top: 20px; padding: 10px; border-radius: 5px; }
        .aprovado { background-color: #d4edda; }
        .recuperacao { background-color: #fff3cd; }
        .reprovado { background-color: #f8d7da; }
    </style>
</head>
<body>
    <div class="container">
        <form method="GET">
            <label>Nota 1:
                <input type="number" name="nota1" step="0.1" min="0" max="10" required
                       value="<?= htmlspecialchars($_GET['nota1'] ?? '') ?>">
            </label>
            
            <label>Nota 2:
                <input type="number" name="nota2" step="0.1" min="0" max="10" required
                       value="<?= htmlspecialchars($_GET['nota2'] ?? '') ?>">
            </label>
            
            <button type="submit">Calcular Média</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['nota1'], $_GET['nota2'])) {
            $nota1 = (float)$_GET['nota1'];
            $nota2 = (float)$_GET['nota2'];
            $erros = [];

            // Validações
            if ($nota1 < 0 || $nota1 > 10) {
                $erros[] = "Nota 1 inválida (deve ser entre 0 e 10)";
            }
            
            if ($nota2 < 0 || $nota2 > 10) {
                $erros[] = "Nota 2 inválida (deve ser entre 0 e 10)";
            }

            if (empty($erros)) {
                $mediafinal = ($nota1 + $nota2) / 2;
                $classe = match(true) {
                    $mediafinal >= 8 => 'aprovado',
                    $mediafinal >= 5 => 'recuperacao',
                    default => 'reprovado'
                };
                
                echo "<div class='resultado $classe'>";
                echo "Aluno " . match($classe) {
                    'aprovado' => 'aprovado',
                    'recuperacao' => 'em recuperação',
                    'reprovado' => 'reprovado'
                } . " com média " . number_format($mediafinal, 1);
                echo "</div>";
            } else {
                echo "<div class='resultado reprovado'>" . implode("<br>", $erros) . "</div>";
            }
        }
        ?>
    </div>
</body>
</html>