<?php
session_start();
if(!isset($_SESSION["usuario"]))
{
	echo '<script language= "JavaScript">
location.href="index_banco.php" </script>';
	exit;
}
?>