<?php

include_once ("adm/conexao.php");
$logo      = mysqli_query ( $conectar, "SELECT * FROM imagem_sistema where id = 2 " );
$linha_log       = mysqli_fetch_assoc ( $logo );
$imagem_l = pg . '/img/' . $linha_log ['imagem'];

?>


<?php




	?>

	<div class="container">		

		<form class="form-signin" method="POST" action="adm/valida_login.php">

			<img class="form-signin" src="<?php echo $imagem_l; ?>">

			<h3 class="form-signin-heading">Acesso Administrativo</h3>

			<label for="inputEmail" class="sr-only">Usuário</label>

			<input type="text" name="login" class="form-control" placeholder="Digitar o Usuário" required autofocus><br />

			<label for="inputPassword" class="sr-only">Senha</label>

			<input type="password" name="senha" class="form-control" placeholder="Digite a Senha" required >

			<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>


		</form>



		<p class="text-center text-danger">

			<?php
			if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}

			?>

		</p>

	</div> <!-- /container -->
