<?php 

$arquivo = 'arquivo.txt';



$arquivoAberto = fopen($arquivo, 'a');

$conteudo = "Conteudo de teste \r\n";

//fwrite($arquivoAberto, $conteudo);



fclose($arquivoAberto);
echo "Arquivo criado com sucesso!";



?>