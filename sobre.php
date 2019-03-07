<?php


$img_pg = mysqli_query ( $conectar, "SELECT * FROM imagem_pagina where pagina_id = 21");
$v_img_pg = mysqli_num_rows ( $img_pg );

$resultado2 = mysqli_query ( $conectar, "SELECT * FROM desc_pg where id = 27");
$linha2= mysqli_fetch_assoc ( $resultado2 );

?>



<div class="full-width">
  <div id="showcase">
  <!-- Each child div in #showcase represents a slide -->
  <?php while ( $v_img_pg = mysqli_fetch_array ( $img_pg ) ) { ?>
  <div class="showcase-slide">
    <?php $foto = $v_img_pg['imagem']?>
    <div class="showcase-content">
      <img src="<?php echo "img/$foto"; ?>" alt=""
      width="900" height="400" />
    </div>
  </div>
  <?php }?>
</div>
<br> <br>
  <div class="showcase"><?php echo $linha2['descricao']; ?></div>
  <div class="clear"></div>
</div>