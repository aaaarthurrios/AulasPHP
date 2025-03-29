<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <pre>
        <?php
        
        $v = array("A","j", "M", "S", "z", "T");  // Define an array with some values.
        print_r($v); // Print the original array.
       //array_pop($v);

       array_push($v, "O");
       
print_r($v);
  
        ?>
           </pre>
    </div>
</body>
</html>