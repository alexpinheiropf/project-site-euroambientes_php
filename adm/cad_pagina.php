<div class="container theme-showcase" role="main">

	<div class="page-header">

		<h1>Cadastrar Página</h1>

	</div>

	<div class="row">

		<div class="pull-right">

			<a href='administrativo.php?link=12&id=<?php echo $resultado['id']; ?>'>

			<button type='button' class='btn btn-sm btn-info'>Listar</button></a>

			

		</div>

	</div>

	<div class="row">

		<div class="col-md-12"></div>

	</div>

	<form class="form-horizontal" method="POST"
		action="processa/proc_cad_pagina.php">



		<div class="form-group">
			<label for="descricao" class="col-sm-2 control-label">Descrição</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="descricao" placeholder="Descrição">
			</div>
		</div>

		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Página para: </label>
			<div class="col-sm-10">
			  <select class="form-control" name="rotulo_id">
			  <option>Selecione uma opção</option>
				  <?php 
						$resultado   = mysqli_query($conectar, "SELECT * FROM rotulo");
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
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-success">Cadastrar</button>
			</div>
		</div>
	</form>
</div>
<!-- /container -->