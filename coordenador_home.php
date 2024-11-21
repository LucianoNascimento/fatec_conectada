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
				<h2><?php echo "$tipoUser: $nomeUser"; ?>,</h2>

				<p>Seja bem-vindo ao sistema Fatec Conecatada.</p>
			</div>
		</div>

	</body>
</html>