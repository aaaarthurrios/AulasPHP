<?php
require_once "index.php";
$hostname = "localhost";
$bancodedados = "clientes";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);



if($mysqli->connect_errno){
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}else
    echo "Conexão efetuada com sucesso";

    ?>