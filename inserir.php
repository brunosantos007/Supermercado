<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


<div class="container">
  <h2>Inserir Produtos</h2>
  <form action="codigo.php" method="POST">
    <input type="hidden" name="type" value="nome">
    <div class="form-group">
      <label for="email">Nome:</label>
      <input type="text" class="form-control" id="email" placeholder="Adicione o Nome" name="nome">
    </div>
    <div class="form-group">
      <label for="pwd">Descrição:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Adicione a Descrição" name="descricao">
    </div>
    <div class="form-group">
      <label for="pwd">Estoque:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Adicione o Valor" name="estoque">
    </div>
    <div class="form-group">
      <label for="pwd">Valor:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Adicione o Valor" name="valor">
    </div>

    <button type="submit" class="btn btn-default" name="inserir">Adicionar Produto</button>
    <a href="index.php">Voltar</a>
  </form>
</div>

    
</body>
</html>