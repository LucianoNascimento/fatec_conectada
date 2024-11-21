<?php 

	if(@$_GET['go'] == 'cadastrarAtividade'){

		$tipo = $_POST['tipo'];
		$descricao = $_POST['descricao'];
		$data = $_POST['data'];
		$nota = $_POST['nota'];
		//$idUser VEM DE DADOS_USUARO.PHP

		require_once 'conexao.php';

		if ($tipo != "Selecione") {
			
			$sql_query = $dbcon->query("INSERT INTO ATIVIDADE(ATIVI_TIPO, ATIVI_DESCRICAO, ATIVI_DATA_ENTREGA, ATIVI_NOTA, ATIVI_FK_PROFESSOR) VALUES ('$tipo', '$descricao', '$data', '$nota', '$idUser')");

			if($sql_query){

				echo "<script>alert('ATIVIDADE CADASTRADO COM SUCESSO !');</script>";

				echo "<meta http-equiv='refresh' content='0, url=./atividades_cadastro.php'>";

			}else{
				echo "<script>alert('ERRO AO CADASTRAR ATIVIDADE !');</script>";
				echo "<meta http-equiv='refresh' content='0, url=./atividades_cadastro.php'>";
			}

		}else{
			echo "<script>alert('O CAMPO TIPO NÃO PODER SER: Selecione!');</script>";
			echo "<meta http-equiv='refresh' content='0, url=./atividades_cadastro.php'>";
		}
		

	}



	#FUNÇÃO PARA PEGAR ID DA TABELA
	if (isset($_GET['alterarAtividade'])) {

		$idAtividade = @$_GET['idAtividade'];
		
		if ($idAtividade != 0) {

			echo "<meta http-equiv='refresh' content='0, url=../atividades_lista.php?alterarAtividade=$idAtividade'>";

		}else{
			$idAtividade = 0;
		}

	}



	#FUNÇÃO PARA EXCLUIR ATIVIDADE
	if (isset($_GET['excluirAtividade'])) {

		require_once 'conexao.php';

		$idAtividade = $_GET['idAtividade'];

		$sql_query_delete = $dbcon->query("DELETE FROM ATIVIDADE WHERE ATIVI_ID =".$idAtividade); 

		if($sql_query_delete) {

			echo "<script>alert('Atividade deletada com sucesso');</script>";
			echo "<meta http-equiv='refresh' content='0, url=../atividades_lista.php'>";

		} else {
			echo "<script>alert('Erro ao deletar Atividade');</script>";
		}

	}



	#FUNÇÃO PARA EDITAR ATIVIDADE
	if(@$_GET['go'] == 'editarAtividade'){

		$tipo = $_POST['tipo'];
		$descricao = $_POST['descricao'];
		$data = $_POST['data'];
		$nota = $_POST['nota'];
		//$idUser VEM DE DADOS_USUARO.PHP

		$idAtividade = $_POST['idAtividadeEdit'];

		require_once 'conexao.php';

		$sql_query = $dbcon->query("UPDATE ATIVIDADE SET ATIVI_TIPO = '$tipo', ATIVI_DESCRICAO = '$descricao', ATIVI_DATA_ENTREGA = '$data', ATIVI_NOTA = '$nota', ATIVI_FK_PROFESSOR = '$idUser' WHERE ATIVI_ID = '$idAtividade';");

		if($sql_query){
												
			echo "<script>alert('ATIVIDADE ALTERADA COM SUCESSO !');</script>";
			
			echo "<meta http-equiv='refresh' content='0, url=./atividades_lista.php'>";

		}else{
			echo "<script>alert('ERRO AO ATIVIDADE OPORTUNIDADE !');</script>";
		}

	}

	#SETAR ID PARA VIZUALIZAR A ATIVIDADE
	if (isset($_GET['listaAlunoAtividade'])) {

		$idAtividade = @$_GET['idAtividade'];
		
		if ($idAtividade != 0) {

			echo "<meta http-equiv='refresh' content='0, url=../aluno_atividades_lista.php?listaAlunoAtividade=$idAtividade'>";

		}else{
			$idAtividade = 0;
		}
	}

?>