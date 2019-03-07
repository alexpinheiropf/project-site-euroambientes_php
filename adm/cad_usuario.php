<div class="container theme-showcase" role="main">

	<div class="page-header">

		<h1>Cadastrar Usuários</h1>

	</div>

	<div class="row">

		<div class="pull-right">

			<a href='administrativo.php?link=2&id=<?php echo $resultado['id']; ?>'>

			<button type='button' class='btn btn-sm btn-info'>Listar</button></a>

			

		</div>

	</div>

	<div class="row">

		<div class="col-md-12"></div>

	</div>

	<form class="form-horizontal" method="POST"

		action="processa/proc_cad_usuario.php">



		<div class="form-group">

			<label for="nome" class="col-sm-2 control-label">Nome</label>

			<div class="col-sm-10">

				<input type="text" class="form-control" name="nome"

					placeholder="Nome Completo">

			</div>

		</div>



		<div class="form-group">

			<label for="email" class="col-sm-2 control-label">Email</label>

			<div class="col-sm-10">

				<input type="email" class="form-control" name="email"

					placeholder="Email">

			</div>

		</div>



		<div class="form-group">

			<label for="login" class="col-sm-2 control-label">Usuario</label>

			<div class="col-sm-10">

				<input type="text" class="form-control" name="login"

					placeholder="Usuário">

			</div>

		</div>



		<div class="form-group">

			<label for="senha" class="col-sm-2 control-label">Senha</label>

			<div class="col-sm-10">

				<input type="password" class="form-control" name="senha"

					placeholder="Senha">

			</div>

		</div>



		<div class="form-group">

			<label for="nivel_de_acesso" class="col-sm-2 control-label">Nivel de Acesso</label>

			<div class="col-sm-10">

				<select class="form-control" name="nivel_de_acesso">

					<option value="1">Administrativo</option>

				</select>

			</div>

		</div>



		<div class="form-group">

			<div class="col-sm-offset-2 col-sm-10">

				<button type="submit" class="btn btn-success">Cadastrar</button>

			</div>

		</div>

	</form>

</div>

<!-- /container -->