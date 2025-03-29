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
            $v = array (
                "nome" => "Maria",
                "idade" => 20,
                "peso" => 50
            );
foreach ($v as $k => $c) {
echo "$k => $c <br>";
}
            
            ?>
        </pre>
    </div>
</body>
</html>