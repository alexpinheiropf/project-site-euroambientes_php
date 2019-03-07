<?php

$resultado = mysqli_query ( $conectar, "SELECT * FROM usuarios order by 'id'" );
$linhas = mysqli_num_rows ( $resultado );

?>

<div class="container theme-showcase" role="main">
	<div class="page-header">
		<h1>Lista de Usuários</h1>
	</div>

	<div class="row">
		<div class="pull-right">
			<a href="administrativo.php?link=3">
				<button type='button' class='btn btn-sm btn-success'>Cadastrar</button></a>
			</div>
		</div>



		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nome</th>
							<th>Email</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>

						<?php
						while ( $linhas = mysqli_fetch_array ( $resultado ) ) {
							echo "<tr>";
							echo "<td>" . $linhas ['id'] . "</td>";
							echo "<td>" . $linhas ['nome'] . "</td>";
							echo "<td>" . $linhas ['email'] . "</td>";
							?>
							<td> 
								<a href='administrativo.php?link=5&id=<?php echo $linhas['id']?>'><button
									type='button' class='btn btn-sm btn-warning'>Editar</button></a>

									<a href='processa/proc_apagar_usuario.php?id=<?php echo $linhas['id']?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>

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