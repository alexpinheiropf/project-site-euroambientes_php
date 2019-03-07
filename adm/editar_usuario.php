<?php

$id = $_GET ['id'];

//Executa Consulta

$result = mysqli_query($conectar,"SELECT * FROM usuarios WHERE id = '$id' LIMIT 1");

$resultado = mysqli_fetch_assoc($result);

?>

<div class="container theme-showcase" role="main">
	<div class="page-header">
		<h1>Editar Usuários</h1>
	</div>

	<div class="row ">
		<div class="pull-right">
			<a href='administrativo.php?link=4&id=<?php echo $resultado['id']; ?>'>
			<button type='button' class='btn btn-sm btn-info'>Listar</button></a>

			<a href='processa/proc_apagar_usuario.php?id=<?php echo $resultado['id']; ?>'>
			<button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>

		</div>

	</div>

	<div class="row">
		<div class="col-md-12"></div>
	</div>

	<form class="form-horizontal" method="POST" action="processa/proc_edit_usuario.php">
		<div class="form-group">
			<label for="nome" class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="nome" placeholder="Nome Completo" value="<?php echo $resultado['nome']?>">
			</div>
		</div>

		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $resultado['email']?>">
			</div>
		</div>

		<div class="form-group">
			<label for="login" class="col-sm-2 control-label">Usuario</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="login"
					placeholder="Usuário" value="<?php echo $resultado['login']?>">
			</div>
		</div>

		<div class="form-group">
			<label for="senha" class="col-sm-2 control-label">Senha</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" name="senha"
					placeholder="Senha"value="<?php echo $resultado['senha']?>">
			</div>
		</div>

		<div class="form-group">
			<label for="senha" class="col-sm-2 control-label">Nivel de Acesso</label>
			<div class="col-sm-10">
				<select class="form-control" name="nivel_de_acesso">
					<option>Selecione</option>
					<option value="1" 
					<?php 
						if ($resultado['nivel_acesso_id'] == 1){
							echo'selected';
						}
					?>>Administrativo</option>

					<option value="2" 
					<?php 
						if ($resultado['nivel_acesso_id'] == 2){
							echo'selected';
						}
					?>>Usuário</option>
				</select>
			</div>
		</div>

		<input type="hidden" name="id" value="<?php echo $resultado['id'];?>">

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-success">Editar</button>
			</div>
		</div>
	</form>
</div>