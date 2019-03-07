<?php

  session_start();
  $logo      = mysqli_query ( $conectar, "SELECT * FROM imagem_sistema where id = 2 " );
  $linha_log       = mysqli_fetch_assoc ( $logo );
  $imagem_l = pg . '/img/' . $linha_log ['imagem'];

  $fav      = mysqli_query ( $conectar, "SELECT * FROM imagem_sistema where id = 6 " );
  $linha_fav       = mysqli_fetch_assoc ( $logo );
  $fav_l = pg . '/img/' . $linha_fav ['imagem'];

?>

<!DOCTYPE html>

<html lang="pt-br">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Página para realizar login">

    <meta name="author" content="Alex Pinheiro">

    <link rel="icon" href="<?php echo $fav_l; ?>">



    <title>Área para Usuário Cadastrado</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/signin.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>



  </head>



  <body>

  <?php

    unset($_SESSION['usuarioId'],     

          $_SESSION['usuarioNome'],     

          $_SESSION['usuarioNivelAcesso'], 

          $_SESSION['usuarioLogin'],    

          $_SESSION['usuarioSenha']);

    

  ?>

    <div class="container">   

      <form class="form-signin" method="POST" action="#">

        

        <img class="form-signin" src="<?php echo $imagem_l; ?>">

        

        <!-- <h3 class="form-signin-heading text-center">Área para Usuário Cadastrado</h3> -->

        

        <label for="inputEmail" class="sr-only">Usuário</label>

    

        <input type="text" name="login" class="form-control" placeholder="Digitar o Usuário" required autofocus><br />

    

        <label for="inputPassword" class="sr-only">Senha</label>

        <input type="password" name="senha" class="form-control" placeholder="Digite a Senha" required >

        

        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>

        

       

      </form>

      <div class="form-signin"><a href="http://euroambientes.com.br"> 

      <button class="btn btn-lg btn-warning btn-block">Voltar Home</button></a></div>

      

    <p class="text-center text-danger">

      <?php

        if(isset($_SESSION['loginErro'])){

          echo $_SESSION['loginErro'];

          unset($_SESSION['loginErro']);

        }

      ?>

    </p>

    </div> <!-- /container -->





    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <script src="js/ie10-viewport-bug-workaround.js"></script>

  </body>

</html>