<?php

$url = (isset ( $_GET ['url'] )) ? $_GET ['url'] : '';
$explode = explode ( '/', $url );

$resultado = mysqli_query ( $conectar, "SELECT * FROM rotulo where id not in (4,6,10)" );
$linhas_not = mysqli_num_rows ( $resultado );

$resultado3 = mysqli_query ( $conectar, "SELECT * FROM rotulo where id = 4" );
$linhas_not3 = mysqli_fetch_assoc ( $resultado3 );

$resultado4 = mysqli_query ( $conectar, "SELECT * FROM rotulo where id = 6" );
$linhas_not4 = mysqli_fetch_assoc ( $resultado4 );

$resultado5 = mysqli_query ( $conectar, "SELECT * FROM rotulo where id = 10" );
$linhas_not5 = mysqli_fetch_assoc ( $resultado5 );

?>

<!-- Begin Menu -->
<div id="menu" class="menu opacity">
	<ul>
		<li class='li-home'><a href="<?php echo pg.'/home'; ?>"><?php echo $linhas_not3['descricao']  ?></a></li>
		
		<?php while ( $linhas_not = mysqli_fetch_array ( $resultado ) ) { ?>
			<li class='li-home'><a href="#"><?php echo $linhas_not['descricao']?></a>
				<?php 

				$resultado2 = mysqli_query ( $conectar, "SELECT * FROM paginas where rotulo_id = ".$linhas_not['id'] );
				$linhas_not2 = mysqli_num_rows ( $resultado2 );
				?>
				 
					<ul>
						<?php while ( $linhas_not2 = mysqli_fetch_array ( $resultado2 ) ) { ?>

						<li class='li-home'><a href="<?php echo pg.'/pg/'.$linhas_not2['tag']; ?>"><?php echo $linhas_not2['descricao']?></a></li>
						<?php }?>
					</ul>
				
			</li>
		<?php }?>
			<li class='li-home'><a href="<?php echo pg.'/sobre'; ?>"><?php echo$linhas_not4['descricao'] ?></a></li>
			<li class='li-home'><a href="<?php echo pg.'/contato'; ?>"><?php echo$linhas_not5['descricao'] ?></a></li>
			</ul>

			<!-- End Menu -->

			<br style="clear: left" />
		</div>
  <!-- End Menu -->