<?php
$dbname = "euro_ambientes"; // Indique o nome do banco de dados que será aberto
$usuario = "root"; // Indique o nome do usuário que tem acesso
$password = "root"; // Indique a senha do usuário
                  // 1º passo - Conecta ao servidor MySQL
if (! ($id = mysql_connect ( "localhost", $usuario, $password ))) {
	echo "Não foi possível estabelecer uma conexão com o gerenciador MySQL. Favor Contactar o Administrador.";
	exit ();
}
if (! ($con = mysql_select_db ( $dbname, $id ))) {
	echo "Repositório não encontrado.";
	exit ();
}
?>