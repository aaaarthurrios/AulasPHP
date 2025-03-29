
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<pre>
<?php 

 class Videogame{

    public $nome;
    public $ano;
    public $jogo;
    public $plataforma;
    public $ligando;


    function jogando (){

        if($this -> ligando == true){
            echo  " jogando video game ";


        }else{
            echo "Não está ligado";
        }

        
    }
 }



?>
<pre>

</body>
</html>