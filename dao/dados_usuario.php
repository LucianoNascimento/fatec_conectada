<?php  
	header('Content-Type: text/html; charset=utf-8');

	require_once 'conexao.php';

	$login = $_SESSION['usuario_login'];

	$sql_query_dados = $dbcon->query("SELECT USU_ID, USU_NOME, USU_EMAIL, USU_SENHA, USU_TIPO FROM USUARIO WHERE USU_EMAIL = '$login'");

	// CAPTURA OS DADOS DO USUÁRIO
	while ($dados = $sql_query_dados->fetch_array()) {
		$idUser = $dados['USU_ID'];
		$nomeUser = $dados['USU_NOME'];
		$emailUser = $dados['USU_EMAIL'];
		$tipoUser = $dados['USU_TIPO'];
	}

?>