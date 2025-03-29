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
        require_once 'moto.php';
        
        $moto1 = new moto();

        $moto1 ->nome = "Honda";
        $moto1 ->color = "preto"; 
        $moto1 ->year = "2020";
        $moto1 ->km = "10000";
        $moto1 ->price = "100000";
        $moto1 ->correr = true;
        $moto1->run();
        
        print_r($moto1);
        
        echo "<br>";

        $moto2 = new moto();
    $moto2 -> nome = "Honda";
    $moto2 -> color = "preto";
    $moto2 -> year = "2020";
    $moto2 -> km = "10000";
    $moto2 -> price = "100000";
    $moto2 -> correr = false;
    $moto2->run();

    print_r($moto2);


     echo "<br>";

     $moto3 = new moto();
     $moto3 -> nome = " kawasaki NINJA 500";
     $moto3 -> color = " verde ";
     $moto3 -> year = "2025";
     $moto3 -> km = "10000";
     $moto3 -> price = "4319000 ";
     $moto3 -> correr = true;

    $moto3->run(); 

      print_r($moto3);
        ?>
    </pre>
</body>
</html>