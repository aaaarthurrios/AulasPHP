<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Voto</title>
</head>

<body>
    <div>
        <?php
        $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e terá $i anos. <br/>";

        if ($i < 16) {
            $tipovoto = "Não vota";
        } elseif (($i >= 16 && $i < 18) || ($i > 65)) {
            $tipovoto = "Voto opcional";
        } else {
            $tipovoto = "Voto obrigatório";
        }

        echo "Para essa idade, $tipovoto.";
        ?>

        <br>
        <a href="../condicao/exercicio02.html">Voltar</a>
    </div>
</body>

</html>