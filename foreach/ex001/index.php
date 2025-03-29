<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach 01</title>
</head>
<body>
    <pre>
    <h1>Foreach 01</h1>
 <?php 
 


 $nome = array (

  "luan", "bruno", "carlos", "diego", "eduardo",
 );
 
 
 print_r($nome);


 echo "<br>";
echo "<br>";

 foreach($nome as $nome){
     echo $nome . "<br>";
 }
 
 ?>
 </pre>
</body>
</html>