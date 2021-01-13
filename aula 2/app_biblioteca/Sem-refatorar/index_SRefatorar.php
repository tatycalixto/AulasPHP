<html>

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="icone.ico" />
  <title>Biblioteca Digital</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style>
    .card-login {
      padding: 30px 0 0 0;
      width: 350px;
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

      <div class="card-login">
        <div class="card">
          <div class="card-header">
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
                  Para acessar é preciso se autenticar.
                </div>
              <?php } ?>


              <button class="waves-effect waves-light btn-large blue lighten-3" type="submit">Cadastrar</button>


            </form>
          </div>
        </div>
      </div>
    </div>
</body>

</html>