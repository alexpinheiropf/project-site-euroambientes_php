<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="ISO-8859-1">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Intranet Euro Ambientes</title>
<link rel="shortcut icon" type="image/x-icon"
	href="../style/images/favicon_euro.png" />
<link rel="stylesheet" type="text/css" href="../style.css" media="all" />
<link rel="stylesheet" type="text/css" href="../style/color/red.css"
	media="all" />
<link rel="stylesheet" type="text/css" media="screen"
	href="../style/css/prettyPhoto.css" />
<link rel="stylesheet" type="text/css" href="../style/type/museo.css"
	media="all" />
<link rel="stylesheet" type="text/css" href="../style/type/ptsans.css"
	media="all" />
<link rel="stylesheet" type="text/css" href="../style/type/charis.css"
	media="all" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="../style/css/ie7.css" media="all" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="../style/css/ie8.css" media="all" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="../style/css/ie9.css" media="all" />
<![endif]-->
<script type="text/javascript" src="../style/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="../style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="../style/js/transify.js"></script>
<script type="text/javascript" src="../style/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript"
	src="../style/js/jquery.superbgimage.min.js"></script>
<script type="text/javascript" src="../style/js/jquery.slickforms.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
	$('.forms').dcSlickForms();
});
</script>
</head>
<body>
	
	<div id="wrapper">
		<div id="header">
			<div class="logo opacity" align="center">
				<a href="../index.php"><img src="../style/images/logo.png" alt="" /></a>
			</div>
		</div>
		<div class="clear"></div>

		<!-- End Menu -->

		<!-- Begin Container -->
		<div id="container" class="opacity" >
			<form method="post" action="validalogon.php?acao=validar">
			<h1 align="center">Acesso ao Intranet</h2>
			<br>
			<div class="clear"></div>
				<table >
					<tr>
						<td>Usuário:</td>
						<td><input type="text" name="txusuario"></td>
					</tr>
					<tr>
						<td>Senha:</td>
						<td><input type="password" name="txsenha"></td>
					</tr>
					<tr>
						<td><input type="submit" value="Enviar"></td>
						<td><input type="reset"></td>
					</tr>
				</table>

			</form>

		</div>
		<!-- End Container -->
  
  <?php include_once '../componentes/footer.php';?>
</div>
	<!-- End Wrapper -->

	<script type="text/javascript" src="../style/js/scripts.js"></script>
</body>
</html>