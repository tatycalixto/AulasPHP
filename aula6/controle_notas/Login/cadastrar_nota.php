<?php
session_start();
header('Access-Control-Allow-Origin: *');


require("conexao.php");
$nome = $_POST['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$media = ($nota1 + $nota2) / 2;
$media = strval(round($media, 2)); //arrendondar com duas casas decimais
$id_usuario = $_SESSION['idusuario'];
$stmt = $conn->prepare("INSERT INTO notas (ce_id_notas,nome_aluno,nota1,nota2,media) VALUES (?,?,?,?,?)");
$stmt->bind_param("issss", $id_usuario, $nome, $nota1, $nota2, $media);
$stmt->execute();
$conn->close();
echo ("<script>
        window.alert('Cadastro realizado com Sucesso!')
        window.location.href='../Login/home.php';
    </script>");
