<?php
require_once "validar_acesso.php";
?>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <title>Biblioteca Digital</title>

  <style>
    .card-pegar-livro {
      padding: 30px 0 0 0;
      width: 50%;
      margin: 0 auto;
    }
  </style>

</head>

<body>

  <nav>
    <div class="nav-wrapper blue lighten-3">
      <a href="#" class="brand-logo">
        <img src="Biblioteca digital.png" width="40" height="40" class="d-inline-block align-top" alt="">
        Biblioteca Digital
      </a>

    </div>
  </nav>

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


            <form>
              <div class="form-group ">
                <p style="color:black;">Título</p>
                <!--<input type="text" class="form-control" placeholder="Título">-->
                <select class="form-control">
                  <option value="" disabled selected>Escolha o título do livro</option>
                  <option>Ionic 4</option>
                  <option>Turbine seu CSS</option>
                  <option>A Jornada do empreendedor</option>
                  <option>MongoDB</option>
                  <option>User Experience Design</option>
                </select>
              </div>
              <p style="color:black;">Categoria</p>
              <div class="input-field ">

                <!--class="form-control"-->
                <select class="form-control">
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
                  <button class="btn btn-lg btn-warning btn-block" type="submit">Voltar</button>
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