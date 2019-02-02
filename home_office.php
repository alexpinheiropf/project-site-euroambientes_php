<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="ISO-8859-1">
<title>Home Office</title>
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
				<div id="showcase">
					<!-- Each child div in #showcase represents a slide -->
					<div class="showcase-slide">
						<!-- Put the slide content in a div with the class .showcase-content. -->
						<div class="showcase-content">
							<img src="style/images/planejados/banheiro/b1.jpg" alt=""
								width="900" height="400" />
						</div>
					</div>

					<!-- Each child div in #showcase represents a slide -->
					<div class="showcase-slide">
						<!-- Put the slide content in a div with the class .showcase-content. -->
						<div class="showcase-content">
							<img src="style/images/planejados/banheiro/b2.jpg" alt=""
								width="900" height="400" />
						</div>

					</div>

					<div class="showcase-slide">
						<!-- Put the slide content in a div with the class .showcase-content. -->
						<div class="showcase-content">
							<img src="style/images/planejados/banheiro/b3.jpg" alt=""
								width="900" height="400" />
						</div>

					</div>

					<!-- Each child div in #showcase represents a slide -->
					<div class="showcase-slide">
						<!-- Put the slide content in a div with the class .showcase-content. -->
						<div class="showcase-content">
							<img src="style/images/planejados/banheiro/b4.jpg" alt=""
								width="900" height="400" />
						</div>

					</div>
					<!-- Each child div in #showcase represents a slide -->
					<div class="showcase-slide">
						<!-- Put the slide content in a div with the class .showcase-content. -->
						<div class="showcase-content">
							<img src="style/images/planejados/banheiro/b5.jpg" alt=""
								width="900" height="400" />
						</div>

					</div>
					<div class="showcase-slide">
						<!-- Put the slide content in a div with the class .showcase-content. -->
						<div class="showcase-content">
							<img src="style/images/planejados/banheiro/b6.jpg" alt=""
								width="900" height="400" />
						</div>

					</div>
					<div class="showcase-slide">
						<!-- Put the slide content in a div with the class .showcase-content. -->
						<div class="showcase-content">
							<img src="style/images/planejados/banheiro/b7.jpg" alt=""
								width="900" height="400" />
						</div>
					</div>
				</div>
				<br> <br>

				<blockquote>Um home office diferenciado, compartilhando a
					Infra-Estrutura o ambiente doméstico com seu trabalho profissional
					você encontra na Euro Ambientes</blockquote>
				<br>
			</div>
			<?php include_once 'componentes/footer.php';?>
		</div>
		<!-- End Wrapper -->
	</div>
	<script type="text/javascript" src="style/js/scripts.js"></script>

</body>
</html>