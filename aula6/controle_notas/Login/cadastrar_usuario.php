<?php
header('Access-Control-Allow-Origin: *');

require("conexao.php");
$email = $_POST['email'];
$query_ = "SELECT * FROM usuario WHERE email ='$email'";
$result = $conn->query($query_);
$registeredEmail = false;

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $registeredEmail = false;
    header('Location:cadastro.php?login=igual');
  }
} else {
  $registeredEmail = true;
}

if ($registeredEmail) {
  $stmt = $conn->prepare("INSERT INTO usuario (nome_usuario,email,senha) VALUES (?,?,?)");
  $stmt->bind_param("sss", $_POST['nome'], $_POST['email'], $_POST['senha']);
  $stmt->execute();
  $conn->close();
  echo ("<script>
        window.alert('Cadastro realizado com Sucesso!')
        window.location.href='../Login/index.php';
    </script>");
  //header('Location:index.php');
}
