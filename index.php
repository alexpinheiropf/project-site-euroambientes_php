<?php
define ( 'pg', 'http://localhost/www.euroambientes.com.br' );
include_once ("adm/conexao.php");

?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta name="description" content="Euro Ambientes">
	<meta name="author" content="Alex Pinheiro">
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Euro Ambientes</title>
	
	<link href="<?php echo pg?>/style/images/favicon_euro.png" rel="shortcut icon" type="image/x-icon">
	<link href="<?php echo pg?>/style.css" rel="stylesheet">
	<link href="<?php echo pg?>/style/color/red.css" rel="stylesheet">
	<link href="<?php echo pg?>/style/css/prettyPhoto.css" rel="stylesheet">
	<link href="<?php echo pg?>/style/type/museo.css" rel="stylesheet">
	<link href="<?php echo pg?>/style/type/ptsans.css" rel="stylesheet">
	<link href="<?php echo pg?>/style/type/charis.css" rel="stylesheet">
	<link href="<?php echo pg?>/style/css/signin.css" rel="stylesheet">

	<script src="<?php echo pg?>/style/js/jquery-1.6.2.min.js"></script>	
	<script src="<?php echo pg?>/style/js/ddsmoothmenu.js"></script>
	<script src="<?php echo pg?>/style/js/transify.js"></script>
	<script src="<?php echo pg?>/style/js/jquery.aw-showcase.js"></script>
	<script src="<?php echo pg?>/style/js/jquery.jcarousel.js"></script>
	<script src="<?php echo pg?>/style/js/carousel.js"></script>
	<script src="<?php echo pg?>/style/js/jquery.prettyPhoto.js"></script>
	<script src="<?php echo pg?>/style/js/jquery.superbgimage.min.js"></script>
	<script src="<?php echo pg?>/style/js/jquery.slickforms.js"></script>
	<script src="<?php echo pg?>/style/js/carrousel.js"></script>

</head>
<body>
	<div id="page"> 
		<?php include_once 'components/background.php';?>
		<div id="wrapper">
			<?php include_once 'components/redes_sociais.php'; 
				  include_once 'components/menu.php';?>
			<!-- Begin Container -->
			<div id="container" class="opacity">

				<!-- Begin Showcase -->
				<?php
				$url = (isset ( $_GET ['url'] )) ? $_GET ['url'] : '';
				$explode = explode ( '/', $url );

				$paginas = array (
					'home',
					'sobre',
					'intranet',
					'pg',
					'contato'
				);
				if (isset ( $explode [0] ) && $explode [0] == '') {
					include "home.php";
				} elseif ($explode [0] != '') {
					if (isset ( $explode [0] ) && in_array ( $explode [0], $paginas )) {
						include $explode [0] . ".php";
					} else {
						include "home.php";
					}
				}
				?> 	
				<!-- End Latest Works -->
			</div>
			<?php include_once 'components/footer.php';?>
		</div>
		<!-- End Wrapper -->
	</div>
	<script src="<?php echo pg?>/style/js/scripts.js"></script>

</body>
</html>