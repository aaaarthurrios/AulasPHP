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
class bicicleta{


    public $nome;
    public $cor;
    public $marca;
    public $pedalando;



    function pedalar(){

        if($this -> pedalando == true){
    echo "Está pedalando";
    
        }else{
            echo "Não está pedalando";
        }
    }
    

}



?>
</pre>
</body>
</html>