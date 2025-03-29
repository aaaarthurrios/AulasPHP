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
        
        $v = array(2=> "A", 5=>"j", 0=> "M", 3 => "S", 4=> "z",6=> "T");  // Define an array with some values.
        print_r($v); // Print the original array.
       //array_pop($v);

      //sort($v); // Sort the array in ascending order.
       //rsort($v); // Sort the array in descending order.
    //asort($v); // Sort the array in ascending order, maintaining index association.  
   // ksort($v); // Sort the array in ascending order, maintaining index association. 

   krsort($v); // Sort the array in descending order, maintaining index association.

   
print_r($v);
  
        ?>
           </pre>
    </div>
</body>
</html>