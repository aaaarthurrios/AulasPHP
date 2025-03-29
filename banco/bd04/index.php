<?php 
try{
$pdo = new PDO ("mysql:dbname=CARROSMODELOS;host=localhost","root","");

 
}catch(PDOException $e){
    
}
//------------------------Conexão----------------------------------------------


try{

 //--------------------------INSERT--------------------------------------------

    $res = $pdo->prepare("INSERT INTO carros(nome,modelo,marca,ano)
     VALUES (:n,:m,:ma,:a)");

    $res -> bindValue(":n", "Ferrari");
    $res -> bindValue(":m", "Portofino  ");
    $res -> bindValue(":ma", "Ferrari");
    $res -> bindValue(":a", "2021");
    $res -> execute();

    echo "Registro inserido com sucesso!";

}catch (PDOException $e){
    echo "Erro na inserção: " . $e->getMessage();
}




?>