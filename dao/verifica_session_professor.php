<?php  
//verifica se o usuario esta logado no sistema

	session_start();

	if((!isset ($_SESSION['usuario_login']) == true) and (!isset ($_SESSION['senha_login']) == true)){

		unset($_SESSION['usuario_login']);
		unset($_SESSION['senha_login']);
		unset($_SESSION['usuario_tipo']);
		header('location:index.php');

	}else if ($_SESSION['usuario_tipo'] != "Professor") {
		
		unset($_SESSION['usuario_login']);
		unset($_SESSION['senha_login']);
		unset($_SESSION['usuario_tipo']);
		header('location:index.php');
	}

?>