<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach</title>
</head>
<body>
<?php $nomes = ["André", "Bruno", "Carlos", "Diego", "Eduardo"];?>
<ul>
	<li><?php echo $nomes[0] ?> </li>
	<li><?php echo $nomes[1] ?> </li>
	<li><?php echo $nomes[2] ?> </li>
	<li><?php echo $nomes[3] ?> </li>
	<li><?php echo $nomes[4] ?> </li>



    <?php $nomes = ["André", "Bruno", "Carlos", "Diego", "Eduardo"];?>
<ul>
	<?php for($i = 0; $i < 5; $i++){
		echo "<li>$nomes[$i]</li>";
}?>

<?php $nomes = ["André", "Bruno", "Carlos", "Diego", "Eduardo"];?>
<ul>
	<?php foreach($nomes as $nome){
		echo "<li>$nome</li>";
}?>

</ul>
</ul>
</ul>
</body>
</html>