<?php

session_start ();
include_once ("../seguranca.php");
include_once ("../conexao.php");

$descricao = $_POST ["descricao"];
$pg_id 	   = $_POST ["pg_id"];



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
	<?php

	$aux = mysqli_query ($conectar, "SELECT * FROM desc_pg where pg_id = ".$pg_id );
	$linhas_not = mysqli_fetch_assoc ( $aux );
	if($pg_id == $linhas_not['pg_id']){
		echo "

		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/euroambientes.com.br/adm/administrativo.php?link=6'>
		<script type=\"text/javascript\">
		alert(\"Para essa página já existe uma descrição!!! Se quiser pode excluir a descrição existente e acrescentar uma nova ou editar a descrição existente .\");
		</script>";		

	}else{

		$query = mysqli_query ( $conectar, "INSERT INTO desc_pg (descricao, pg_id, created) 
			VALUES ('$descricao', '$pg_id', NOW())" );


		if (mysqli_affected_rows($conectar) != 0 ){	
			echo "

			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/euroambientes.com.br/adm/administrativo.php?link=6'>
			<script type=\"text/javascript\">
			alert(\"Descricao cadastrada com Sucesso.\");
			</script>";		   
		}

		else{ 	

			echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/euroambientes.com.br/adm/administrativo.php?link=6'>
			<script type=\"text/javascript\">
			alert(\"Descricao não foi cadastrada com Sucesso.\");
			</script>";
		}
	}

	?>

</body>
</html>