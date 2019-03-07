<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enviar e-mail</title>
</head>
<body>
<?php
if (! empty ( $_POST )) {
	$cab = "Form: " . $_POST ['nome'] . "<" . $_POST ['email'] . ">\n";
	
	$mensagem = "Contato via site - euroambientes.com.br \n";
	$mensagem = "Nome: " . $_POST ['nome'] . "\n";
	$mensagem = "Email: " . $_POST ['email'] . "\n";
	$mensagem = "Mensagem: " . $_POST ['msg'] . "\n";
	
	if (mail ( "contato@euroambientes.com.br", "Formulário de contato - euroambientes.com.br", $mensagem, $cab )) {
		echo "<script type=\"text/javascript\">alert(\"Sua mensagem foi enviada com sucesso.\"); history.go(-1); </script>\n";
	} else
		echo "<script type=\"text/javascript\">alert(\"Ocorreu um erro ao tentar enviar esta mensagem.\"); history.go(-1); </script>\n";
} else {
	header ( "Location:contato.php" );
}

?>
</body>
</html>