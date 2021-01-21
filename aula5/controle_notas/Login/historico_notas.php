<?php
require "menu.php";
require "validar_acesso.php";
?>
<?php
//arrays de notas
$notas = array();

$arquivo = fopen('arquivo_cadastro_nota.txt', 'r');
//feof - testa pelo fim do arquivo, ou seja, ela percorre
//o arquivo até encontrar o fim dele

//fgets: Lê uma linha de um ponteiro(cursor) de arquivo
while (!feof($arquivo)) {
  $registro = fgets($arquivo);
  $notas[] = $registro;
}
fclose($arquivo);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

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
</head>

<body>
  <div class="container">
    <div class="box">
      <div class="card">

        <div class="card text-center black-text">
          <h5 class="card-header">Histórico de Notas</h5>
        </div>

        <table class="table table-success">
          <tr class="table-primary">
            <th>Nome do(a) Aluno(a)</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Média</th>

          </tr>
          <?php foreach ($notas as $nota) {
            $dados_notas = explode('#', $nota);
            if (count($dados_notas) < 4) {
              continue;
            }  ?>

            <tr>
              <?php if ($dados_notas[3] < 7) {

                echo "<td class='table-danger'>";
                echo $dados_notas[0];
                echo "</td>";
                echo "<td class='table-danger'>";
                echo $dados_notas[1];
                echo "</td>";
                echo "<td class='table-danger'>";
                echo $dados_notas[2];
                echo "</td>";
                echo "<td class='table-danger'>";
                echo $dados_notas[3];
                echo "</td>";
              } else {
                echo "<td>";
                echo $dados_notas[0];
                echo "</td>";
                echo "<td>";
                echo $dados_notas[1];
                echo "</td>";
                echo "<td>";
                echo $dados_notas[2];
                echo "</td>";
                echo "<td>";
                echo $dados_notas[3];
                echo "</td>";
              } ?>
            </tr>
      </div>
    <?php } ?>
    </table>
    </div>
    <a type="button" class="btn btn-primary" href="home.php">Voltar</a>
  </div>

</body>

</html>