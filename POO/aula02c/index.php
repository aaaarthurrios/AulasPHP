
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
require_once 'Caneta.php';
    
    $c1 =  new Caneta("BIC", "Azul", 0.5);
    $c2 = new   Caneta ("KKKK", "verde", 1.0);

    //$c1 ->setModelo("BIC");
    //$c1 ->setponta("0.5");

//$c1 -> modelo = "NIC";


    //$c1 ->setModelo("BIC");
$c1 -> getModelo();
    //print_r($c1);
    //print_r($c2);
    

    //echo "Eu tenho uma caneta  {$c1->getModelo()} de ponta {$c1->getPonta()}"; 
    
    
    
    
    
    ?>
    </pre>
</body>
</html>




</body>
</html>