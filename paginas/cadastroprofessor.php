<?php
	include_once "../z_top.php";
?>
			<div class="container">	

				<div class="row">
					<h3>Cadastro <b>Professor</b></h3>
					<form action="../Forms/formprofessor.php" id="formProfessor" method="POST" class="col s12">
					
					<div class="input-field col s12">
						<input type="text" name="txtNome" id="txtNome" data-length="60" placeholder="Insira seu nome completo"/>
						<label for="txtNome">Nome Completo*</label>
					</div>
					
					<div class="input-field col s12">
						<input type="text" name="txtUsuario" id="txtUsuario" data-length="60" placeholder="Insira seu nome de usuário"/>
						<label for="txtUsuario">Usuário*</label>
					</div>
					
		
					<div class="input-field col s6">
						<input type="password" name="txtSenha" id="txtSenha" data-length="60" placeholder="Digite a senha"/>
						<label for="txtSenha">Senha*</label>
					</div>
					
					<div class="input-field col s6">
						<input type="password" name="txtConfirmar" id="txtConfirmar" data-length="60" placeholder="Confirme a senha"/>
						<label for="txtConfirmar">Confirme a Senha*</label>
					</div>
					
					<div class="input-field col s12">
						<input type="email" name="txtEmail" id="txtEmail" data-length="60" placeholder="Digite seu e-mail"/>
						<label for="txtEmail">E-mail*</label>
					</div>
					<div class="input-field col s12"> 
						<br>
						<br>
						<button name="acao" value="CadastrarUserProfessor" 
							class="btn waves-effect waves-light" type="submit"><i class="material-icons right">send</i>Cadastrar</button>
					</div>
					</form>
				</div>
			</div>
	