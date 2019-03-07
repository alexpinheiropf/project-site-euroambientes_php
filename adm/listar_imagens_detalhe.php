<?php 

$id = $_GET ['id'];

$pagina = mysqli_query ( $conectar, "SELECT * FROM paginas where id = $id" );
$pg = mysqli_fetch_assoc ( $pagina );

$img_pg = mysqli_query ( $conectar, "SELECT * FROM imagem_pagina where pagina_id = $id" );
$v_img_pg = mysqli_num_rows ( $img_pg );

?>

<div class="container theme-showcase" role="main">
  <div class="page-header">
    <h1><?php echo $pg['descricao']; ?></h1>
  </div>

  <div class="row">
    <div class="pull-right">
      <a href="administrativo.php?link=20">
        <button type='button' class='btn btn-sm btn-success'>Cadastrar</button>
      </a>
      <a href='administrativo.php?link=2&id=<?php echo $v_img_pg['pagina_id']; ?>'>
        <button type='button' class='btn btn-sm btn-info'>Listar</button></a>
      </div>

    </div>

    <div class="row">
      
    <br>
  <div class="col-md-12">
       <div class="row">
        <?php while ( $v_img_pg = mysqli_fetch_array ( $img_pg ) ) { ?>
        <div class="col-md-4">
          <div class="thumbnail">

            <?php $foto = $v_img_pg['imagem']?>

              <img src="<?php echo "../img/$foto"; ?>" alt="<?php echo $v_img_pg['pagina_id']?>" style="width:auto; height: 200px;"> 
              <br> 
              <td>
                <a href='administrativo.php?link=21&id=<?php echo $v_img_pg['id']?>'><button
                  type='button' class='btn btn-sm btn-warning'>Editar</button></a>

                  <a href='processa/proc_apagar_imagens.php?id=<?php echo $v_img_pg['id']?>'><button
                    type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
                </td>
                
              </div>
            </div>
<?php }?>
          </div>
          </div>
          
        
      </div>
</div>