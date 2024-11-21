<?php require_once "dao/gerenciar_usuario.php"; ?>
<?php require_once "dao/verifica_session_coordenador.php"; ?>
<?php require_once "dao/dados_usuario.php"; ?>

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
				<form method="post" action="?go=cadastrarUsuario" class="form-horizontal">
					<fieldset>
						<div id="legend">
							<legend class="">Cadastro de Usuários</legend>
						</div>
						<div class="control-group">
							<!-- Username -->
							<label class="control-label" for="username">Nome</label>
							<div class="controls">
								<input type="text" id="username" name="nome" maxlength="120" required="true" class="input-xlarge form-control">
								<p class="help-block">Nome completo do usuário</p>
							</div>
						</div>

						<div class="control-group">
							<!-- E-mail -->
							<label class="control-label" for="email">E-mail</label>
							<div class="controls">
								<input type="text" id="email" name="email" maxlength="60" required="true" class="input-xlarge form-control">
								<p class="help-block">Digite um E-mail valido</p>
							</div>
						</div>

						<div class="control-group">
							<!-- Password-->
							<label class="control-label" for="password">Senha</label>
							<div class="controls">
								<input type="password" id="password" name="senha" maxlength="12" required="true" class="input-xlarge form-control">
								<p class="help-block">A senha deve conter no maximo 12 caracteres</p>
							</div>
						</div>

						<div class="control-group">
							<!-- Type -->
							<label class="control-label" for="type_user">Tipo</label>
							<div class="controls">
								
								<select id="type_user" name="tipo" required="true" class="input-xlarge form-control">
									<option selected value="Selecione">Selecione</option>
									<option value="Aluno">Aluno</option>
									<option value="Professor">Professor</option>
									<option value="Coordenador">Coordenador</option>
								</select>

								<p class="help-block">Defina um tipo para o Usuário</p>
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