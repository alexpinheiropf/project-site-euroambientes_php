<?php

$logo 	   = mysqli_query ( $conectar, "SELECT * FROM imagem_sistema where id = 2 " );
$facebook  = mysqli_query ( $conectar, "SELECT * FROM imagem_sistema where id = 3 " );
$twitter   = mysqli_query ( $conectar, "SELECT * FROM imagem_sistema where id = 4 " );
$instagram = mysqli_query ( $conectar, "SELECT * FROM imagem_sistema where id = 5 " );

$linha_log       = mysqli_fetch_assoc ( $logo );
$linha_face      = mysqli_fetch_assoc ( $facebook );
$linha_twitter   = mysqli_fetch_assoc ( $twitter );
$linha_instagram = mysqli_fetch_assoc ( $instagram );

$imagem_l = pg . '/img/' . $linha_log ['imagem'];
$imagem_f = pg . '/img/' . $linha_face ['imagem'];
$imagem_t = pg . '/img/' . $linha_twitter ['imagem'];
$imagem_i = pg . '/img/' . $linha_instagram ['imagem'];

?>
<!-- Begin Wrapper -->
<div id="wrapper">
	<div id="header">
		<div class="logo opacity">
			<a href='<?php echo pg; ?>'><img src="<?php echo $imagem_l; ?>" alt="" /></a>
		</div>
		<div class="social">
			<ul>
				<li><a href="https://www.facebook.com/euroambientespf/?fref=ts" target="_blank">
					<img src="<?php echo $imagem_f; ?>" title="Facebook"
						alt="Facebook" /></a></li>
				<li><a href="https://twitter.com/euroambientespf" target="_blank">
					<img src="<?php echo $imagem_t; ?>" title="Twitter"
						alt="Twitter" /></a></li>
				<li><a href="https://www.instagram.com/euroambientespf/" target="_blank">
					<img src="<?php echo $imagem_i; ?>" height="31px" width="31px" title="Instagram"
						alt="Instagram" /></a></li>
				
			</ul>
		</div>
	</div>
	<div class="clear"></div>