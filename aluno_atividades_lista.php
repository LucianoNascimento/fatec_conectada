<?php require_once "dao/verifica_session_aluno.php"; ?>
<?php require_once "dao/dados_usuario.php"; ?>
<?php require_once "dao/apagar_atividade_sem_professor.php" ?>

<?php 
  $idAtividadeView = @$_GET['listaAlunoAtividade'];
  if ($idAtividadeView != 0) {

    $res = $dbcon->query("SELECT * FROM ATIVIDADE WHERE ATIVI_ID =".$idAtividadeView); 

    while($dados = $res->fetch_array()){
      $tipoAtividadeEdit = $dados['ATIVI_TIPO'];
      $descricaoAtividadeEdit = $dados['ATIVI_DESCRICAO'];
      $dataAtividadeEdit = $dados['ATIVI_DATA_ENTREGA'];
      $notaAtividadeEdit = $dados['ATIVI_NOTA'];
    }

  }else{
    $idAtividadeView = 0;
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
              
        <h2>Lista de Atividades</h2>
        
        <br><br><br>
        <table class="table table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr class="titulo_tabela">
              <th>TIPO</th>
              <th>DATA</th>
              <th>PONTUAÇÃO</th>
              <th>VIZUALIZAR</th>
            </tr>
          </thead>

          <tbody>

            <?php include_once "dao/tabela_atividades_aluno.php"; ?>
            
          </tbody>
        </table>

        <br>

        <?php 
          if ($idAtividadeView != 0) {
            
            echo "Tipo: $tipoAtividadeEdit";
            
            echo "<br><br>";
            echo "Descrição: $descricaoAtividadeEdit";
            
            echo "<br><br>";
            echo "Data de Entrga: $dataAtividadeEdit";
            
            echo "<br><br>";
            echo "Pontuação: $notaAtividadeEdit";

          }else{
            echo "Selecione uma Atividade";
          }
        ?>


      </div>
    </div>

    

  </body>
</html>