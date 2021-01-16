<?php
	include_once "../z_top.php";
?>
			<div class="container">	

				<div class="row">
					<h3>Cadastro <b>Professor</b></h3>
					<form action="../Forms/formprofessor.php" id="formProfessor" method="POST" class="col s12">
					
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
						<br>
						<br>
						<button name="acao" value="CadastrarUserProfessor" 
							class="btn waves-effect waves-light blue darken-4" type="submit"><i class="material-icons right">send</i>Cadastrar</button>
					</div>
					</form>
				</div>
			</div>
	