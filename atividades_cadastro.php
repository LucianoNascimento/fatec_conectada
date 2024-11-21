<?php require_once "dao/verifica_session_professor.php"; ?>
<?php require_once "dao/dados_usuario.php"; ?>
<?php require_once "dao/gerenciar_atividades.php"; ?>

<html>
	<head>
		<title>Fatec Conectada</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom_menu.css" rel="stylesheet">
	</head>

	<body>

		<div class="navbar navbar-inverse navbar-fixed-left">
			<a class="navbar-brand" href="professor_home.php">Menu</a>
			<br><br><br>
			<ul class="nav navbar-nav" style="margin-left: 0px;">
		        <li><a href="atividades_lista.php">Visualizar Atividades</a></li>
		        <li><a href="atividades_cadastro.php">Cadastrar Atividade</a></li>
		        <li><a href="dao/logout.php">Sair</a></li>
			</ul>
		</div>
		<div class="container">
			<div class="row">
				<br><br><br>
				<form method="post" action="?go=cadastrarAtividade" class="form-horizontal">
					<fieldset>
						<div id="legend">
							<legend class="">Cadastro de Atividades</legend>
						</div>

						<div class="control-group">
							<label class="control-label" for="tipo">Tipo</label>
							<div class="controls">
								
								<select id="tipo" name="tipo" required="true" class="input-xlarge form-control">
									<option selected value="Selecione">Selecione</option>
									<option value="Projeto">Projeto</option>
									<option value="Pre-Projeto">Pre-Projeto</option>
									<option value="Lista de Exercicio">Lista de Exercicio</option>
									<option value="Pesquisa">Pesquisa</option>
									<option value="Artigo">Artigo</option>
								</select>

								<p class="help-block">Defina um tipo para Atividade</p>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="descricao">Descrição</label>
							<div class="controls">
								<textarea type="text" id="descricao" name="descricao" maxlength="400" required="true" class="input-xlarge form-control" style="height: 120px; resize: none;"></textarea>
								<p class="help-block">Descrição sobre Atividade</p>
							</div>
						</div>


						<div class="control-group">
							<label class="control-label" for="data">Data</label>
							<div class="controls">
								<input type="text" id="data" name="data" required="true" class="input-xlarge form-control">
								<p class="help-block">Data de Entrega da Atividade</p>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="nota">Nota</label>
							<div class="controls">
								<input type="text" maxlength="3" oninput="this.value=this.value.replace(/[^0-9]/g,',');" id="nota" name="nota" required="true" class="input-xlarge form-control">
								<p class="help-block">Pontuação para Atividade</p>
							</div>
						</div>

						<div class="control-group">
							<!-- Button -->
							<div class="controls">
								<button type="submit" class="btn btn-success">Cadastrar</button>
							</div>
						</div>
					</fieldset>
				</form>

			</div>
		</div>

		

	</body>
</html>