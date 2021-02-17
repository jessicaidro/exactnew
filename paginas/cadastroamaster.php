<?php
	include_once "../menu_lateral_master.php";
?>

				<div class="row ">
					<div class="col s12 m6 push-m3">
					<h3>Cadastro<b> Aluno</b></h3>
					<form action="../Forms/formaluno.php" id="formAluno" method="POST" class="col s12">
					
					<div class="input-field col s12">
						<input type="text" name="txtNome" id="txtNome" max-length="50" placeholder="Insira seu nome completo" required/>
						<label for="txtNome">Nome Completo*</label>
					</div>
					
					<div class="input-field col s12">
						<input type="text" name="txtUsuario" id="txtUsuario" max-length="50" placeholder="Insira seu nome de usuário" required/>
						<label for="txtUsuario">Usuário*</label>
					</div>
					
		
					<div class="input-field col s6">
						<input type="password" name="txtSenha" id="txtSenha" max-length="50" placeholder="Digite a senha" required/>
						<label for="txtSenha">Senha*</label>
					</div>
					
					<div class="input-field col s6">
						<input type="password" name="txtConfirmar" id="txtConfirmar" max-length="50" placeholder="Confirme a senha" required/>
						<label for="txtConfirmar">Confirme a Senha*</label>
					</div>
					
					<div class="input-field col s12">
						<input type="email" name="txtEmail" id="txtEmail" max-length="60" placeholder="Digite seu e-mail" required/>
						<label for="txtEmail">E-mail*</label>
					</div>

					<div class="input-field col s12"> 
    				<select name="txtCurso" id="id_curso"> 
						<option value="0" disabled selected>Selecione um curso</option>
						<?php 
							include_once '../BO/cadastrocursoBO.php';
							if(1==1){
								$resultado = buscarCursoBO();                          
								if($resultado->rowCount() > 0){
								while($registro = $resultado->fetch(PDO::FETCH_OBJ)) 
									{
									 ?>
									 <option value="<?php 
									 echo $registro->id_curso ;
									 ?>">
									 <?php 
									 echo $registro->nome ; 
									 ?>
									 </option> 
									 <?php
									}
								}
							}
                     		?>
                  	</select>
						<label for="txtCurso"> Selecione o Curso*</label>
					</div>
					<div class="input-field col s12"> 
						<br>
						<br>
						<button name="acao" value="CadastrarUserAluno" 
							class="btn waves-effect waves-light blue darken-4" type="submit"><i class="material-icons right">send</i>Cadastrar</button>
					</div>
					</form>
					<br>
					<br>
					</div>
				</div>
					
				
				<div class="row">
					<div class="col s12 m6 push-m3">
						<h4> Todos os Alunos</h4>
<table class="table highlight" >
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
		</tr>
	</thead>

	<tbody>
		<?php
			include "../BO/cadastrouserBO.php";
			$resultado = buscarUserABO();

				if($resultado->rowCount()>0) {
					while($r = $resultado->fetch(PDO::FETCH_OBJ)) {
						echo '<tr>';
						echo "<td>$r->id_user</td>
							  <td>$r->nome</td>";
						echo '</tr>';
					} ;
				} else {
					echo "<h4> Nenhum registro encontrado.</h4>";
				}
		?>
	</tbody>
</table>
</div>
</div>
<script>
					$(document).ready(function(){
    					$('select').formSelect();
  					});
				</script>