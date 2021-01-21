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
        <div class="card text-center black-text">
          <h5 class="card-header">Menu</h5>
        </div>

        <div class="card-action">
          <a href="cadastro_notas.php">
            <img src="notas.svg " width="50px" height="50px" />
            Cadastrar Notas
          </a>
        </div>
        <div class="card-action">
          <a href="historico_notas.php">
            <img src="historico.svg" width="50px" height="50px" />
            Histórico de Notas
          </a>
        </div>
      </div>


    </div>
  </div>

</body>

</html>