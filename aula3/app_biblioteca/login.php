<?php
//startar a sessão deve ficar antes de 
//qualquer impressão de dados no navegador (echo)
session_start();
$usuario_auten = false;

$usuarios = array(
  array('email' => 'adm@teste.com', 'senha' => '123456'),
  array('email' => 'user@teste.com', 'senha' => 'abcdef'),
  array('email' => 'aluna@teste.com', 'senha' => '654321'),

);

foreach ($usuarios as $user) {
  if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
    $usuario_auten = true;
  }
}

if ($usuario_auten) {
  $_SESSION['autenticado'] = 'SIM';
  header('Location:home.php');
} else {

  $_SESSION['autenticado'] = 'NAO';
  header('Location:index.php?login=erro'); //usada para enviar cabeçalho bruto
}
