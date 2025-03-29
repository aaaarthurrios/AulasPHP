<?php 



try{
 $pdo = new PDO ("mysql:dbname=MOTOSMODELOS;host=localhost","root","");


}catch(PDOException $e){

    $resposta = $pdo -> prepare("INSERT INTO motos(nome,modelo,marca,ano,cor)
    VALUES(:n,:m,:ma,n,:c)");

 $resposta -> bindValue(":n", "Honda");
 $resposta -> bindValue(":m", "Titan");
 $resposta -> bindValue(":ma", "Honda");
 $resposta -> bindValue(":a", "2021");
 $resposta -> bindValue(":c", "Preto");
 $resposta -> execute();


echo "Registro inserido com sucesso!";


} catch (PDOException $e){
    
    echo "Erro na inserção: " . $e->getMessage();
}

?>