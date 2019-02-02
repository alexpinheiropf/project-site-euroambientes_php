<?php
/*
 * Esta funчуo executa um comando SQL no banco de dados MySQL
 * $id - Ponteiro da Conexуo
 * $sql - Clсusula SQL a executar
 * $erro - Especifica se a funчуo exibe ou nуo(0=nуo, 1=sim)
 * $res - Resposta
 */
function mysqlexecuta($id, $sql, $erro = 1) {
	if (empty ( $sql ) or ! ($id))
		return 0; // Erro na conexуo ou no comando SQL
	if (! ($res = @mysql_query ( $sql, $id ))) {
		if ($erro)
			echo "Ocorreu um erro na execuчуo do Comando SQL no banco de dados. Favor Contactar o Administrador.";
		exit ();
	}
	return $res;
}
?>