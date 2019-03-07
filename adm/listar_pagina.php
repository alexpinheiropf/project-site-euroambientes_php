<?php

$resultado = mysqli_query ( $conectar, "SELECT p.*, r.descricao rotulo 
									    FROM paginas p, rotulo r 
									    WHERE p.rotulo_id = r.id
									    order by r.id, p.descricao" );
$linhas = mysqli_num_rows ( $resultado );

?>



<div class="container theme-showcase" role="main">

	<div class="page-header">

		<h1>Páginas</h1>

	</div>



	<div class="row">

		<div class="pull-right">

			<a href="administrativo.php?link=10">

				<button type='button' class='btn btn-sm btn-success'>Cadastrar</button>

			</a>



		</div>

	</div>



	<div class="row">

		<div class="col-md-12">

			<table class="table">

				<thead>

					<tr>

						<th>ID</th>
						<th>Páginas</th>
						<th>Tag</th>
						<th>Rótulos</th>
						<th>Ações</th>

					</tr>

				</thead>

				<tbody>

					<?php

					while ( $linhas = mysqli_fetch_array ( $resultado ) ) {

						echo "<tr>";

						echo "<td>" . $linhas ['id'] . "</td>";
						echo "<td>" . $linhas ['descricao'] . "</td>";
						echo "<td>" . $linhas ['tag'] . "</td>";
						echo "<td>" . $linhas ['rotulo'] . "</td>";

						?>

							<td>

							

						<a href='administrativo.php?link=11&id=<?php echo $linhas['id']?>'><button

								type='button' class='btn btn-sm btn-warning'>Editar</button></a>



						<a

						href='processa/proc_apagar_pagina.php?id=<?php echo $linhas['id']?>'><button

								type='button' class='btn btn-sm btn-danger'>Apagar</button></a>

					</td>

							<?php

						echo "</tr>";

					}

					

					?>

					

						

					</tbody>

			</table>

		</div>

	</div>



</div>

<!-- /container -->