<?php

$background 	   = mysqli_query ( $conectar, "SELECT * FROM imagem_sistema where id = 7 " );

$linha_bac       = mysqli_fetch_assoc ( $background );

$imagem_b = pg . '/img/' . $linha_bac ['imagem'];

?>

<div id="thumbs">
	
	<a href="<?php echo $imagem_b; ?>"></a>

</div>
<div id="superbgimage">
	<div class="scanlines"></div>
</div>
