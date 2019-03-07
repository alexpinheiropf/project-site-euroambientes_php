<?php

	$URL_ATUAL= $_SERVER['HTTP_REFERER'];
	
	$r = explode('id=', $URL_ATUAL);
	$id = $r[1];
?>

<div class="container theme-showcase" role="main">      

  <div class="page-header">

	<h1>Cadastrar Imagem da Página </h1>

  </div>

  <div class="row espaco">

		<div class="pull-right">

			<a href='<?php echo $_SERVER['HTTP_REFERER']; ?>'>

			<button type='button' class='btn btn-sm btn-info'>Listar</button></a>

		</div>

	</div>

  <div class="row">

	<div class="col-md-12">

	  <form class="form-horizontal" method="POST" action="processa/proc_cad_imagens.php" enctype="multipart/form-data">


	  	<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Página </label>
			<div class="col-sm-10">
			  <select class="form-control" name="pagina_id">
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

				<label for="inputEmail3" class="col-sm-2 control-label">Imagem</label>

				<div class="col-sm-10">

					<input name="arquivo" type="file"/>	

				</div>

		  </div>

		   <input type="hidden" name="url_anterior" value="<?php echo $URL_ATUAL;?>">

		  <div class="form-group">

			<div class="col-sm-offset-2 col-sm-10">

			  <button type="submit" class="btn btn-success">Cadastrar</button>


			</div>

		  </div>

		</form>

	</div>

	</div>

</div> <!-- /container -->



