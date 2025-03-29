<?php
$array = ["nome" => "João", "idade" => 25, "cidade" => "São Paulo"];

// Verifica se a chave "nome" existe
if (array_key_exists("nome", $array)) {
    echo "A chave 'nome' existe!";
} else {
    echo "A chave 'nome' não existe!";
}
// Saída: A chave 'nome' existe!

// Verifica se a chave "email" existe
if (array_key_exists("email", $array)) {
    echo "A chave 'email' existe!";
} else {
    echo "A chave 'email' não existe!";
}
// Saída: A chave 'email' não existe!








 ?>