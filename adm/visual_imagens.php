<?php

$id = $_GET ['id'];



// Executa Consulta



$result = mysqli_query ( $conectar, "SELECT * FROM imagem_pagina WHERE id = '$id' LIMIT 1" );



$resultado = mysqli_fetch_assoc ( $result );



?>

<div class="container theme-showcase" role="main">

	<div class="page-header">

		<h1>Visualizar Imagem da Página</h1>

	</div>

	

	<div class="row">

		<div class="pull-right">

			<a href='administrativo.php?link=2'>

			<button type='button' class='btn btn-sm btn-info'>Listar</button></a>

							

			<a href='administrativo.php?link=21&id=<?php echo $resultado['id']; ?>'>

			<button type='button' class='btn btn-sm btn-warning'>Editar</button></a>

			

			<a href='processa/proc_apagar_imagens.php?id=<?php echo $resultado['id']; ?>'>

			<button type='button' class='btn btn-sm btn-danger'>Apagar</button></a> 

		</div>

	</div>

	

	<div class="row">

		<div class="col-md-12">

			<div class="col-xs-3 col-sm-9 col-md-3"><b>Id</b></div>

			<div class="col-xs-9 col-sm-11 col-md-9">

				<?php echo $resultado['id']?>

			</div>

						

			<div class="col-xs-3 col-sm-1 col-md-3"><b>Imagem:</b></div>

			<div class="col-xs-9 col-sm-11 col-md-9">

			    <?php $foto = $resultado['imagem']?>

				<img src="<?php echo "../img/$foto"; ?>" width="300" height="100%">

			</div>

			

		</div>

	</div>

</div>

<!-- /container -->