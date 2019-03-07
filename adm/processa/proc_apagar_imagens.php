
<?php

session_start ();
include_once ("../seguranca.php");
include_once ("../conexao.php");

$id 	= $_GET ["id"];

$pagina = mysqli_query ( $conectar, "SELECT * FROM imagem_pagina where id = $id" );
$pg = mysqli_fetch_assoc ( $pagina );

$pg_volta = $pg['pagina_id'];

$query = mysqli_query($conectar,"DELETE FROM imagem_pagina WHERE id = '$id' ");
$resultado = mysqli_query($conectar,$query);
$linhas = mysqli_affected_rows($conectar);


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

				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/euroambientes.com.br/adm/administrativo.php?link=19&id=$pg_volta'>

				<script type=\"text/javascript\">

					alert(\"Imagem Apagada com Sucesso.\");

				</script>

			";		   

		}

		 else{ 	

				echo "

				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/euroambientes.com.br/adm/administrativo.php?link=2'>

				<script type=\"text/javascript\">

					alert(\"Imagem não foi apagada com Sucesso.\");

				</script>

			";		   



		}



		?>

	</body>

</html>