<?php
session_start();
header('Access-Control-Allow-Origin: *');
//O Access-Control-Allow-Origin 
//cabeçalho de resposta indica se os recursos da 
//resposta podem ser compartilhados com a origin dada.
require("conexao.php");
$email = $_POST['email'];
$senha = $_POST['senha'];
$query_ = "SELECT * FROM usuario WHERE email ='$email' AND senha = '$senha'";
$result = $conn->query($query_);



if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    //echo $row['id_usuario'] . "|" . $row['senha'] . "|" . $row['nome_usuario'];
    $_SESSION['idusuario'] = $row['id_usuario'];
    $_SESSION['nome'] = $row['nome_usuario'];
    $_SESSION['autenticado'] = 'S';
    header('Location:home.php');
  }
} else {
  $_SESSION['autenticado'] = 'N';
  header('Location:index.php?login=erro1'); //usada para enviar cabeçalho bruto
}
$conn->close();
