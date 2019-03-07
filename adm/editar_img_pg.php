<?php

$id = $_GET ['id'];

// Executa consulta

$result = mysqli_query ( $conectar, "SELECT * FROM imagem_sistema WHERE id = '$id' LIMIT 1" );

$resultado = mysqli_fetch_assoc ( $result );

?>

<div class="container theme-showcase" role="main">

	<div class="page-header">

		<h1>Editar Imagem sistema</h1>

	</div>

	<div class="row espaco">

		<div class="pull-right">

			<a

				href='administrativo.php?link=15&id=<?php echo $resultado['id']; ?>'><button

					type='button' class='btn btn-sm btn-info'>Listar</button></a> 
				<!--	<a

				href='processa/proc_apagar_img_pg.php?id=<?php echo $resultado['id']; ?>'><button

					type='button' class='btn btn-sm btn-danger'>Apagar</button></a>-->

		</div>

	</div>

	<div class="row">

		<div class="col-md-12">

			<form class="form-horizontal" method="POST"

				action="processa/proc_edit_img_pg.php"

				enctype="multipart/form-data">



				<div class="form-group">

					<label for="inputEmail3" class="col-sm-2 control-label">Nome</label>

					<div class="col-sm-10">

						<input type="text" class="form-control" name="nome"

							placeholder="Nome"

							value="<?php echo $resultado['nome']; ?>">

					</div>

				</div>



				<div class="form-group">

					<label for="inputEmail3" class="col-sm-2 control-label">Imagem </label>

					<div class="col-sm-10">

						<input name="arquivo" type="file" />

					</div>

				</div>

		  

		  <?php

				$foto = $resultado ['imagem'];

				if ($foto == "") {

					?>

				<div class="form-group">

					<label for="inputEmail3" class="col-sm-2 control-label"> Foto

						Antiga </label>

					<div class="col-sm-10">Não Existe imagem</div>

					<input type="hidden" name="img_antiga" value='<?php echo $foto ?>'>

				</div>

				

			<?php

				}

				if ($foto != "") {

					?>

				<div class="form-group">

					<label for="inputEmail3" class="col-sm-2 control-label"> Imagem Antiga </label>

					<div class="col-sm-10">

						<img src="<?php echo "../img/$foto"; ?>" width="400" height="100">

						<input type="hidden" name="img_antiga" value='<?php echo $foto ?>'>

					</div>

				</div>

		  <?php } ?>

		  

				<input type="hidden" name="id"

					value="<?php echo $resultado['id']; ?>">

				<div class="form-group">

					<div class="col-sm-offset-2 col-sm-10">

						<button type="submit" class="btn btn-success">Editar</button>

					</div>

				</div>

			</form>

		</div>

	</div>

</div>

<!-- /container -->



