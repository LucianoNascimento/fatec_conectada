<form method="post" action="?go=editarAtividade" class="form-horizontal">
	<fieldset>
		<div id="legend">
			<legend class="">Alterar Atividade</legend>
		</div>


        <input type="hidden" name="idAtividadeEdit" value="<?php echo $idAtividadeEdit; ?>">  


		<div class="control-group">
			<label class="control-label" for="tipo">Tipo</label>
			<div class="controls">

				<select id="tipo" name="tipo" required="true" class="input-xlarge form-control">
					<option selected value="Selecione">Selecione</option>
					
					<!-- OPTION PARA Projeto -->
					<?php echo "<option value='Projeto'"; ?> 
						<?=($tipoAtividadeEdit == 'Projeto')?'selected':'' ?> 
					<?php echo " >Projeto</option>"; ?>					
					

					<!-- OPTION PARA Pre-Projeto -->
					<?php echo "<option value='Pre-Projeto'"; ?> 
						<?=($tipoAtividadeEdit == 'Pre-Projeto')?'selected':'' ?> 
					<?php echo " >Pre-Projeto</option>"; ?>		


					<!-- OPTION PARA Lista de Exercicio -->
					<?php echo "<option value='Lista de Exercicio'"; ?> 
						<?=($tipoAtividadeEdit == 'Lista de Exercicio')?'selected':'' ?> 
					<?php echo " >Lista de Exercicio</option>"; ?>	


					<!-- OPTION PARA Pesquisa -->
					<?php echo "<option value='Pesquisa'"; ?> 
						<?=($tipoAtividadeEdit == 'Pesquisa')?'selected':'' ?> 
					<?php echo " >Pesquisa</option>"; ?>	


					<!-- OPTION PARA Artigo -->
					<?php echo "<option value='Artigo'"; ?> 
						<?=($tipoAtividadeEdit == 'Artigo')?'selected':'' ?> 
					<?php echo " >Artigo</option>"; ?>				
					
				</select>

				<p class="help-block">Defina um tipo para Atividade</p>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="descricao">Descrição</label>
			<div class="controls">
				<textarea type="text" id="descricao" name="descricao" maxlength="400" required="true" class="input-xlarge form-control" style="height: 120px; resize: none;"><?php echo $descricaoAtividadeEdit; ?></textarea>
				<p class="help-block">Descrição sobre Atividade</p>
			</div>
		</div>


		<div class="control-group">
			<label class="control-label" for="data">Data</label>
			<div class="controls">
				<input type="text" id="data" name="data" required="true" value="<?php echo $dataAtividadeEdit; ?>" class="input-xlarge form-control">
				<p class="help-block">Data de Entrega da Atividade</p>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="nota">Nota</label>
			<div class="controls">
				<input type="text" maxlength="3" oninput="this.value=this.value.replace(/[^0-9]/g,',');" id="nota" name="nota" required="true" value="<?php echo $notaAtividadeEdit; ?>" class="input-xlarge form-control">
				<p class="help-block">Pontuação para Atividade</p>
			</div>
		</div>

		<div class="control-group">
			<!-- Button -->
			<div class="controls">
				<button type="submit" class="btn btn-success">Editar</button>
			</div>
		</div>
	</fieldset>
</form>
