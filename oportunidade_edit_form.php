<form method="post" action="?go=editarOportunidade" class="form-horizontal">
	<fieldset>
		<div id="legend">
			<legend class="">Alterar Oportunidade</legend>
		</div>


        <input type="hidden" name="idOportuEdit" value="<?php echo $idOportuEdit; ?>">  


		<div class="control-group">
			<label class="control-label" for="empresa">Empresa</label>
			<div class="controls">
				<input type="text" id="empresa" name="empresa" maxlength="30" required="true" value="<?php echo $empresaOportuEdit; ?>" class="input-xlarge form-control">
				<p class="help-block">Nome da Empresa</p>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="vaga">Vaga</label>
			<div class="controls">
				<input type="text" id="vaga" name="vaga" maxlength="60" required="true" value="<?php echo $tituloOportuEdit; ?>" class="input-xlarge form-control">
				<p class="help-block">Titulo da Vaga</p>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="descricao">Descrição</label>
			<div class="controls">
				<textarea type="text" id="descricao" name="descricao" maxlength="400" required="true" class="input-xlarge form-control" style="height: 120px; resize: none;"><?php echo $descricaoOportuEdit; ?></textarea>
				<p class="help-block">Descrição sobre a Vaga</p>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="salario">Salario</label>
			<div class="controls">
				<input type="text" maxlength="8" oninput="this.value=this.value.replace(/[^0-9]/g,',');" id="salario" name="salario" required="true" value="<?php echo $salarioOportuEdit; ?>" class="input-xlarge form-control">
				<p class="help-block">Valor do Salario</p>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="tipo">Tipo</label>
			<div class="controls">

				<select id="tipo" name="tipo" required="true" class="input-xlarge form-control">
					<option selected value="Selecione">Selecione</option>

					<!-- OPTION PARA Estágio -->
					<?php echo "<option value='Estágio'"; ?> 
						<?=($tipoOportuEdit == 'Estágio')?'selected':'' ?> 
					<?php echo " >Estágio</option>"; ?>					
					
					<!-- OPTION PARA Emprego -->
					<?php echo "<option value='Emprego'"; ?> 
						<?=($tipoOportuEdit == 'Emprego')?'selected':'' ?> 
					<?php echo " >Emprego</option>"; ?>
                     

				</select>

				<p class="help-block">Defina um tipo para a Oportunidade</p>
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
