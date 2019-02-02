<!DOCTYPE HTML>

<html lang="en-US">
<head>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<meta charset="ISO-8859-1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contato</title>
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
<script type="text/javascript" src="style/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="style/js/jquery.superbgimage.min.js"></script>
<script type="text/javascript" src="style/js/jquery.slickforms.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
	$('.forms').dcSlickForms();
});
</script>
</head>
<body>
	<?php include_once 'componentes/background.php';?>
	<div id="wrapper">
    <?php include_once 'componentes/redes_sociais.php';?>
    <?php include_once 'componentes/menu.php';?>
 
		<div id="container" class="opacity">
			<div class="content">
				<h2>Fale Conosco</h2>
				<br /> <br />
				<div class="form-container">
					<form class="forms" action="enviar.php" method="post">
						<fieldset>
							<ol>
								<li class="form-row text-input-row"><label>Nome</label> <input
									type="text" name="nome" value="" class="text-input required"
									title="" placeholder="Digite seu nome" /></li>

								<li class="form-row text-input-row"><label>E-mail</label> <input
									type="text" name="email" value=""
									class="text-input required email" title=""
									placeholder="Ex.: contato@euroambientes.com" /></li>

								<li class="form-row text-area-row"><label>Mensagem</label> <textarea
										name="msg" class="text-area required"
										placeholder="Digite sua mensagem..."></textarea></li>

								<li class="form-row hidden-row"><input type="hidden"
									name="hidden" value="" /></li>

								<li class="button-row"><input type="submit" value="Enviar"
									name="enviar" class="btn-submit" /></li>
								<br>
								<li class="button-row"><input type="reset" value="Restaurar"
									class="btn-submit" /></li>
							</ol>
							<input type="hidden" name="v_error" id="v-error" value="Required" />
							<input type="hidden" name="v_email" id="v-email"
								value="Enter a valid email" />
						</fieldset>
					</form>
					<div class="response"></div>
				</div>
				<br />
			</div>
			<div class="sidebar">
				<div class="sidebar-box">
					<h4>Contato</h4>
					<p>
						Rua Benjamim Constant 630, Centro, Passo Fundo - RS <br> <br> <span
							class="lite1">Fone:</span> (54) 3632-5444 <br> <span
							class="lite1">E-mail:</span> contato@euroambientes.com.br
					</p>
				</div>
				<div class="sidebar-box">
					<h4>Onde estamos?</h4>
					<iframe width="265" height="260" frameborder="0" scrolling="no"
						marginheight="0" marginwidth="0"
						src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1757.1300403316993!2d-52.4029863227539!3d-28.260129599156095!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2d6af31ebc00d1ff!2sEuro+Ambientes!5e0!3m2!1spt-BR!2sbr!4v1454596902097"
						width="600" height="450" frameborder="0" style="border: 0"
						allowfullscreen></iframe>

				</div>
			</div>
			<div class="clear"></div>
		</div>
		<!-- End Container -->
  <?php include_once 'componentes/footer.php';?>
</div>
	<!-- End Wrapper -->

	<script type="text/javascript" src="style/js/scripts.js"></script>
</body>
</html>