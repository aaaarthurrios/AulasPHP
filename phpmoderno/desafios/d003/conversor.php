<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Conversor EUR para BRL</h1>
        
        <form method="POST">
            <label for="valor_euro">Valor em Euros:</label>
            <input type="number" name="valor_euro" id="valor_euro" step="0.01" required>
            <button type="submit">Converter</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Configurações de segurança
            ini_set('display_errors', 0);
            
            // Receber valor do formulário
            $euros = filter_input(INPUT_POST, 'valor_euro', FILTER_VALIDATE_FLOAT);

            if ($euros) {
                try {
                    // Obter dados da API
                    $url = 'https://api.exchangerate-api.com/v4/latest/EUR';
                    $resposta = file_get_contents($url);
                    
                    if ($resposta === FALSE) {
                        throw new Exception("Erro ao acessar a API");
                    }

                    $dados = json_decode($resposta, true);
                    
                    if (!isset($dados['rates']['BRL'])) {
                        throw new Exception("Dados de conversão não encontrados");
                    }

                    $taxaBRL = $dados['rates']['BRL'];
                    $reais = $euros * $taxaBRL;

                    echo '<div class="resultado">';
                    echo '<h2>' . number_format($euros, 2, ',', '.') . ' € = ';
                    echo 'R$ ' . number_format($reais, 2, ',', '.') . '</h2>';
                    echo '</div>';

                } catch (Exception $e) {
                    echo '<p class="erro">Erro na conversão: ' . $e->getMessage() . '</p>';
                }
            } else {
                echo '<p class="erro">Valor inválido! Digite um número.</p>';
            }
        }
        ?>
    </div>
</body>
</html>