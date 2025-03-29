<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
            $nome = "Maria"; 
            $novo = str_pad ($nome, 30, ".", STR_PAD_RIGHT);
            echo "$novo";
            ?>
    </div>
</body>
</html>