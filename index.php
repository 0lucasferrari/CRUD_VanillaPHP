<?php

include('includes/header.php');
include('./functions/functions.php');

if ($_POST) {
  $usuario = login($_POST['emailUsuario'],$_POST['senhaUsuario']);

  if ($usuario) {
    session_start();

    $_SESSION['usuario'] = $usuario;
    
    header('Location: indexProducts.php');
  };

};

?>

<main class="container d-flex justify-content-center flex-column">

  <h1>Entrar</h1>

  <form action="" method="POST">

  <div class="form-group">
    <label for="">E-mail:</label>
    <input type="email" class="form-control" name="emailUsuario" id="emailUsuario" aria-describedby="emailHelpId" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Senha:</label>
    <input type="password" class="form-control" name="senhaUsuario" id="senhaUsuario" placeholder="">
  </div>
  
  <button class="btn btn-primary" type="submit" value="">Entrar</button>

  <div>
  <?php

  if($_POST) { 
    if (!$usuario) {
      echo "<div class='alert alert-danger mt-3'>Usuário ou senha incorretos</div>"; };
    };
  ?>
  </div>

  </form>

</main>