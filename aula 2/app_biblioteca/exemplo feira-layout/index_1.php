<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Teste</title>
</head>

<body>
  <nav>
    <div class="nav-wrapper">
      <a href="google.com.br" class="brand-logo">No do seu site</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="menu1.php">Menu1</a></li>
        <li><a href="#">Menu2</a></li>
        <li><a href="#">Menu3</a></li>
      </ul>
    </div>
  </nav>
  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
          <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Nome do botão

      </button>
    </form>
  </div>

</body>

</html>