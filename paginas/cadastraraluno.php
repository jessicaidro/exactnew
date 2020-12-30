<?php
	include_once "../z_top.php";
?>

			<div class="container">	

				<div class="row">
					<h3>Cadastro <b>Aluno</b></h3>
					<form action="../Forms/formaluno.php" id="formAluno" method="POST" class="col s12">
					
					<div class="input-field col s12">
						<input type="text" name="txtNome" id="txtNome" data-length="60" placeholder="Insira seu nome completo"/>
						<label for="txtNome">Nome Completo*</label>
					</div>
					
					<div class="input-field col s12">
						<input type="text" name="txtUsuario" id="txtUsuario" data-length="60" placeholder="Insira seu nome de usuário"/>
						<label for="txtUsuario">Usuário*</label>
					</div>
					
		
					<div class="input-field col s6">
						<input type="text" name="txtSenha" id="txtSenha" data-length="60" placeholder="Digite a senha"/>
						<label for="txtSenha">Senha*</label>
					</div>
					
					<div class="input-field col s6">
						<input type="text" name="txtConfirmar" id="txtConfirmar" data-length="60" placeholder="Confirme a senha"/>
						<label for="txtConfirmar">Confirme a Senha*</label>
					</div>
					
					<div class="input-field col s12">
						<input type="text" name="txtEmail" id="txtEmail" data-length="60" placeholder="Digite seu e-mail"/>
						<label for="txtEmail">E-mail*</label>
					</div>

					<div class="input-field col s12"> 
    				<select name="curso" id="id_curso"> 
						<?php
							include '../util/conexao.php';
							$sql=mysqli_query($conexao,"SELECT id_curso, nome FROM Curso");
							while($row=mysqli_fetch_array($sql))
							{
								$id_curso=$row['id_curso']; 
								$nomeCurso=$row['nome'];
								
								echo '<option value="'.$id_curso.'">'.$nomeCurso.'</option>';
							}
						?>
                  	</select>
						<label for="txtCurso"> Selecione o Curso*</label>
					</div>
					<div class="input-field col s12"> 
						<br>
						<br>
						<button name="acao" value="CadastrarUserAluno" 
							class="btn waves-effect waves-light" type="submit"><i class="material-icons right">send</i>Cadastrar</button>
					</div>
					</form>
				</div>
			</div>

				<script>
					$(document).ready(function(){
    					$('select').formSelect();
  					});
				</script>