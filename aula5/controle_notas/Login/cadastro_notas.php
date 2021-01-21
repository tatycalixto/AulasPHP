<?php
require "menu.php";
require "validar_acesso.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
  <br />
  <div class="container">
    <div class="box">
      <div class="card ">
        <div class="card-content black-text">
          <span class="card-title">Cadastro de Notas</span>

        </div>

      </div>
      <form action="cadastrar_nota.php" method="POST">

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nome</label>
          <input name="nome" type="text" class="form-control">
          <div id="emailHelp" class="form-text">Digite o nome do(a) aluno(a)</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nota 1</label>
          <input name="nota1" type="number" step="any" class="form-control">
          <div id="emailHelp" class="form-text">Digite a nota do(a) aluno(a)</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nota 2</label>
          <input name="nota2" type="number" step="any" class="form-control">
          <div id="emailHelp" class="form-text">Digite a nota do(a) aluno(a)</div>
        </div>
        <a type="button" class="btn btn-primary" href="home.php">Voltar</a>
        <button type="submit" class="btn btn-success">Cadastrar</button>
      </form>
    </div>
</body>

</html>