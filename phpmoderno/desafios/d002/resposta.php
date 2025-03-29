<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de números aleatórios</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Numeros aleatórios</h1>
    
    <main>
    <p>
        <?php
    
        $num = mt_rand(1, 100);
        echo "O número sorteado foi <strong>$num</strong>";

        //rand(1, 100);
        ///mt_rand(1, 100);
        //random_int(1, 100);

        ?>
        </p>
    </main>
    <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    <button onclick="javascript:history.go(-1)">Voltar</button>
</body>
</html>