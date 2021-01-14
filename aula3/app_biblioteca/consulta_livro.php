<?php
require "menu.php";
require "validar_acesso.php";
?>
<?php
//arrays de pedir livros
$chamados = array();

$arquivo = fopen('arquivo.txt', 'r');
//feof - testa pelo fim do arquivo, ou seja, ela percorre
//o arquivo até encontrar o fim dele

//fgets: Lê uma linha de um ponteiro(cursor) de arquivo
while (!feof($arquivo)) {
  $registro = fgets($arquivo);
  $chamados[] = $registro;
}
fclose($arquivo);
//só para visualziar o array de chamados

/*echo '<pre>';
print_r($chamados);
echo '</pre>';*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<style>
  .container {
    width: 100vw;
    height: 60vh;
    /*background: #6C7A89;*/
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
</style>

<body>


  <div class="container">
    <div class="box">
      <div class="card">
        <div class=" card-content black-text">
          <span class=" card-title">Consulta Livro</span>
        </div>
        <?php foreach ($chamados as $chamado) { ?>
          <div class="card-action">

            <div>
              <?php $chamado_dados = explode('#', $chamado);
              if (count($chamado_dados) < 2) {
                continue;
              }
              /*echo '<pre>';
              print_r($chamado_dados);
              echo '</pre>';*/
              ?>
              <!--<p>Titulo Livro</p>-->
              <p> Titulo: <?php echo $chamado_dados[0] ?> </p>
            </div>
            <div style="display:flex;">
              <p> Tema: <?php echo $chamado_dados[1] ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>

</body>

</html>