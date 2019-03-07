<?php

session_start ();

include_once ("../seguranca.php");

include_once ("../conexao.php");

$id 	= $_GET ["id"];

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="utf-8">

</head>



<body>

	<?php

	if ($id == 27 || $id == 28 || $id == 29){	

		echo "

		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/euroambientes.com.br/adm/administrativo.php?link=6'>

		<script type=\"text/javascript\">

		alert(\"Descrição é fixa e não pode ser Apagada!!!.\");

		</script>

		";		   

	}else{

		$query     = mysqli_query($conectar,"DELETE FROM desc_pg WHERE id = '$id' ");

		$resultado = mysqli_query($conectar,$query);

		$linhas    = mysqli_affected_rows($conectar);




		if (mysqli_affected_rows($conectar) != 0 ){	

			echo "

			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/euroambientes.com.br/adm/administrativo.php?link=6'>

			<script type=\"text/javascript\">

			alert(\"Descrição Apagada com Sucesso.\");

			</script>

			";		   

		}

		else{ 	

			echo "

			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/euroambientes.com.br/adm/administrativo.php?link=6'>

			<script type=\"text/javascript\">

			alert(\"Descrição não foi apagada com Sucesso.\");

			</script>

			";		   



		}

	}

	?>

</body>

</html>