<?php

$id = $_GET ['id'];

//Executa Consulta
$result = mysqli_query($conectar,"SELECT * FROM rotulo WHERE id = '$id' LIMIT 1");

$resultado = mysqli_fetch_assoc($result);

?>


<div class="container theme-showcase" role="main">
	<div class="page-header">
		<h1>Editar Rótulo</h1>
	</div>

	<div class="row ">
		<div class="pull-right">
			<a href='administrativo.php?link=9&id=<?php echo $resultado['id']; ?>'>
			<button type='button' class='btn btn-sm btn-info'>Listar</button></a>

			<a href='processa/proc_apagar_rotulo.php?id=<?php echo $resultado['id']; ?>'>

			<button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>

		</div>

	</div>

	<div class="row">
		<div class="col-md-12"></div>
	</div>

	<form class="form-horizontal" method="POST" action="processa/proc_edit_rotulo.php">
		<div class="form-group">
			<label for="nome" class="col-sm-2 control-label">Descrição</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="descricao"
					placeholder="Descrição" value="<?php echo $resultado['descricao']?>">
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