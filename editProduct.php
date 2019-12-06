<?php

include('./includes/header_adm.php');
include('./functions/functions.php');

$oProduto = selecionaUmItem($_GET['id'],'./bd/produtos.json');
?>

<main class="container">

<h1>Editar produto</h1>

<form action="./functions/saveEditProduct.php?id=<?= $_GET['id'] ?>" method="POST">

  <div class="form-group">
    <label for="">Nome do produto:</label>
    <input value="<?= $oProduto['nomeProduto'] ?>" type="text" class="form-control" name="nomeProduto" id="nomeProduto" aria-describedby="helpId" placeholder="">

  </div>

  <div class="form-group">
    <label for="">Descrição do produto:</label>
    <textarea class="form-control" name="descricaoProduto" id="descricaoProduto" rows="3"><?= $oProduto['descricaoProduto'] ?></textarea>
  </div>

  <div class="form-group">
    <label for="">Preço do produto:</label>
    <input value="<?= $oProduto['precoProduto'] ?>" type="number" class="form-control" name="precoProduto" id="precoDoProduto" aria-describedby="helpId" placeholder="">
  </div>

  <!-- <label for="fotoProduto" class="">Foto: </label>
  <input class="form-control" type="file" name="fotoProduto" id="fotoProduto" /> <br /> -->

  <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

  <button type="submit" class="btn btn-primary">Salvar</button>
  <a name="" id="excluir" class="btn btn-danger" href="./functions/deleteProduct.php?id=<?= $_GET['id'] ?>" role="button">Excluir</a>

</form>

</main>