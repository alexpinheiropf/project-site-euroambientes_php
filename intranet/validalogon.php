<?php include_once '../componentes/conectar.php';?>
<?php include_once '../componentes/bancoexecuta.php';?>
<?php
$acao =$_GET['acao']; 
if ($acao == "logoff")
{
		session_start();
		session_unset();
		session_destroy();
		echo '<script language= "JavaScript">
location.href="intranet.php" </script>';
		
}

if($acao=="validar")
{
	$usuario = $_POST['txusuario'];
	$senha= $_POST['txsenha'];
	
	$comando = "select * from usuario_cad where ";
	$comando .= " usuario = '".$usuario."'";
	$comando .= " and senha = '".$senha."'";
	$resposta = mysqlexecuta ( $id, $comando );
	$valida = 0;
	while ( $linha = mysql_fetch_array ( $resposta ) ) 
	{
		$valida = 1;
	}
	if ($valida==0){
		echo "Usuário ou senha inválidos! Verifique";
		echo "<br>";
		echo "<a href = 'index.php'>Tente Novamente</a>";
	}
	else
	{
		session_start();
		$_SESSION["usuario"] = $usuario;
		echo '<script language= "JavaScript">
location.href="intranet.php" </script>';
		
		
	}
}
?>