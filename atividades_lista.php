<?php require_once "dao/verifica_session_professor.php"; ?>
<?php require_once "dao/dados_usuario.php"; ?>
<?php require_once "dao/gerenciar_atividades.php"; ?>
<?php require_once "dao/apagar_atividade_sem_professor.php" ?>

<?php 
  $idAtividadeEdit = @$_GET['alterarAtividade'];
  if ($idAtividadeEdit != 0) {

    $res = $dbcon->query("SELECT * FROM ATIVIDADE WHERE ATIVI_ID =".$idAtividadeEdit); 

    while($dados = $res->fetch_array()){
      $tipoAtividadeEdit = $dados['ATIVI_TIPO'];
      $descricaoAtividadeEdit = $dados['ATIVI_DESCRICAO'];
      $dataAtividadeEdit = $dados['ATIVI_DATA_ENTREGA'];
      $notaAtividadeEdit = $dados['ATIVI_NOTA'];
    }

  }else{
    $idAtividadeEdit = 0;
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

        <table class="table table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr class="titulo_tabela">
              <th>ID</th>
              <th>TIPO</th>
              <th>DATA</th>
              <th>PONTUAÇÃO</th>
              <th>AÇÕES</th>
            </tr>
          </thead>

          <tbody>

            <?php include_once "dao/tabela_atividades.php"; ?>
            
          </tbody>
        </table>

        <br><br><br>

        <?php 
          
          if ($idAtividadeEdit != 0){
            include_once "atividade_edit_form.php";
          }

        ?>

      </div>
    </div>

    

  </body>
</html>