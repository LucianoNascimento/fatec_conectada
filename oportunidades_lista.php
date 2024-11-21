<?php require_once "dao/gerenciar_oportunidade.php"; ?>
<?php require_once "dao/verifica_session_coordenador.php"; ?>

<?php 
  $idOportuEdit = @$_GET['alterarOportunidade'];
  if ($idOportuEdit != 0) {

    require_once 'dao/conexao.php';

    $res = $dbcon->query("SELECT * FROM OPORTUNIDADE WHERE OPORTU_ID = $idOportuEdit"); 

    while($dados = $res->fetch_array()){

      $empresaOportuEdit = $dados['OPORTU_EMPRESA'];
      $tituloOportuEdit = $dados['OPORTU_TITULO'];
      $descricaoOportuEdit = $dados['OPORTU_DESCRICAO'];
      $salarioOportuEdit = $dados['OPORTU_SALARIO'];
      $tipoOportuEdit = $dados['OPORTU_TIPO'];

    }

  }else{
    $idOportuEdit = 0;
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
              <th>EMPRESA</th>
              <th>TITULO</th>
              <th>SALARIO</th>
              <th>TIPO</th>
              <th>AÇÕES</th>
            </tr>
          </thead>

          <tbody>

            <?php include_once "dao/tabela_oportunidades.php"; ?>
            
          </tbody>
        </table>

        <br><br><br>

        <?php 
          if ($idOportuEdit != 0) {
            include_once "oportunidade_edit_form.php";
          }
        ?>

      </div>
    </div>

    

  </body>
</html>