<?php
require_once "menu.php";
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
      <form>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nome</label>
          <input type="text" class="form-control">
          <div id="emailHelp" class="form-text">Digite o nome do(a) aluno(a)</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nota 1</label>
          <input type="number" step="any" class="form-control">
          <div id="emailHelp" class="form-text">Digite a nota do(a) aluno(a)</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nota 2</label>
          <input type="number" step="any" class="form-control">
          <div id="emailHelp" class="form-text">Digite a nota do(a) aluno(a)</div>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
    </div>
</body>

</html>