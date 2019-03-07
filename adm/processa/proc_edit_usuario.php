<?php

session_start ();

include_once ("../seguranca.php");

include_once ("../conexao.php");

$id = $_POST ["id"];
$nome = $_POST ["nome"];
$email = $_POST ["email"];
$usuario = $_POST ["login"];
$senha = $_POST ["senha"];
$nivel_de_acesso = $_POST ["nivel_de_acesso"];

$s_crip = base64_encode($senha);

$query_senha = mysqli_query ($conectar,"SELECT senha from usuarios where id = '$id'");
$linha_senha = mysqli_fetch_assoc($query_senha);

if($s_crip == $linha_senha['senha']){
	$query = mysqli_query ($conectar,"UPDATE usuarios set 

		                 nome                       = '$nome', 

		                 email                      = '$email', 

		                 login                      = '$usuario', 

		                 nivel_acesso_id            = '$nivel_de_acesso', 

		                 modified = NOW() WHERE id  ='$id'");
} else{

	$query = mysqli_query ($conectar,"UPDATE usuarios set 

		                 nome                       = '$nome', 

		                 email                      = '$email', 

		                 login                      = '$usuario', 

		                 senha                      = '$s_crip', 

		                 nivel_acesso_id            = '$nivel_de_acesso', 

		                 modified = NOW() WHERE id  ='$id'");

}



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

					alert(\"Usuário Editado com Sucesso.\");

				</script>

			";		   

		}

		 else{ 	

				echo "

				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/euroambientes.com.br/adm/administrativo.php?link=4'>

				<script type=\"text/javascript\">

					alert(\"Usuário não foi editado com Sucesso.\");

				</script>

			";		   



		}



		?>

	</body>

</html>