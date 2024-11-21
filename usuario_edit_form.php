        <form method="post" action="?go=editarUsuario" class="form-horizontal">
          <fieldset>
            <div id="legend">
              <legend class="">Alterar Usuário</legend>
            </div>


            <input type="hidden" name="idUseEdit" value="<?php echo $idUseEdit; ?>">  


            <div class="control-group">
              <!-- Username -->
              <label class="control-label"  for="username">Nome</label>
              <div class="controls">
                <input type="text" id="username" name="nome" placeholder="" class="input-xlarge form-control" required="true" value="<?php if ($idUseEdit != 0){ echo $nomeUseEdit; } ?>">
                <p class="help-block">Nome completo do usuário</p>
              </div>
            </div>

            <div class="control-group">
              <!-- E-mail -->
              <label class="control-label" for="email">E-mail</label>
              <div class="controls">
                <input type="text" id="email" name="email" placeholder="" class="input-xlarge form-control" required="true" value="<?php if ($idUseEdit != 0){ echo $emailUseEdit; } ?>">
                <p class="help-block">Digite um E-mail valido</p>
              </div>
            </div>

            <div class="control-group">
              <!-- Password-->
              <label class="control-label" for="password">Senha</label>
              <div class="controls">
                <input type="password" id="password" name="senha" placeholder="" class="input-xlarge form-control" required="true">
                <p class="help-block">A senha deve conter no maximo 12 caracteres</p>
              </div>
            </div>

            <div class="control-group">
              <!-- Type -->
              <label class="control-label"  for="type_user">Tipo</label>
              <div class="controls">
                
                <select id="type_user" name="tipo" required="true" class="input-xlarge form-control">
                  <option selected value="Selecione">Selecione</option>
                  <?php 

                  if ($idUseEdit != 0) {
                    ?>    
                    <!-- OPTION PARA ALUNO -->
                    <?php echo "<option value='Aluno'"; ?> 
                      <?=($tipoUseEdit == 'Aluno')?'selected':'' ?> 
                      <?php echo " > Aluno</option>"; ?>

                      <!-- OPTION PARA PROFESSOR -->
                      <?php echo "<option value='Professor'"; ?> 
                        <?=($tipoUseEdit == 'Professor')?'selected':'' ?> 
                        <?php echo " > Professor</option>"; ?>

                        <!-- OPTION PARA COORDENADOR -->
                        <?php echo "<option value='Coordenador'"; ?> 
                          <?=($tipoUseEdit == 'Coordenador')?'selected':'' ?> 
                          <?php echo " > Coordenador</option>"; ?>
                          

                          <?php 

                        }else{
                          echo "
                          <option value='Aluno'> Aluno</option>
                          
                          <option value='Professor'> Professor</option>
                          
                          <option value='Coordenador'> Coordenador</option>

                          ";
                        }

                        ?>

                      </select>

                      <p class="help-block">Defina um tipo para o Usuário</p>
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