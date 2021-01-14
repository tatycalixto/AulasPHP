<?php
//ver o que vem do form
/*echo "<pre>";
print_r($_POST);
echo "</pre>";*/

//# é para separar os textos para depois mostrar no histórico
//PHP_EOL - armazena o sistema de quebra linha do 
//SO que está rodando a aplicação
$texto = $_POST['titulo'] . '#' . $_POST['tema'] . PHP_EOL;
//abrindo, escrevendo e fechando o arquivo
$arquivo = fopen('arquivo.txt', 'a');
fwrite($arquivo, $texto);
fclose($arquivo);
header('Location:home.php');
