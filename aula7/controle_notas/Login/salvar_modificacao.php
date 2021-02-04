<?php
header('Access-Control-Allow-Origin: *');
require("conexao.php");
session_start();

if (isset($_POST['nota1'])) {
  $nota1 = ($_POST['nota1']);
}
if (isset($_POST['nota2'])) {
  $nota2 = ($_POST['nota2']);
}
if (isset($_POST['nome'])) {
  $nome = ($_POST['nome']);
}
if (isset($_POST['nota1_apro'])) {
  $nota1 = ($_POST['nota1_apro']);
}
if (isset($_POST['nota2_apro'])) {
  $nota2 = ($_POST['nota2_apro']);
}
if (isset($_POST['nome_apro'])) {
  $nome = ($_POST['nome_apro']);
  //echo "nome apro " . $nome;
}

$media = ($nota1 + $nota2) / 2;
$media = strval(round($media, 2));
$id_usuario = $_SESSION['idusuario'];

$query_ = "SELECT * FROM notas WHERE nome_aluno ='$nome'";
$result = $conn->query($query_);
$verificaUsuario = false;

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $verificaUsuario = true;
    $id = $row['id_notas'];
  }
} else {
  $verificaUsuario = false;
}

if ($verificaUsuario) {

  $stmt = $conn->prepare("UPDATE notas SET nota1=?, nota2=?, media=? WHERE ce_id_notas =? AND id_notas=?");
  $stmt->bind_param("sssii", $nota1, $nota2, $media, $id_usuario, $id);
  $stmt->execute();
  $conn->close();

  echo ("<script>
        window.alert('Modificação realizada com Sucesso!')
        window.location.href='../Login/historico_notas.php';
    </script>");
}
