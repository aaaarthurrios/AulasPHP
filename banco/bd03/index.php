<?php
//------------------------Conexão-------------------------------
try {
    $pdo = new PDO("mysql:dbname=LOJAS;host=localhost", "root", "");
    //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Relata erros

} catch (PDOException $e) {
    //die("Erro de conexão: " . $e->getMessage());
}

//------------------------INSERT-------------------------------
try {
    // Método seguro (prepared statement)
    $res = $pdo->prepare("INSERT INTO loja(nome,telefone,email)
     VALUES (:n, :t, :e)");
    $res->bindValue(":n", "Microsoft");
    $res->bindValue(":t", "00000000");
    $res->bindValue(":e", "Microsoftteste@gmail.com");
    $res->execute();

    echo "Registro inserido com sucesso!";

} catch (PDOException $e) {
    echo "Erro na inserção: " . $e->getMessage();
}

