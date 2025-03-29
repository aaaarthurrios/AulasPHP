<?php
// Definindo a idade da pessoa
$idade = 18;

// Verificando se a pessoa é maior de idade
if ($idade >= 18) {
    echo "Você é maior de idade! Pode entrar.";
} else {
    echo "Você é menor de idade. Desculpe, não pode entrar.";
}
?>


<br>
<br>

<?php
$num = 10;

if ($num > 0) {
    echo "Número positivo";
} elseif ($num < 0) {
    echo "Número negativo";
} else {
    echo "Número é zero";
}

?>   