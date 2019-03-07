<?php

  $resultado = mysqli_query ( $conectar, "SELECT * FROM rotulo" );
  $linhas_not = mysqli_num_rows ( $resultado );

?>
<div class="container theme-showcase" role="main">

  <div class="page-header">
    <h1>Descrição da Página</h1>
  </div>

  <div class="row">

    <div class="pull-right">

      <a href="administrativo.php?link=13">

        <button type='button' class='btn btn-sm btn-success'>Cadastrar</button>

      </a>



    </div>

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
          
          $resultado2 = mysqli_query ( $conectar, "SELECT p.descricao pagina, d.descricao frase, d.id cod 
                                                   FROM paginas p, desc_pg d 
                                                   where p.id = d.pg_id
                                                   and p.rotulo_id = ".$linhas_not['id'] );
          $linhas_not2 = mysqli_num_rows ( $resultado2 );

          
           ?>
            <div id="<?php echo $linhas_not['id']?>" class="panel-collapse collapse">

              <ul class="list-group">
                
                <table class="table">
        <thead>

          <tr>

            <th>Página</th>
            <th>Descrição</th>
            <th>Ações</th>

          </tr>

        </thead>
        <tbody>

          <?php
          

          while ( $linhas_not2 = mysqli_fetch_array ( $resultado2 ) ) {


            echo "<tr>";
            echo "<td>" . $linhas_not2 ['pagina'] . "</td>";
            echo "<td>" . $linhas_not2 ['frase'] . "</td>";

            ?>
            <td>
              <a href='administrativo.php?link=14&id=<?php echo $linhas_not2['cod']?>'><button
                type='button' class='btn btn-sm btn-warning'>Editar</button></a>

              <a href='processa/proc_apagar_desc_pg.php?id=<?php echo $linhas_not2['cod']?>'><button
                  type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
            </td>

            <?php echo "</tr>"; }?>

            </tbody>
          </table>



              </ul>



            </div>

            
          </div>
        </div>

        <?php }?>

    </div>
  </div>