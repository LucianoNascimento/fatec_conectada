<?php require_once "dao/gerenciar_oportunidade.php"; ?>
<?php require_once "dao/verifica_session_coordenador.php"; ?>

<html>
	<head>
		<title>Fatec Conectada</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom_menu.css" rel="stylesheet">
	</head>

	<body>

		<div class="navbar navbar-inverse navbar-fixed-left">
			<a class="navbar-brand" href="coordenador_home.php">Menu</a>
			<ul class="nav navbar-nav">
		        <li><a href="usuarios_lista.php">Visualizar Usuários</a></li>
		        <li><a href="usuarios_cadastro.php">Cadastrar Usuário</a></li>
		        <li><a href="oportunidades_lista.php">Visualizar Oportunidades</a></li>
		        <li><a href="oportunidades_cadastro.php">Cadastrar Oportunidade</a></li>
		        <li><a href="dao/logout.php">Sair</a></li>
			</ul>
		</div>
		<div class="container">
			<div class="row">
				<br><br><br>
				<form method="post" action="?go=cadastrarOportunidade" class="form-horizontal">
					<fieldset>
						<div id="legend">
							<legend class="">Cadastro de Oportunidades</legend>
						</div>
						<div class="control-group">
							<label class="control-label" for="empresa">Empresa</label>
							<div class="controls">
								<input type="text" id="empresa" name="empresa" maxlength="30" required="true" class="input-xlarge form-control">
								<p class="help-block">Nome da Empresa</p>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="vaga">Vaga</label>
							<div class="controls">
								<input type="text" id="vaga" name="vaga" maxlength="60" required="true" class="input-xlarge form-control">
								<p class="help-block">Titulo da Vaga</p>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="descricao">Descrição</label>
							<div class="controls">
								<textarea type="text" id="descricao" name="descricao" maxlength="400" required="true" class="input-xlarge form-control" style="height: 120px; resize: none;"></textarea>
								<p class="help-block">Descrição sobre a Vaga</p>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="salario">Salario</label>
							<div class="controls">
								<input type="text" maxlength="8" oninput="this.value=this.value.replace(/[^0-9]/g,',');" id="salario" name="salario" required="true" class="input-xlarge form-control">
								<p class="help-block">Valor do Salario</p>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="tipo">Tipo</label>
							<div class="controls">
								
								<select id="tipo" name="tipo" required="true" class="input-xlarge form-control">
									<option selected value="Selecione">Selecione</option>
									<option value="Emprego">Emprego</option>
									<option value="Estágio">Estágio</option>
								</select>

								<p class="help-block">Defina um tipo para a Oportunidade</p>
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