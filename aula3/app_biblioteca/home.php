<?php
require "menu.php";
require "validar_acesso.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
</head>

<style>
  .container {
    width: 100vw;
    height: 50vh;
    background: #fff;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center
  }

  .box {
    width: 500px;
    height: 500px;
    background: #fff;
  }

  body {
    margin: 0px;
  }
</style>

<body>
  <div class="container">
    <div class="box">
      <div class="card ">
        <div class="card-content black-text">
          <span class="card-title">Menu</span>

        </div>
        <div class="card-action">
          <a href="pegar_livro.php">
            <img src="livro.svg" width="50px" height="50px" />
            Pedir Livro
          </a>
        </div>
        <div class="card-action">
          <a href="consulta_livro.php">
            <img src="historico.svg" width="50px" height="50px" />
            Consultar Livro
          </a>
        </div>
      </div>


    </div>
  </div>

</body>

</html>