<?php $cesta = ["banana" => 12, "laranja" => 6, "abacaxi" => 2];

$cesta["uva"] = 1;
?>

<ul>
    <?php foreach($cesta as $fruta => $quantidade){
        echo "<li>$quantidade unidade(s) de $fruta </li>";
}?>
</ul>