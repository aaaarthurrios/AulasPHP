<?php
function IMC_Calculo($IMC) {
    // Verifica se o IMC é um número válido 
    if (!is_numeric($IMC) || $IMC <= 0) {
        echo "<p>Por favor, insira um valor de IMC válido.</p>";
        return;
    }

    // Array com as faixas de IMC e classificações - corrigido para evitar sobreposições
    $IMC_Tabela= [
        ["min" => 0,      "max" => 18.5,  "classificacao" => "Magreza"],
        ["min" => 18.5,   "max" => 24.9,  "classificacao" => "Saudável"],
        ["min" => 25.0,   "max" => 29.9,  "classificacao" => "Sobrepeso"],
        ["min" => 30.0,   "max" => 34.9,  "classificacao" => "Obesidade Grau I"],
        ["min" => 35.0,   "max" => 39.9,  "classificacao" => "Obesidade Grau II"],
        ["min" => 40.0,   "max" => 999.9, "classificacao" => "Obesidade Grau III"]
    ];

    $classificacao = "Não classificado"; // Valor padrão mais neutro

    // Percorre o array para encontrar a classificação correta
    foreach ($IMC_Tabela as $faixa) {
        if ($IMC >= $faixa["min"] && $IMC <= $faixa["max"]) {
            $classificacao = $faixa["classificacao"];
            break;
        }
    }

    // Exibe o resultado formatado
    echo "<p>Atenção, seu IMC é " . number_format($IMC, 2, '.', '') . ", e você está classificado como: " . $classificacao . "</p>";
}
?>

<form method="GET">
    <label for="campo_IMC">Digite o IMC</label>
    <input name="IMC_usuario" id="campo_IMC" type="number" placeholder="Ex.: 23.83" step=".01" required/>
    <button type="submit">Enviar</button>
</form>

<?php
if (isset($_GET['IMC_usuario'])) {
    IMC_Calculo($_GET['IMC_usuario']);
} 
?>