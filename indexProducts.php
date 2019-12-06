<?php
include('./includes/header_adm.php');

include('./functions/functions.php');

$arrayListaProdutos = JSONParaArray('./bd/produtos.json');
?>

<main class="container">

  <h3>Bem vindo, <?php echo $_SESSION['usuario']['nomeUsuario'] ?></h3>

  <h1>Lista de produtos</h1>
  <table class="table">
    <thead>
      <tr>
        <th>
        Nome do produto
        </th>
        <th>
        Descrição do produto
        </th>
        <th>
        Preço do produto
        </th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($arrayListaProdutos as $produto) :?>
      <tr>
        <th><?php echo $produto['nomeProduto'] ?></th>
        <th><?php echo $produto['descricaoProduto'] ?></th>
        <th>R$ <?php echo $produto['precoProduto'] ?></th>
        <th><a href="showProduct.php?id=<?= $produto['id'] ?>" class="btn btn-primary">Mais informações</a>
      </tr>
    <?php endforeach ?>
    </tbody>
  </table>
  
  <a href="createProduct.php?" class="btn btn-primary">Adicionar</a>
<div>
</div>
</main>