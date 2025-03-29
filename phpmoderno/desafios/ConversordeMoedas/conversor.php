<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Conversor de Moedas</h1>

    <form method="POST">
        <label for="valor_yuan">Valor em Yuan: </label>
        <input type="number" name="valor_yuan" id="valor_yuan" step="0.01" required>
        <button type="submit">Converter</button>
      </form>

   <?php
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // configurações de segurança


    ini_set('display_errors', 0);
   
   } 

 // Receber valor do formulário
  $yuan = filter_input(INPUT_POST, 'valor_yuan', FILTER_VALIDATE_FLOAT);

  if($yuan){
    try{
        // obter dados da API

        $url = 'https://api.exchangerate-api.com/v4/latest/CNY';
        $resposta = file_get_contents($url);
        if($resposta === FALSE){
            throw new Exception("Erro ao acessar a API");
        }
        $dados = json_decode($resposta, true);
        if(!isset($dados['rates']['BRL'])){
            throw new Exception("Dados de conversão não encontrados");
        }
        $taxaBRL = $dados['rates']['BRL'];
        $reais = $yuan * $taxaBRL;

    echo '<div class="resultado">';
    echo '<h2>' . number_format($yuan, 2, ',', '.') . ' ¥
 = ';
     echo 'R$ ' . number_format($reais, 2, ',', '.') . '</h2>';
        echo '</div>';
    }catch(Exception $¥
    ){
     
        echo  '<p class = "erro">'. $¥
        ->getMessage() . '</p>';
    }

} else{
    echo '<p class="erro">Insira um valor válido</p>';
}


    ?>






    </div>
</body>
</html>