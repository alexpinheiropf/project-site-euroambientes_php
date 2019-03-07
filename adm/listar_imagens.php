<?php

$resultado = mysqli_query ( $conectar, "SELECT * FROM rotulo where id <> 10" );
$linhas_not = mysqli_num_rows ( $resultado );

?>
<div class="container theme-showcase" role="main">

  <div class="page-header">
    <h1>Imagens Páginas</h1>
  </div>

  <div class="row">
<br>
    <div class="col-md-12">

      <?php while ( $linhas_not = mysqli_fetch_array ( $resultado ) ) { ?>

        <div class="panel-group">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#<?php echo $linhas_not['id']?>"><?php echo $linhas_not['descricao']?></a>
              </h4>
            </div>
          <?php 
          
          $resultado2 = mysqli_query ( $conectar, "SELECT * FROM paginas where rotulo_id = ".$linhas_not['id'] );
          $linhas_not2 = mysqli_num_rows ( $resultado2 );
          
           ?>
            <div id="<?php echo $linhas_not['id']?>" class="panel-collapse collapse">
              <ul class="list-group">
                <?php while ( $linhas_not2 = mysqli_fetch_array ( $resultado2 ) ) {?>
                <a href='administrativo.php?link=19&id=<?php echo $linhas_not2['id']?>'><li class="list-group-item"><?php echo $linhas_not2['descricao']?></li>
                 <?php }?></a>
              </ul>
            </div>

            
          </div>
        </div>

        <?php }?>

    </div>
  </div>