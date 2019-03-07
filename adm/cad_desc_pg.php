<div class="container theme-showcase" role="main">

	<div class="page-header">

		<h1>Cadastrar Descrição da Página</h1>

	</div>

	<div class="row">

		<div class="pull-right">

			<a href='administrativo.php?link=6&id=<?php echo $resultado['id']; ?>'>

				<button type='button' class='btn btn-sm btn-info'>Listar</button></a>



			</div>

		</div>
		<br>
		<div class="row">

			<div class="col-md-12"></div>

		</div>

		<form class="form-horizontal" method="POST" action="processa/proc_cad_desc_pg.php">

			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Página </label>
				<div class="col-sm-10">
					<select class="form-control" name="pg_id">
						<option>Selecione uma opção</option>
						<?php 
						$resultado   = mysqli_query($conectar, "SELECT * FROM paginas");
						while($dados = mysqli_fetch_assoc($resultado)){
							?>
							<option value="<?php echo $dados["id"]; ?>"><?php echo $dados["descricao"];?></option>
							<?php
						}
						?>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Descrição</label>
				<div class="col-sm-10">
					<textarea class="form-control ckeditor" rows="5" name="descricao" placeholder="Descrição"></textarea>
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