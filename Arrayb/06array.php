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
            $m = array (array (6,7,8),
            array (9,10,11),
            array (12,13,14));
            
            $m [0][1] = $m [2] [0];
            print_r ($m);
            ?>
        </pre>
    </div>
</body>
</html>