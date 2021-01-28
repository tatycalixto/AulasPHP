<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script type="text/javascript" src="js/table.js"></script>
  <title>Tabela</title>
</head>

<body>
  <table class="table">
    <thead>
      <tr>

        <th scope="col">Produto</th>
        <th scope="col">Valor</th>
        <th scope="col">Quantidade</th>

      </tr>
    </thead>

    <tbody>
      <tr id="row1">

        <td id="produto1">Banana</td>
        <td id="preco1">0.25</td>
        <td id="qnt1">6</td>
        <td>
          <input type="button" id="edit_button1" value="Editar" onclick="edit_row('1')">
          <input type="button" id="save_button1" value="Salvar" onclick="save_row('1')">
          <input type="button" value="Deletar" onclick="delete_row('1')">
        </td>
      </tr>
      <tr id="row2">

        <td id="produto2">Mamão</td>
        <td id="preco2">2.50</td>
        <td id="qnt2">1</td>
        <td>
          <input type="button" id="edit_button2" value="Editar" onclick="edit_row('2')">
          <input type="button" id="save_button2" value="Salvar" onclick="save_row('2')">
          <input type="button" value="Deletar" onclick="delete_row('2')">
        </td>
      </tr>
      <tr id="row3">

        <td id="produto3">Cebola</td>
        <td id="preco3">3.00</td>
        <td id="qnt3">1</td>
        <td>
          <input type="button" id="edit_button3" value="Editar" onclick="edit_row('3')">
          <input type="button" id="save_button3" value="Salvar" onclick="save_row('3')">
          <input type="button" value="Deletar" onclick="delete_row('3')">
        </td>
      </tr>
    </tbody>
  </table>
</body>

</html>