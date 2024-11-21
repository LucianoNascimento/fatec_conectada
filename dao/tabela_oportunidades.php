<?php
	require_once 'conexao.php';

	$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 
						 
	//seleciona todos os itens da tabela 
	$primeira_query = $dbcon->query("SELECT * FROM OPORTUNIDADE"); 

	//conta o total de itens 
	$total = mysqli_num_rows($primeira_query); 

	//seta a quantidade de itens por página, neste caso, 5 itens 
	$registros = 5; 

	//calcula o número de páginas arredondando o resultado para cima 
	$numPaginas = ceil($total/$registros); 

	//variavel para calcular o início da visualização com base na página atual 
	$inicio = ($registros*$pagina)-$registros; 

	//seleciona os itens por página 
	$query_paginacao = $dbcon->query("SELECT * FROM OPORTUNIDADE limit $inicio,$registros"); 
						            
	$total = mysqli_num_rows($query_paginacao); 

	//exibe os produtos selecionados 
	while ($dados = $query_paginacao->fetch_array()) {

		$tabIdOportu = $dados['OPORTU_ID'];
		$tabEmpresaOportu = $dados['OPORTU_EMPRESA'];
		$tabTituloOportu = $dados['OPORTU_TITULO'];
		$tabSalarioOportu = $dados['OPORTU_SALARIO'];
		$tabTipoOportu = $dados['OPORTU_TIPO'];


		echo "

		<tr>
			<td>$tabIdOportu</td>
			<td>$tabEmpresaOportu</td>
			<td>$tabTituloOportu</td>
			<td>$tabSalarioOportu</td>
			<td>$tabTipoOportu</td>

			<td class='acoes-tabela'>
				<a class='fa fa-pencil-square-o btn btn-primary' href='dao/gerenciar_oportunidade.php?alterarOportunidade&idOportunidade=$tabIdOportu' title='EDITAR OPORTUNIDADE'></a>

				<a class='fa fa-trash btn btn-danger' href='dao/gerenciar_oportunidade.php?excluirOportunidade&idOportunidade=$tabIdOportu' title='EXCLUIR OPORTUNIDADE'></a>                     
			</td>

		</tr>";


	} 


	echo "
	<tfoot>
		<tr>
			<td colspan='6'>
				<a class='btn btn-success' href='oportunidades_lista.php?pagina=1'>Primeira</a> | ";

				if($pagina > 1) {
					echo "<a class='fa fa-angle-double-left btn btn-outline-danger' href='oportunidades_lista.php?pagina=".($pagina - 1)."'> Anterior</a> | ";
				}

				if($pagina < $numPaginas) {
					echo "<a class='fa fa-angle-double-right btn btn-outline-primary' href='oportunidades_lista.php?pagina=".($pagina + 1)."'> Próximo</a> | ";
				}

				echo "<a class='btn btn-danger' href='oportunidades_lista.php?pagina=$numPaginas'>Última</a>

			</td>
		</tr>	
	</tfoot>

	<p>Página $pagina de $numPaginas</p>";
	
?>