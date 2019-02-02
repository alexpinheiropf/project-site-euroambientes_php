<?php include_once '../componentes/conectar.php';?>
<?php include_once '../componentes/bancoexecuta.php';?>

<html>
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
		
		<div id="container" class="opacity" >
			<form method="post" action="validalogon.php?acao=validar">
			<h1 align="center">Acesso ao Intranet</h2>
			<br>
			<div class="clear"></div>
	<a href="intranet.php">Menu</a>
	<a href="cliente_cadastro.php">Novo Registro</a>
	<table border="1">
		<tr>
			<td>Código</td>
			<td>Nome</td>
			<td>E-mail</td>
			<td>Alterar</td>
			<td>Excluir</td>
		</tr>
	<?php 
		$comando = "select * from cliente_cad";
		$resposta = mysqlexecuta ( $id, $comando );
		while ( $linha = mysql_fetch_array ( $resposta ) )
		{
	?>		
		<tr>
			<td><?php echo $linha['codigo']; ?></td>
			<td><?php echo $linha['nome']; ?></td>
			<td><?php echo $linha['email']; ?></td>
			<td><a href="cliente_altera.php?codigo=<?php echo $linha['codigo']; ?>">Alterar</a></td>
			<td><a href="cliente_funcoes.php?acao=excluir&codigo=<?php echo $linha['codigo']; ?>">Excluir</a></td>
		</tr>
	<?php 
		}
		?>
	</table>
	</div>
<?php include_once '../componentes/footer.php';?>

</div>
</body>
</html>