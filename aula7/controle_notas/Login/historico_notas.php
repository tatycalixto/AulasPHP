<?php
require "menu.php";
require "notas_alunos.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="js/tabela3.js"></script>

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
  <br />
  <br />
  <div class="container">
    <div class="box">
      <div class="card">

        <div class="card text-center black-text">
          <h5 class="card-header">Histórico de Notas</h5>
        </div>
        <form action="salvar_modificacao.php" method="POST">
          <table id="tblCadastro" class="table table-success">
            <thead>
              <tr class="table-primary">
                <th>Nome do(a) Aluno(a)</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Média</th>
                <th>Editar</th>
              </tr>
            <tbody>
              <?php $cont = 0;
              foreach ($dados_alunos as $nota) {
                $dados_notas = explode('#', $nota);



              ?>


                <tr>
                  <?php $a = array();
                  if ($dados_notas[3] < 7) {
                    //$cont++;

                    echo "<td name ='nome'class='table-danger'>";
                    echo $dados_notas[0];
                    echo "</td>";
                    echo "<td name='nota1' class='table-danger'>";
                    echo $dados_notas[1];
                    echo "</td>";

                    echo "<td name='nota2' class='table-danger'>";
                    echo $dados_notas[2];
                    echo "</td>";
                    echo "<td name='media' class='table-danger'>";
                    echo $dados_notas[3];
                    echo "</td>";

                    echo "<td  class='table-danger'>";
                    echo "<i class='fa fa-pencil btnEditar' aria-hidden='true'<input type='button' ></i>";
                    echo "</td>";
                    //echo $dados_notas[4];
                    echo "<input type='hidden' name='id-notas' value='" .  $dados_notas[4] . "'/>";
                  } else {

                    echo "<td name ='nome_apro'>";
                    echo $dados_notas[0];
                    echo "</td>";
                    echo "<td name='nota1_apro'>";
                    echo $dados_notas[1];
                    echo "</td>";

                    echo "<td name='nota2_apro'>";
                    echo $dados_notas[2];
                    echo "</td>";
                    echo "<td name='media_apro'>";
                    echo $dados_notas[3];
                    echo "</td>";
                    echo "<td>";
                    echo "<i class='fa fa-pencil btnEditar_apro' aria-hidden='true'<input type='button' ></i>";
                    echo "</td>";
                    //echo $dados_notas[4];
                    echo "<input type='hidden' name='id-notas_apro" . $dados_notas[4] . "' value='" .  $dados_notas[4] . "'/>";
                  }
                  ?>




                <?php } ?>

                </tr>


                </thead>

            </tbody>
          </table>
      </div>
      <a type="button" class="btn btn-primary" href="home.php">Voltar</a>
      <!--<button type="submit" class="btn btn-success">Salvar</button>-->

      <button class="btn btn-primary" name="teste" id="teste" hidden="hidden">teste</teste>
        </form>
    </div>


  </div>

</body>


</html>