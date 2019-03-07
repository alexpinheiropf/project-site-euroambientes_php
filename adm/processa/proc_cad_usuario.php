<?php

session_start ();

include_once ("../seguranca.php");

include_once ("../conexao.php");

$nome            = $_POST ["nome"];

$email           = $_POST ["email"];

$usuario         = $_POST ["login"];

$senha           = $_POST ["senha"];

$nivel_de_acesso = $_POST ["nivel_de_acesso"];



$s_crip = base64_encode($senha);



$query = mysqli_query ( $conectar, "INSERT INTO usuarios (nome, email, login, senha, nivel_acesso_id, created) 

								                 VALUES ('$nome', '$email', '$usuario', '$s_crip', '$nivel_de_acesso', NOW())" );

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

				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/euroambientes.com.br/adm/administrativo.php?link=4'>

				<script type=\"text/javascript\">

					alert(\"Usuário cadastrado com Sucesso.\");

				</script>

			";		   

		}

		 else{ 	

				echo "

				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/euroambientes.com.br/adm/administrativo.php?link=4'>

				<script type=\"text/javascript\">

					alert(\"Usuário não foi cadastrado com Sucesso.\");

				</script>

			";		   



		}



		?>

	</body>

</html>