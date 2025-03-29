

<?php

try {
    $pdo = new PDO("mysql:dbname=MERCADO;host=localhost", "root", "");
} catch (PDOException $e) {

    $resposta = $pdo->prepare("INSERT INTO frutas(nome,preco,kg,)VALUES(:n,:p,:k)");

    $resposta->bindValue(":n", "Banana");
    $resposta->bindValue(":p", "10");
    $resposta->bindValue(":k", 10);

    $resposta->execute();
} catch (PDOException $e) {
    echo "Erro na inserção: " . $e->getMessage();
}




try {
} catch (PDOException $e) {
    $resposta = $pdo->prepare("INSERT INTO frutas(nome,tipo,preco,kg) 
    VALUES(:n,:t,:p,:k");

    $resposta->bindvalue(":n", "morango");
    $resposta->bindvalue(":t", "Fruta");
    $resposta->bindvalue(":p", "10");
    $resposta->execute();
}
?>