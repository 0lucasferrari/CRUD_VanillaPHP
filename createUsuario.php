<?php
session_start();

if (isset($_SESSION['usuario'])) {
(sizeof($_SESSION['usuario']) == 0) ? include('./includes/header.php') : include('./includes/header_adm.php');
} else { include('./includes/header.php'); };

include ('./functions/functions.php');

if ($_POST) {
  $adicionado = false;
  $erroValidacao = validacaoDadosUsuario();
  if(sizeof($erroValidacao) == 0) {
    $adicionado = adicionarUsuario('./bd/usuarios.json');
  };
}

?>

<main class="container">

  <h1>Cadastrar usuário</h1>

      <form action="" method="POST">
        <div class="form-group">
          <label for="">Nome</label>
          <input value="<?= $_POST ? $_POST['nomeUsuario'] : "" ?>" type="text" class="form-control" name="nomeUsuario" id="nomeUsuario" aria-describedby="helpId" placeholder="">
        </div>

        <div class="form-group">
          <label for="">E-mail</label>
          <input value="<?= $_POST ? $_POST['emailUsuario'] : "" ?>" type="email" class="form-control" name="emailUsuario" id="emailUsuario" aria-describedby="emailHelpId" placeholder="">
        </div>

        <div class="form-group">
          <label for="">Senha</label>
          <input value="" type="password" class="form-control" name="senhaUsuario" id="senhaUsuario" placeholder="">
        </div>

        <div class="form-group">
          <label for="">Confirme a senha</label>
          <input value="" type="password" class="form-control" name="confirmacaoSenhaUsuario" id="confirmacaoSenhaUsuario" placeholder="">
        </div>

        <button value="" type="submit" class="btn btn-primary">Cadastrar</button> <br>
      </form>

      <div>
        <?php 
        if ($_POST) {
          if ($adicionado) {
            echo "<div class='alert alert-success mt-2'> Usuário adicionado com sucesso </div>";
          } else {
            foreach($erroValidacao as $erro) {
              echo "<div class='alert alert-danger mt-2'> $erro </div>";
            };
          };
        }
        ?>
      </div>

</main>