<?php

$url = (isset ( $_GET ['url'] )) ? $_GET ['url'] : '';
$explode = explode ( '/', $url );
$pg = $explode [1];

$resultado1 = mysqli_query ( $conectar, "SELECT * FROM paginas where tag = '$pg'");
$linha1= mysqli_fetch_assoc ( $resultado1 );


$resultado2 = mysqli_query ( $conectar, "SELECT * FROM desc_pg where pg_id = ".$linha1['id']);
$linha2= mysqli_fetch_assoc ( $resultado2 );

$img_pg = mysqli_query ( $conectar, "SELECT * FROM imagem_pagina where pagina_id = ".$linha1['id'] );
$v_img_pg = mysqli_num_rows ( $img_pg );

?>

<!-- Begin Showcase -->
<div id="showcase">
	<!-- Each child div in #showcase represents a slide -->
	<?php while ( $v_img_pg = mysqli_fetch_array ( $img_pg ) ) { ?>
	<div class="showcase-slide">
		<?php $foto = $v_img_pg['imagem']?>
		<div class="showcase-content">
			<img src="<?php echo "../img/$foto"; ?>" alt=""
			width="900" height="auto" />
		</div>
	</div>
	<?php }?>
</div>
<br> <br>

<blockquote><?php echo $linha2['descricao']; ?></blockquote>
<br>
</div>