<?php

session_start ();
include_once ("../seguranca.php");
include_once ("../conexao.php");

$descricao = $_POST ["descricao"];

$query = mysqli_query ( $conectar, "INSERT INTO rotulo (descricao, created) 
	VALUES ('$descricao',
	NOW())" );
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

			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/euroambientes.com.br/adm/administrativo.php?link=9'>
			<script type=\"text/javascript\">
			alert(\"Rótulo cadastrado com Sucesso.\");
			</script>";		   
		}

		else{ 	

			echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/euroambientes.com.br/adm/administrativo.php?link=9'>
			<script type=\"text/javascript\">
			alert(\"Rótulo não foi cadastrado com Sucesso.\");
			</script>";
		}

		?>

	</body>
	</html>