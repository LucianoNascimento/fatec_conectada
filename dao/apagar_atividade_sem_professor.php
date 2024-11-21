<?php

	require_once 'conexao.php';

	$sql_query_set_safe = $dbcon->query("SET SQL_SAFE_UPDATES=0;");

	if($sql_query_set_safe){

		$sql_query_delete_automatico = $dbcon->query("DELETE FROM ATIVIDADE WHERE ATIVI_FK_PROFESSOR IN(SELECT USU_ID FROM USUARIO WHERE USU_TIPO != 'Professor');");
		
	}

?>