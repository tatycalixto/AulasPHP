<?php
//ver o que vem do form
/*
echo "<pre>";
print_r($_POST);
echo "</pre>";*/

//# é para separar os textos para depois mostrar no histórico
//PHP_EOL - armazena o sistema de quebra linha do 
//SO que está rodando a aplicação
$texto = $_POST['nome'] . '#' . $_POST['email'] .  '#' . $_POST['senha'] . PHP_EOL;
//abrindo, escrevendo e fechando o arquivo
$arquivo = fopen('arquivo_cadastro.txt', 'a');
fwrite($arquivo, $texto);
fclose($arquivo);
header('Location:home.php');
