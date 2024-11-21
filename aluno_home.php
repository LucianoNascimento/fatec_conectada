<?php require_once "dao/gerenciar_usuario.php"; ?>
<?php require_once "dao/verifica_session_aluno.php"; ?>
<?php require_once "dao/dados_usuario.php"; ?>

<html>
	<head>
		<title>Fatec Conectada</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom_menu.css" rel="stylesheet">
	</head>

	<body>

		<div class="navbar navbar-inverse navbar-fixed-left">
			<a class="navbar-brand" href="aluno_home.php">Menu</a>
			<br><br><br>
			<ul class="nav navbar-nav" style="margin-left: 0px;">
		        <li><a href="aluno_atividades_lista.php">Visualizar Atividades</a></li>
		        <li><a href="aluno_oportunidades_lista.php">Visualizar Oportunidades</a></li>
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