<?php

require "menu.php";
require "validar_acesso.php";


?>

<html>

<head>


</head>

<body>


  <div class="container">
    <div class="row">


    </div>

    <div class="card-pegar-livro">
      <div class="card">
        <div class="card-header">
          <p style="color:black;">Pegar Livro</p>
        </div>
        <div class="card-body">
          <div class="row">


            <form action="registra_livro.php" method="post">
              <div class="form-group ">
                <p style="color:black;">Título</p>
                <!--<input type="text" class="form-control" placeholder="Título">-->
                <select name="titulo" class="form-control">
                  <option value="" disabled selected>Escolha o título do livro</option>
                  <option>Ionic 4</option>
                  <option>Turbine seu CSS</option>
                  <option>A Jornada do empreendedor</option>
                  <option>MongoDB</option>
                  <option>User Experience Design</option>
                </select>
              </div>
              <p style="color:black;">Tema</p>
              <div class="input-field ">

                <!--class="form-control"-->
                <select name="tema" class="form-control">
                  <option value="" disabled selected>Escolha o tema do livro</option>
                  <option>Mobile</option>
                  <option>Front-end</option>
                  <option>Business</option>
                  <option>Infraestrutura</option>
                  <option>Design e UX</option>
                </select>
              </div>


              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>

                <div class="col-6">
                  <button class="btn btn-lg btn-info btn-block" type="submit">Pedir</button>
                </div>
              </div>
            </form>


          </div>
        </div>
      </div>
    </div>
</body>

</html>