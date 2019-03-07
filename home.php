<?php

$resultado1 = mysqli_query ( $conectar, "SELECT * FROM paginas where id = 4");
$linha1= mysqli_fetch_assoc ( $resultado1 );

$resultado2 = mysqli_query ( $conectar, "SELECT * FROM desc_pg where pg_id = ".$linha1['id']);
$linha2= mysqli_fetch_assoc ( $resultado2 );

$img_pg = mysqli_query ( $conectar, "SELECT * FROM imagem_pagina where pagina_id = 4 ");
$v_img_pg = mysqli_num_rows ( $img_pg );

$pg_carrossel = mysqli_query ( $conectar, "SELECT * FROM paginas where id not in (4, 21, 22)");
$linha_car= mysqli_fetch_assoc ( $pg_carrossel );



?>
<!-- Begin Showcase -->
<div id="showcase" >
	<!-- Each child div in #showcase represents a slide -->
	<?php while ( $v_img_pg = mysqli_fetch_array ( $img_pg ) ) { ?>
		<div class="showcase-slide">
			<!-- Put the slide content in a div with the class .showcase-content. -->
			<?php $foto = $v_img_pg['imagem']?>
			<div class="showcase-content">
				<img src="<?php echo "img/$foto"; ?>" alt="" width="900" height="400" />
			</div>
		</div>
	<?php }?>
</div>
<!-- End Showcase -->
<br><br>

<div class="intro"><?php echo $linha2['descricao']; ?></div>


<div class="clear"></div>
<div class="hr1"></div>
<!-- Divider -->
<h2><a href="#">Ambientes</h2>
	<div class="carousel">
		<div id="carousel-scroll">
			<a href="#" id="prev">Prev</a><a href="#" id="next">Next</a>
		</div>

		

		<ul>
			<?php while ( $linha_car = mysqli_fetch_array ( $pg_carrossel ) ) {

				$imagem_carrossel = mysqli_query ( $conectar, "SELECT * 
															   FROM imagem_pagina 
															   where pagina_id = ".$linha_car['id']);
				$v_imagem_carrossel = mysqli_fetch_assoc ( $imagem_carrossel );
				$foto1 = $v_imagem_carrossel['imagem']?>
				<li>

					<a href="<?php echo pg.'/pg/'.$linha_car['tag']; ?>">
						<span class="overlay details"><marquee> <h8> <?php echo $linha_car['descricao']?></h8> </marquee></span>
						<img src="<?php echo "img/$foto1"; ?>" alt="" width="164px" height="130px"/>
						</a></li><?php }?>
					</ul>


				</div>