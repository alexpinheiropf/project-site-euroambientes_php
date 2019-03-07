<?php

session_start ();
include_once ("seguranca.php");
include_once ("conexao.php");

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Página Administrativa">
	<meta name="author" content="Sindisaude">
	<link rel="icon" href="imagens/favicon_sindi.ico">

	<title>Administrativo</title>

	<!-- Bootstrap core CSS -->

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/theme.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/ie-emulation-modes-warning.js"></script>

</head>

<body role="document">

	<?php

	include_once ("menu_admin.php");

	$link = isset ( $_GET ['link'] ) ? $_GET ['link'] : '';


	$pag[1] = "bem_vindo.php";
	$pag[2] = "listar_imagens.php";
	$pag[3] = "cad_usuario.php";
	$pag[4] = "listar_usuario.php";
	$pag[5] = "editar_usuario.php";
	$pag[6] = "listar_desc_pg.php";
	$pag[7] = "cad_rotulo.php";
	$pag[8] = "editar_rotulo.php";
	$pag[9] = "listar_rotulo.php";
	$pag[10] = "cad_pagina.php";
	$pag[11] = "editar_pagina.php";
	$pag[12] = "listar_pagina.php";
	$pag[13] = "cad_desc_pg.php";
	$pag[14] = "editar_desc_pg.php";
	$pag[15] = "listar_img_pg.php";
	$pag[16] = "cad_img_pg.php";
	$pag[17] = "editar_img_pg.php";
	$pag[18] = "visual_img_pg.php";
	$pag[19] = "listar_imagens_detalhe.php";
	$pag[20] = "cad_imagens.php";
	$pag[21] = "editar_imagens.php";
	$pag[22] = "visual_imagens.php";


	if (! empty ( $link )) {
		if (file_exists ( $pag [$link] )) {
			include $pag [$link];
		} else {
			include "bem_vindo.php";
		}
	} else {
		include "bem_vindo.php";
	}

	?>

	<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/docs.min.js"></script>
		<script src="js/ckeditor/ckeditor.js"></script>
		<script src="js/ie10-viewport-bug-workaround.js"></script>
	</body>

</html>