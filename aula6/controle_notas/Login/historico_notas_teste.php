<?php
require "menu.php";
require "notas_alunos.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <script type="text/javascript" src="js/tabela.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <th></th>

            <?php foreach ($dados_alunos as $nota) {
              $dados_notas = explode('#', $nota);

            ?>


          <tr>
            <?php if ($dados_notas[3] < 7) {

                echo "<td id='qnt1' class='table-danger'>";
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
                /*echo "</td>";
                echo "<td id='qnt' class='table-danger'>";
                echo "<i class='fa fa-pencil' aria-hidden='true'<input type='button' id='edit_button1'  onclick='edit_row('1')'></i>";
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

                echo "<i class='fa fa-floppy-o' aria-hidden='true'<input type='button' id='save_button1' onclick='save_row('1')'></i>";
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo "<i class='fa fa-trash' aria-hidden='true'<input type='button' value='Deletar' onclick='delete_row('1')'></i>";
                echo "</td>";*/
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
                /*echo "<td> ";

                echo "<i class='fa fa-pencil' aria-hidden='true'<input type='button' id='edit_button1'  onclick='edit_row('1')'></i>";
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

                echo "<i class='fa fa-floppy-o' aria-hidden='true'<input type='button' id='save_button1' onclick='save_row('1')'></i>";
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo "<i class='fa fa-trash' aria-hidden='true'<input type='button' value='Deletar' onclick='delete_row('1')'></i>";
                echo "</td>";*/
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