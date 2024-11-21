<?php


	#FUNÇÃO PARA CADASTRAR USUARIO
	if(@$_GET['go'] == 'cadastrarUsuario'){

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$tipo = $_POST['tipo'];

		require_once 'conexao.php';

		$sql_query_verifica_usuario = $dbcon->query("SELECT USU_ID, USU_NOME FROM USUARIO WHERE USU_EMAIL = '$email'");

		$linhas = mysqli_num_rows($sql_query_verifica_usuario);

		if($linhas > 0){

			echo "<script>alert('USUÁRIO JÁ CADASTRADO !');</script>";
			echo "<meta http-equiv='refresh' content='0, url=./usuarios_cadastro.php'>";

		}else{

			$sql_query = $dbcon->query("INSERT INTO USUARIO (USU_NOME, USU_EMAIL, USU_SENHA, USU_TIPO) VALUES ('$nome', '$email', '$senha', '$tipo')");

			if($sql_query){

				echo "<script>alert('USUÁRIO CADASTRADO COM SUCESSO !');</script>";

				echo "<meta http-equiv='refresh' content='0, url=./usuarios_cadastro.php'>";

			}else{
				echo "<script>alert('ERRO AO CADASTRAR USUÁRIO !');</script>";
			}

		}

	}


	#FUNÇÃO PARA LOGAR NO SISTEMA
	if(@$_GET['go'] == 'loginUsuario'){

		// inicia a sessão
		session_start();
		
		// as variáveis login e senha recebem os dados digitados na página anterior
		$user = $_POST['usuario_login'];
		$pwd = $_POST['senha_login'];
		
		require_once 'conexao.php';
		
		$sql_query_login = $dbcon->query("SELECT USU_ID, USU_TIPO FROM USUARIO WHERE USU_EMAIL = '$user' AND USU_SENHA = '$pwd'");
		

		//se existir usuario faça:
		if(mysqli_num_rows($sql_query_login) > 0 ){

			//printa uma mensagem alertando > login c/ sucesso
			echo "<script>alert('Usuário logado com sucesso.');</script>";

			$_SESSION['usuario_login'] = $user;
			$_SESSION['senha_login'] = $pwd;

			// CAPTURA OS DADOS DO USUÁRIO
			while ($dados = $sql_query_login->fetch_array()) {
				$idUser = $dados['USU_ID'];
				$tipoUser = $dados['USU_TIPO'];
			}

			$_SESSION['usuario_tipo'] = $tipoUser;

			// VERIFICA O TIPO DE USUARIO
			if ($tipoUser == "Aluno") {
				echo "<script>location.href='./aluno_home.php';</script>";
			}else if ($tipoUser == "Professor") {
				echo "<script>location.href='./professor_home.php';</script>";
			}else if ($tipoUser == "Coordenador") {		
				echo "<script>location.href='./coordenador_home.php';</script>";
			}

		} else{
			//printa uma mensagem alertando > login errado
			echo "<script>alert('Usuário e senha não correspondem.'); history.back();</script>";
			
			//limpa os campos (login e senha)
			unset ($_SESSION['usuario_login']);
			unset ($_SESSION['senha_login']);
			
			//direciona para a pagina inicial
			header('location:./index.php');
		}

	}



	#FUNÇÃO PARA EXCLUIR USUÁRIO
	if (isset($_GET['excluirUsuario'])) {

		require_once 'conexao.php';

		$idUsuario = $_GET['idUsuario'];

		$sql_query_delete = $dbcon->query("DELETE FROM USUARIO WHERE USU_ID =".$idUsuario); 

		if($sql_query_delete) {

			echo "<script>alert('Usuário deletado com sucesso');</script>";
			echo "<meta http-equiv='refresh' content='0, url=../usuarios_lista.php'>";

		} else {
			echo "<script>alert('Erro ao deletar Usuário');</script>";
		}

	}



	#FUNÇÃO PARA PEGAR ID DA TABELA
	if (isset($_GET['alterarUsuario'])) {

		$idUsuario = @$_GET['idUsuario'];
		
		if ($idUsuario != 0) {

			echo "<meta http-equiv='refresh' content='0, url=../usuarios_lista.php?alterarUsuario=$idUsuario'>";

		}else{
			$idUsuario = 0;
		}

	}


	#FUNÇÃO PARA EDITAR USUARIO
	if(@$_GET['go'] == 'editarUsuario'){

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$tipo = $_POST['tipo'];

		$idUsuario = $_POST['idUseEdit'];

		require_once 'conexao.php';

		$sql_query = $dbcon->query("UPDATE USUARIO SET USU_NOME = '$nome', USU_EMAIL = '$email', USU_SENHA = '$senha', USU_TIPO = '$tipo' WHERE USU_ID = '$idUsuario';");

		if($sql_query){
												
			echo "<script>alert('USUÁRIO ALTERADO COM SUCESSO !');</script>";
			
			echo "<meta http-equiv='refresh' content='0, url=./usuarios_lista.php'>";

		}else{
			echo "<script>alert('ERRO AO ALTERAR USUÁRIO !');</script>";
		}

	}

?>