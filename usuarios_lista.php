<?php require_once "dao/gerenciar_usuario.php"; ?>
<?php require_once "dao/verifica_session_coordenador.php"; ?>
<?php require_once "dao/dados_usuario.php"; ?>

<?php 
  $idUseEdit = @$_GET['alterarUsuario'];
  if ($idUseEdit != 0) {

    $res = $dbcon->query("SELECT * FROM USUARIO WHERE USU_ID =".$idUseEdit); 

    while($dados = $res->fetch_array()){
      $nomeUseEdit = $dados['USU_NOME'];
      $senhaUseEdit = $dados['USU_SENHA'];
      $emailUseEdit = $dados['USU_EMAIL'];
      $tipoUseEdit = $dados['USU_TIPO'];
    }

  }else{
    $idUseEdit = 0;
  }

?>

<html>
  <head>
    <title>Fatec Conectada</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom_menu.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
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

        <table id="tabelaProdutos" class="table table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr class="titulo_tabela">
              <th>ID</th>
              <th>NOME</th>
              <th>EMAIL</th>
              <th>TIPO</th>
              <th>AÇÕES</th>
            </tr>
          </thead>

          <tbody>

            <?php include_once "dao/tabela_usuarios.php"; ?>
            
          </tbody>
        </table>

        <br><br><br>

        <?php 
          if ($idUseEdit != 0) {
            include_once "usuario_edit_form.php";
          }
        ?>

      </div>
    </div>

    

  </body>
</html>