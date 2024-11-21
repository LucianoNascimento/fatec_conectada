<?php require_once "dao/gerenciar_oportunidade.php"; ?>
<?php require_once "dao/verifica_session_aluno.php"; ?>

<?php 
  $idOportuView = @$_GET['listaAlunoOportunidade'];
  if ($idOportuView != 0) {

    require_once 'dao/conexao.php';

    $res = $dbcon->query("SELECT * FROM OPORTUNIDADE WHERE OPORTU_ID = $idOportuView"); 

    while($dados = $res->fetch_array()){

      $empresaOportuView = $dados['OPORTU_EMPRESA'];
      $tituloOportuView = $dados['OPORTU_TITULO'];
      $descricaoOportuView = $dados['OPORTU_DESCRICAO'];
      $salarioOportuView = $dados['OPORTU_SALARIO'];
      $tipoOportuView = $dados['OPORTU_TIPO'];

    }

  }else{
    $idOportuView = 0;
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

        <h2>Lista de Oportunidades</h2>

        <br><br><br>

        <table class="table table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr class="titulo_tabela">
              <th>EMPRESA</th>
              <th>TITULO</th>
              <th>SALARIO</th>
              <th>TIPO</th>
              <th>VIZUALIZAR</th>
            </tr>
          </thead>

          <tbody>

            <?php include_once "dao/tabela_oportunidades_aluno.php"; ?>
            
          </tbody>
        </table>

        <br>

        <?php 
          if ($idOportuView != 0) {
      
            echo "Empresa:  $empresaOportuView";

            echo "<br><br>";
            echo "Titulo:  $tituloOportuView";
            
            echo "<br><br>";
            echo "Descrição:  $descricaoOportuView";

            echo "<br><br>";
            echo "Salario:  $salarioOportuView";

            echo "<br><br>";
            echo "Tipo:  $tipoOportuView";

          }else{
            echo "Selecione uma Oportunidade";
          }
        ?>

      </div>
    </div>

    

  </body>
</html>