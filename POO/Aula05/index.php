<?php 
require_once "Videogame.php";

$videogame = new Videogame();

$videogame -> nome  = "Playstation 5";
$videogame -> ano = "2020 ";
$videogame -> jogo = "God of War";
$videogame -> plataforma = "Playstation";
$videogame -> ligando = true;

$videogame -> jogando();

print_r($videogame);




?>