<?php
	include_once "../menu_lateral.php";
?>


        <?php
			include "../BO/cadastrocursoBO.php";
			$resultado = buscarUserGETDAO($_GET['id_user']);

				if($resultado->rowCount() > 0 ) {
					while($r = $resultado->fetch(PDO::FETCH_OBJ)) {

        ?>
				<div class="row">
					<div class="col s12 m6 push-m3">
					<h3>Edite o <b>Curso</b></h3>
						<form action="../Forms/formprofessor.php?id_user=<?php echo $_GET['id_user']; ?>" method="POST">
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
						</form>
					<br>
					<br>
					</div>
				</div>
					<?php }} ?>