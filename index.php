<?php require_once "dao/gerenciar_usuario.php"; ?>

<html>
	<head>
		<title>Fatec Conectada</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom_login.css" rel="stylesheet">
		
	</head>

	<body>	
		<div class="centro_vertical">
			<div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
				<div class="form-login">
				
					<form method="post" action="?go=loginUsuario">
						<h4>Bem-Vindo</h4>
						<input type="text" name="usuario_login" id="userName" class="form-control input-sm chat-input" placeholder="Email" />
						
						</br>
						
						<input type="password" name="senha_login" id="userPassword" class="form-control input-sm chat-input" placeholder="Senha" />
						
						</br>

						<div class="wrapper">
							<span class="group-btn">     
								<button type="submit" class="btn btn-primary btn-md btn-block"> ENTRAR <i class="fa fa-sign-in"></i> </button>
							</span>
						</div>

					</form>

				</div>
			</div>
		</div>

	</body>
</html>