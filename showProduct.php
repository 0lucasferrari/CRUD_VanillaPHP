<?php
include('./includes/header_adm.php');
include('./functions/functions.php');

$oProduto = selecionaUmItem($_GET['id'],'./bd/produtos.json');
?>

<main class="container d-flex justify-content-center flex-column">
  <h1>Informações do produto</h1>
  <table class="table">
    <tbody>
      <tr>
        <th scope="col">Nome do produto:</th>
        <th scope="col"><?= $oProduto['nomeProduto'] ?></th>
      </tr>
      <tr>
        <th scope="col">Preço do produto:</th>
        <th scope="col">R$ <?= $oProduto['precoProduto'] ?></th>
      </tr>
      <tr>
        <th scope="col">Descrição do produto:</th>
        <th scope="col"><?= $oProduto['descricaoProduto'] ?></th>
      </tr>
    </tbody>
  </table>
  
  <img class="rounded" src="<?= $oProduto['fotoProduto'] ?>"><br>

  <a href="editProduct.php?id=<?= $_GET['id'] ?>" class="btn btn-warning mt-3">Editar</a>
</main>
