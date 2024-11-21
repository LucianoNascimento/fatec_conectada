<?php 

	if(@$_GET['go'] == 'cadastrarOportunidade'){

		$empresa = $_POST['empresa'];
		$vaga = $_POST['vaga'];
		$descricao = $_POST['descricao'];
		$salario = $_POST['salario'];
		$tipo = $_POST['tipo'];

		require_once 'conexao.php';

		if ($tipo != "Selecione") {
			
			$sql_query = $dbcon->query("INSERT INTO OPORTUNIDADE(OPORTU_EMPRESA, OPORTU_TITULO, OPORTU_DESCRICAO, OPORTU_SALARIO, OPORTU_TIPO) VALUES ('$empresa', '$vaga', '$descricao', '$salario', '$tipo')");

			if($sql_query){

				echo "<script>alert('OPORTUNIDADE CADASTRADO COM SUCESSO !');</script>";

				echo "<meta http-equiv='refresh' content='0, url=./oportunidades_cadastro.php'>";

			}else{
				echo "<script>alert('ERRO AO CADASTRAR OPORTUNIDADE !');</script>";
				echo "<meta http-equiv='refresh' content='0, url=./oportunidades_cadastro.php'>";
			}

		}else{
			echo "<script>alert('O CAMPO TIPO NÃO PODER SER: Selecione!');</script>";
			echo "<meta http-equiv='refresh' content='0, url=./oportunidades_cadastro.php'>";
		}
		

	}



	#FUNÇÃO PARA PEGAR ID DA TABELA
	if (isset($_GET['alterarOportunidade'])) {

		$idOportunidade = @$_GET['idOportunidade'];
		
		if ($idOportunidade != 0) {

			echo "<meta http-equiv='refresh' content='0, url=../oportunidades_lista.php?alterarOportunidade=$idOportunidade'>";

		}else{
			$idOportunidade = 0;
		}

	}



	#FUNÇÃO PARA EXCLUIR OPORTUNIDADE
	if (isset($_GET['excluirOportunidade'])) {

		require_once 'conexao.php';

		$idOportunidade = $_GET['idOportunidade'];

		$sql_query_delete = $dbcon->query("DELETE FROM OPORTUNIDADE WHERE OPORTU_ID =".$idOportunidade); 

		if($sql_query_delete) {

			echo "<script>alert('Oportunidade deletada com sucesso');</script>";
			echo "<meta http-equiv='refresh' content='0, url=../oportunidades_lista.php'>";

		} else {
			echo "<script>alert('Erro ao deletar Oportunidade');</script>";
		}

	}



	#FUNÇÃO PARA EDITAR OPORTUNIDADE
	if(@$_GET['go'] == 'editarOportunidade'){

		$empresa = $_POST['empresa'];
		$vaga = $_POST['vaga'];
		$descricao = $_POST['descricao'];
		$salario = $_POST['salario'];
		$tipo = $_POST['tipo'];

		$idOportunidade = $_POST['idOportuEdit'];

		require_once 'conexao.php';

		$sql_query = $dbcon->query("UPDATE OPORTUNIDADE SET OPORTU_EMPRESA = '$empresa', OPORTU_TITULO = '$vaga', OPORTU_DESCRICAO = '$descricao', OPORTU_SALARIO = '$salario', OPORTU_TIPO = '$tipo' WHERE OPORTU_ID = '$idOportunidade';");

		if($sql_query){
												
			echo "<script>alert('OPORTUNIDADE ALTERADA COM SUCESSO !');</script>";
			
			echo "<meta http-equiv='refresh' content='0, url=./oportunidades_lista.php'>";

		}else{
			echo "<script>alert('ERRO AO ALTERAR OPORTUNIDADE !');</script>";
		}

	}


	#SETAR ID PARA VIZUALIZAR A OPORTUNIDADE
	if (isset($_GET['listaAlunoOportunidade'])) {

		$idOportunidade = @$_GET['idOportunidade'];
		
		if ($idOportunidade != 0) {

			echo "<meta http-equiv='refresh' content='0, url=../aluno_oportunidades_lista.php?listaAlunoOportunidade=$idOportunidade'>";

		}else{
			$idOportunidade = 0;
		}
	}
?>