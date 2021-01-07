<?php
$usuario_auten = false;
/* método GET
print_r($_GET);
echo '<br/>';
echo $_GET['email'];
echo '<br/>';
echo $_GET['senha'];
*/



// método POST

/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
echo '<br/>';
echo $_POST['email'];
echo '<br/>';
echo $_POST['senha'];
*/



//usuários do sistema

$usuarios = array(
  array('email' => 'adm@teste.com', 'senha' => '123456'),
  array('email' => 'user@teste.com', 'senha' => 'abcdef'),
  array('email' => 'aluna@teste.com', 'senha' => '654321'),

);
//mostrar os dados
/*echo '<pre>';
print_r($usuarios);
echo '</pre>';
echo '<br/>';
*/
//verificar se só os users do array e os dados passados pelo usuário
/*foreach ($usuarios as $user) {
  print_r($user);
  echo 'usuário biblioteca: ' . $user['email'] . '/' .  $user['senha'];
  echo '<br/>';
  echo 'Usuário form (via post): ' . $_POST['email'] . '/' . $_POST['senha'];
  echo '<hr/>';
}*/

foreach ($usuarios as $user) {
  if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
    $usuario_auten = true;
  }
}

if ($usuario_auten) {
  echo "Usuário autenticado";
} else {
  //echo "Erro na autenticação do usuário";
  header('Location:index.php?login=erro'); //usada para enviar cabeçalho bruto
  //encaminhar a aplicação quando instrução for interpretada
}
