<?php
header('Access-Control-Allow-Origin: *');
require("conexao.php");
$id_usuario = $_SESSION['idusuario'];
$query_ = "SELECT * FROM notas WHERE ce_id_notas = '$id_usuario'ORDER BY nome_aluno ASC";
$result = $conn->query($query_);
$dados_alunos = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    //echo $row['nome_aluno'] . "|" . $row['senha'] . "|";
    $dados_alunos[] = $row['nome_aluno'] . '#' . $row['nota1'] . "#" . $row['nota2'] . "#" . $row['media'];
  }
} else {

  //header('Location:home.php?nota=erro1'); //usada para enviar cabeçalho bruto
  echo ("<script>
        window.alert('Você não possui notas cadastradas.')
        window.location.href='../Login/home.php';
    </script>");
}
$conn->close();
/*echo "<pre>";
print_r($dados_alunos);
echo "</pre>";*/
/*foreach ($dados_alunos as $nota) {
  $dados_notas = explode('#', $nota);
  echo "<br/>";
  echo "<pre>";
  print_r($dados_notas);
  echo "</pre>";
}*/
