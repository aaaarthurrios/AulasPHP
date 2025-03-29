<?php
//Criando a conexão com o banco de dados pdo
//$pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost","root","");
//dbname
//host
//usuario e senha
//------------------------Conexão-------------------------------
try {
    $pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost","root","");
   
} catch (PDOException $e) {
    echo "Erro com banco de dados:".$e->getMessage();
}    
catch (Exception $e) {
    echo "Erro generico: " . $e->getMessage();
}

//------------------------INSERT-------------------------------
//1 forma (usando prepared statements - mais seguro):
//$res = $pdo->prepare("INSERT INTO pessoa(nome,telefone,email) VALUES (:n, :t, :e)");
//$res->bindValue(":n", "Miriam");
//$res->bindValue(":t", "000000000");
//$res->bindValue(":e", "teste@gmail.com");
//$res->execute();

//2 forma (query direta - menos segura):
//$pdo->query("INSERT INTO pessoa(nome,telefone,email) VALUES ('Miriam', '00000000','teste@gmail.com')");


//------------------------DELETE E UPDATE-------------------------------


//$resposta = $pdo -> prepare("DELETE FROM pessoa WHERE id = :id"); 
//$id = 11;
//$resposta ->bindValue(":id", $id);
//$resposta ->execute();

//$resposta = $pdo -> query("DELETE FROM pessoa WHERE id = '12' ");

//$pdo->query("UPDATE pessoa SET  email = 'Miriamteste@gmail.com'  WHERE id =
//'13'");


//$resposta = $pdo -> prepare("UPDATE pessoa SET email  = :e WHERE id = :id"); 
 
//$resposta ->bindValue(":e", "Miriamteste12@gmail.com");
//$resposta ->bindValue(":id", 13);
//$resposta ->execute();

//--------------------------SELECT-------------------------------

$resposta = $pdo -> prepare("SELECT * FROM pessoa WHERE id = :id");
$resposta ->bindValue(":id", 13);
$resposta ->execute();
$resultado = $resposta ->fetch(PDO::FETCH_ASSOC);
// para que serve  para pegar todos os dados do banco de dados e transformar em um array

$resposta -> fetch(); // unica linha do banco de dados 
//$resposta  -> fetchAll(); // // todas as linhas do banco de dados

foreach($resultado as $key => $value){
echo $key. ": ". $value. "<br>";
}






?>