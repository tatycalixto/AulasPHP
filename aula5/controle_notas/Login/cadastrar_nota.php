<?php
//ver o que vem do form
echo "<pre>";
print_r($_POST);
echo "</pre>";

//# é para separar os textos para depois mostrar no histórico
//PHP_EOL - armazena o sistema de quebra linha do 
//SO que está rodando a aplicação
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$media = ($nota1 + $nota2) / 2;
$media = round($media, 2); //arrendondar com duas casas decimais
$texto = $_POST['nome'] . '#' . $_POST['nota1'] .  '#' . $_POST['nota2'] . '#' . $media . PHP_EOL;
//abrindo, escrevendo e fechando o arquivo
$arquivo = fopen('arquivo_cadastro_nota.txt', 'a');
fwrite($arquivo, $texto);
fclose($arquivo);
header('Location:home.php');
