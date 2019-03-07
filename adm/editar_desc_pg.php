<?php

$id = $_GET ['id'];

//Executa Consulta
$result = mysqli_query($conectar,"SELECT * FROM desc_pg WHERE id = '$id' LIMIT 1");

$resultado = mysqli_fetch_assoc($result);

?>


<div class="container theme-showcase" role="main">
	<div class="page-header">
		<h1>Editar Descrição da Página</h1>
	</div>

	<div class="row ">
		<div class="pull-right">
			<a href='administrativo.php?link=6&id=<?php echo $resultado['id']; ?>'>
				<button type='button' class='btn btn-sm btn-info'>Listar</button></a>
				
				<a href='processa/proc_apagar_desc_pg.php?id=<?php echo $resultado['id']; ?>'>

					<button type='button' class='btn btn-sm btn-danger'>Apagar</button></a> 

				</div>
			</div>
			<br>

			<div class="row">
				<div class="col-md-12"></div>
			</div>

			<form class="form-horizontal" method="POST" action="processa/proc_edit_desc_pg.php">
				
				<?php $pg_id = $resultado['pg_id'];  ?>

				<div class="form-group">

					<label for="inputPassword3" class="col-sm-2 control-label">Páginas</label>

					<div class="col-sm-10">

						<select class="form-control" name="pg_id">

							<?php

							$result_rot = mysqli_query ( $conectar, "SELECT * FROM paginas" );

							while ( $dados = mysqli_fetch_assoc ( $result_rot ) ) {

								$id_pg = $dados ['id'];

								?>

								<option value="<?php echo $dados["id"]; ?>"

									<?php if($pg_id == $id_pg){ echo 'selected'; } ?>>
										<?php echo $dados["descricao"];?></option>

									<?php

								}

								?>

							</select>

						</div>

					</div>


					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Descrição</label>
						<div class="col-sm-10">
							<textarea class="form-control ckeditor" rows="5" name="descricao"
							placeholder="Descrição"><?php echo $resultado['descricao']; ?></textarea>
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