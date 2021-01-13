<?php
require_once "menu.php";
?>
<html>

<head>

</head>

<body>


  <div class="container">
    <div class="row">

      <div class="card-login">
        <div class="card">
          <div class="card-header grey">
            Login
          </div>
          <div class="card-body">

            <form action="login.php" method="post">
              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input name="senha" type="password" class="form-control" placeholder="Senha">
              </div>
              <?php if (isset($_GET['login']) &&  $_GET['login'] == 'erro') { ?>
                <div class="text-danger">
                  Usuário ou senha inválido(s)
                </div>
              <?php } ?>

              <?php if (isset($_GET['login']) &&  $_GET['login'] == 'erro2') { ?>
                <div class="text-danger">
                  Faça o login para acessar a página
                </div>
              <?php } ?>
              <button class="waves-effect waves-light btn-large blue lighten-3" type="submit">Entrar</button>


            </form>
          </div>
        </div>
      </div>
    </div>
</body>

</html>