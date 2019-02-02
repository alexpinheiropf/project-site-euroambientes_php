<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="ISO-8859-1">
<title>Euro Ambientes</title>
<link rel="shortcut icon" type="image/x-icon"
	href="style/images/favicon_euro.png" />
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" type="text/css" href="style/color/red.css"
	media="all" />
<link rel="stylesheet" type="text/css" media="screen"
	href="style/css/prettyPhoto.css" />
<link rel="stylesheet" type="text/css" href="style/type/museo.css"
	media="all" />
<link rel="stylesheet" type="text/css" href="style/type/ptsans.css"
	media="all" />
<link rel="stylesheet" type="text/css" href="style/type/charis.css"
	media="all" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/transify.js"></script>
<script type="text/javascript" src="style/js/jquery.aw-showcase.js"></script>
<script type="text/javascript" src="style/js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="style/js/carousel.js"></script>
<script type="text/javascript" src="style/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="style/js/jquery.superbgimage.min.js"></script>
<script type="text/javascript" src="style/js/jquery.slickforms.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
	$('.forms').dcSlickForms();
});
</script>
<script type="text/javascript">

$(document).ready(function()
{
	$("#showcase").awShowcase(
	{
		content_width:			900,
		content_height:			400,
		auto:					true,
		interval:				3000,
		continuous:				false,
		arrows:					true,
		buttons:				true,
		btn_numbers:			true,
		keybord_keys:			true,
		mousetrace:				false, /* Trace x and y coordinates for the mouse */
		pauseonover:			true,
		stoponclick:			false,
		transition:				'fade', /* hslide/vslide/fade */
		transition_delay:		0,
		transition_speed:		500,
		show_caption:			'onload' /* onload/onhover/show */
	});
});

</script>

</head>
<body>
	<div id="page"> 
	<?php include_once 'componentes/background.php';?>
	<div id="wrapper">
	<?php include_once 'componentes/redes_sociais.php';?>
    <?php include_once 'componentes/menu.php';?>
		<!-- Begin Container -->
		<div id="container" class="opacity">
		
			<!-- Begin Showcase -->
			<div id="showcase" >
				<!-- Each child div in #showcase represents a slide -->
				<div class="showcase-slide">
					<!-- Put the slide content in a div with the class .showcase-content. -->
					<div class="showcase-content">
						<img src="style/images/index/index01.jpg" alt="" width="900" height="400" />
					</div>
				</div>

				<!-- Each child div in #showcase represents a slide -->
				<div class="showcase-slide">
					<!-- Put the slide content in a div with the class .showcase-content. -->
					<div class="showcase-content">
						<img src="style/images/index/index02.jpg" alt="" width="900" height="400"/>
					</div>
				</div>

				<div class="showcase-slide">
					<!-- Put the slide content in a div with the class .showcase-content. -->
					<div class="showcase-content">
						<img src="style/images/index/index03.jpg" alt="" width="900" height="400"/>
					</div>
				</div>

				<!-- Each child div in #showcase represents a slide -->
				<div class="showcase-slide">
					<!-- Put the slide content in a div with the class .showcase-content. -->
					<div class="showcase-content">
						<img src="style/images/index/index04.jpg" alt="" width="900" height="400" />
					</div>
				</div>
				<!-- Each child div in #showcase represents a slide -->
				<div class="showcase-slide">
					<!-- Put the slide content in a div with the class .showcase-content. -->
					<div class="showcase-content">
						<img src="style/images/index/index05.jpg" alt="" width="900" height="400" />
					</div>
				</div>
			</div>
			<!-- End Showcase -->
			<br><br>

			<div class="intro">Todo e qualquer produto da loja com 15% de desconto a vista ou 
			em 10x nos cartões ou boleto</div>
		
			
			<div class="clear"></div>
			<div class="hr1"></div>
			<!-- Divider -->
			<h2><a href="ambientes.php">Ambientes</h2>
			<div class="carousel">
				<div id="carousel-scroll">
					<a href="#" id="prev">Prev</a><a href="#" id="next">Next</a>
				</div>
				<ul>
					<li><a href="banheiro.php" > <span class="overlay details"><marquee> <h8> Banheiros </h8> </marquee></span><img
							src="style/images/index/banheiro.jpg" alt="" width="164px" height="130px"/>
					</a></li>
					<li><a href="corporativo.php"> <span class="overlay details"><marquee><h8> Corporativo </h8>  </marquee></span><img
							src="style/images/index/corporativo.jpg" alt="" width="164px" height="130px"/>
					</a></li>
					<li><a href="cozinha.php"> <span class="overlay details"><marquee><h8> Cozinhas </h8> </marquee></span><img
							src="style/images/index/cozinha.jpg" alt="" width="164px" height="130px"/>
					</a></li>
					<li><a href="dormitorio.php"> <span class="overlay details"><marquee> <h8> Dormitórios </h8> </marquee></span><img
							src="style/images/index/dormitorio.jpg" alt="" width="164px" height="130px"/>
					</a></li>
					<li><a href="home_office.php"> <span class="overlay details"><marquee> <h8> Home Office </h8></marquee></span><img
							src="style/images/index/home_office.jpg" alt="" width="164px" height="130px"/>
					</a></li>
					<li><a href="home_theater.php" > <span class="overlay details"><marquee><h8> Home Theater </h8> </marquee></span><img
							src="style/images/index/home_theater.jpg" alt="" width="164px" height="130px"/>
					</a></li>
					<li><a href="lavanderia.php" > <span class="overlay details"><marquee><h8> Lavanderia </h8> </marquee></span><img
							src="style/images/index/lavanderia.jpg" alt="" width="164px" height="130px"/>
					</a></li>
					<li><a href="cabeceiras.php" > <span class="overlay details"><marquee><h8> Cabeceiras </h8> </marquee></span><img
							src="style/images/index/cabeceira.jpg" alt="" width="164px" height="130px"/>
					</a></li>
					<li><a href="colcoes.php" > <span class="overlay details"><marquee><h8> Colchões </h8> </marquee></span><img
							src="style/images/index/colcoes.jpg" alt="" width="164px" height="130px"/>
					</a></li>
					<li><a href="divans.php" > <span class="overlay details"><marquee><h8> Divans </h8> </marquee></span><img
							src="style/images/index/divan.jpg" alt="" width="164px" height="130px"/>
					</a></li>
					<li><a href="estofados.php" > <span class="overlay details"><marquee><h8> Estofados </h8> </marquee></span><img
							src="style/images/index/estofados.jpg" alt="" width="164px" height="130px"/>
					</a></li>
					<li><a href="poltronas.php" > <span class="overlay details"><marquee><h8> Poltronas </h8> </marquee></span><img
							src="style/images/index/poltrona.jpg" alt="" width="164px" height="130px"/>
					</a></li>
					<li><a href="recamiere.php" > <span class="overlay details"><marquee><h8> Recamiere </h8> </marquee></span><img
							src="style/images/index/recamiere.jpg" alt="" width="164px" height="130px"/>
					</a></li>
				</ul>
			</div>
			<!-- End Latest Works -->
		</div>
			<?php include_once 'componentes/footer.php';?>
		</div>
	<!-- End Wrapper -->
	</div>
	<script type="text/javascript" src="style/js/scripts.js"></script>

</body>
</html>