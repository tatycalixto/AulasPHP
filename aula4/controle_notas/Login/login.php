<?php
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
  header('Location:home.php');
  //print_r($_POST);
} else {

  header('Location:index.php?login=erro'); //usada para enviar cabeçalho bruto
}
