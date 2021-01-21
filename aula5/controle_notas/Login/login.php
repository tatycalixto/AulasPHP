<?php
session_start();
$usuario_auten = false;

$usuarios = array();

$arquivo = fopen('arquivo_cadastro.txt', 'r');
//feof - testa pelo fim do arquivo, ou seja, ela percorre
//o arquivo até encontrar o fim dele

//fgets: Lê uma linha de um ponteiro(cursor) de arquivo
while (!feof($arquivo)) {
  $registro = fgets($arquivo);
  $usuarios[] = $registro;
}

fclose($arquivo);

foreach ($usuarios as $usuario) {

  $dados_usuario = explode('#', $usuario);
  if (count($dados_usuario) < 3) {
    continue;
  }
  if ($dados_usuario[1] == $_POST['email'] && $dados_usuario[2]  == $_POST['senha']) {
    $usuario_auten = true;
  }
}

if ($usuario_auten) {
  $_SESSION['autenticado'] = 'S';
  header('Location:home.php');
} else {
  $_SESSION['autenticado'] = 'N';
  header('Location:index.php?login=erro1'); //usada para enviar cabeçalho bruto
}
