<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>valor</title>
</head>
<body>
    <div> 
    <?php 
    
$valor = $_GET['v'];
$rq = sqrt($valor);
echo "A raiz de $valor e igual a ". number_format($rq,2);
    ?>

    <a href="01exercicio.html">Voltar </a>
</div>
</body>
</html>

