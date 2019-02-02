<?php include_once '../componentes/conectar.php';?>
<?php include_once '../componentes/bancoexecuta.php';?>

<?php
$acao = $_GET['acao'];

if ($acao=="salvar")
{
	$nome = $_POST['txnome'];
	$email = $_POST['txemail'];
	$comando = "insert into ";
	$comando .= "cliente_cad";
	$comando .= " (nome,email)";
	$comando .= " values (";
	$comando .= " '".$nome."',";
	$comando .= " '".$email."'";
	$comando .= " )";
	mysqlexecuta ($id,$comando);
	echo '<script language= "JavaScript">
location.href="cliente_lista.php" </script>';
}
if ($acao=="alterar")
{
	
	$codigo = $_POST['txcodigo'];
	$nome = $_POST['txnome'];
	$email = $_POST['txemail'];
	
	$comando = "update ";
	$comando .= "cliente_cad ";
	$comando .= "set ";
	$comando .= "nome = '".$nome."', ";
	$comando .= "email = '".$email."' ";
	$comando .= "where codigo = '".$codigo."' ";
	echo $comando;
	mysqlexecuta ($id,$comando);
	echo '<script language= "JavaScript">
location.href="cliente_lista.php" </script>';
}
if ($acao=="excluir")
{
	$codigo = $_GET['codigo'];
	$comando = "delete from ";
	$comando .= "cliente_cad ";
	$comando .= "where codigo = '".$codigo."'";
	mysqlexecuta ($id,$comando);
	echo '<script language= "JavaScript">
location.href="cliente_lista.php" </script>';
	
}


?>
