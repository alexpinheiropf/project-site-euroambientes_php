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

	if ($id == 4 || $id == 6 || $id == 10){	

		echo "

		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/euroambientes.com.br/adm/administrativo.php?link=9'>

		<script type=\"text/javascript\">

		alert(\"Rótulo não pode ser Apagado!!!.\");

		</script>

		";		   

	}else{

		$query     = mysqli_query($conectar,"DELETE FROM rotulo WHERE id = '$id' ");

		$resultado = mysqli_query($conectar,$query);

		$linhas    = mysqli_affected_rows($conectar);


		if (mysqli_affected_rows($conectar) != 0 ){	

			echo "

			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/euroambientes.com.br/adm/administrativo.php?link=9'>

			<script type=\"text/javascript\">

			alert(\"Rótulo Apagado com Sucesso.\");

			</script>

			";		   

		}

		else{ 	

			echo "

			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/euroambientes.com.br/adm/administrativo.php?link=9'>

			<script type=\"text/javascript\">

			alert(\"Rótulo não foi apagado com Sucesso.\");

			</script>

			";		   



		}

	}








	?>

</body>

</html>