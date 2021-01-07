<!--isset: verifica de um determinado índice de um array qualquer
está setado. Podemos verificar a existência do índice antes de 
usá-lo-->
<?php if (isset($_GET['login']) &&  $_GET['login'] == 'erro') { ?>
  <div class="text-danger">
    Usuário ou senha inválido(s)
  </div>
<?php } ?>