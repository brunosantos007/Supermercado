<?php
    include_once("codigo.php");
?>

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
  <h2>Editar informações do Produto:</h2>
  <form action="codigo.php" method="POST">
    
  <?php foreach($itens as $item):?>
    <input type="hidden" name="id" value="<?= $item["id"]; ?>">
    <div class="form-group">
      <label for="email">Nome:</label>
      <input type="text" class="form-control" name="nome" id="email" value="<?= $item["nome"]; ?>" >
    </div>
    <div class="form-group">
      <label for="text">Descrição:</label>
      <input type="text" class="form-control" name="descricao" id="pwd" value="<?= $item["descricao"]; ?>">
    </div>
    <div class="form-group">
      <label for="text">Estoque:</label>
      <input type="text" class="form-control" name="estoque" id="pwd" value="<?= $item["estoque"]; ?>">
    </div>
    <div class="form-group">
      <label for="pwd">Valor:</label>
      <input type="text" class="form-control" name="valor" id="pwd" value="<?= $item["valor"]; ?>">
    </div>
    
    <button type="submit" class="btn btn-default" name="atualizar">Enviar</button>
    <a href="index.php">Voltar</a>
    <?php endforeach; ?>
  </form>
</div>
</body>
</html>