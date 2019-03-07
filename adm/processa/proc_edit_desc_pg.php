<?php

session_start ();
include_once ("../seguranca.php");
include_once ("../conexao.php");

$id          = $_POST ["id"];
$descricao   = $_POST ["descricao"];
$pg_id   	 = $_POST ["pg_id"];




$query = mysqli_query ($conectar,"UPDATE desc_pg set 

	descricao   = '$descricao',
	pg_id   	= '$pg_id',
	modifield 	= NOW() WHERE id='$id'");

	?>

	<!DOCTYPE html>

	<html lang="pt-br">

	<head>

		<meta charset="utf-8">

	</head>



	<body>

		<?php

		if (mysqli_affected_rows($conectar) != 0 ){	

			echo "

			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/euroambientes.com.br/adm/administrativo.php?link=6'>

			<script type=\"text/javascript\">

			alert(\"Descricao Editada com Sucesso.\");

			</script>

			";		   

		}

		else{ 	

			echo "

			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/euroambientes.com.br/adm/administrativo.php?link=6'>
			<script type=\"text/javascript\">
			alert(\"Descricao não foi editada com Sucesso.\");
			</script>";		   

		}

		?>
	</body>
	</html>