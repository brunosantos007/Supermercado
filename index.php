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
  <h2>Produtos Cadastrados</h2>
  <p>Produtos que disponibilizamos aos clientes</p>     
  <?php if(count(($produtos)) > 0): ?>       
  <table class="table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Estoque</th>
        <th>Valor</th>
      </tr>
    </thead>
    <tbody>
    
    <?php foreach($produtos as $product):?>
      <tr>
        
        <td><?= $product["nome"] ?></td>
        <td><?= $product["descricao"] ?></td>
        <td><?= $product["estoque"] ?></td>
        <td>R$ <?= $product["valor"] ?> </td>
        <td><a href="editar.php?edit=1&id=<?= $product["id"] ?>">Editar</a></td>
        <td><a href="codigo.php?del=1&id=<?= $product["id"] ?>">Excluir</a></td>
        
      </tr>
      <?php endforeach; ?>
      
    </tbody>
  </table>
  <a href="inserir.php?add=1">Inserir Produtos</a>
  <?php else:  ?>
    <p style="text-align: center;">Não há produtos.</p>
  <a href="inserir.php?add=1">Inserir Produtos</a>
  <?php endif; ?>

  
</div>



    
</body>
</html>