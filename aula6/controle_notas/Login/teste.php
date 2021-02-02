<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <script type="text/javascript">
    function valorProduto() {
      var total = 0;
      var num = document.getElementById("banana").value;
      total = 0.25 * num;
      document.getElementById("valortotal").textContent = "Valor da Compra R$" + total;
    }
  </script>
</head>

<body>




  <form action="teste.php">
    <p id="valortotal"> Valor da compra 0.25</p>

    <input id="banana" type="number" onblur="valorProduto();">
    <button>Comprar</button>

  </form>
</body>

</html>