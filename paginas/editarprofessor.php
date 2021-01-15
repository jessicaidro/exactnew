<?php
	include "../BO/cadastrouserBO.php";
	include_once "../menu_lateral_professor.php";

	
	$id_user_busca = $_GET['id_user'];
	$resultado1 = buscarUserGETBO($id_user_busca);
	
	if($resultado1->rowCount() > 0 ) {
		while($r = $resultado1->fetch(PDO::FETCH_OBJ)) {
?>
				<div class="row">
					<div class="col s12 m6 push-m3">
					<h3>Editar <b>Dados Professor</b></h3>
						<form action="../Forms/formprofessor.php?id_user=<?php echo $_GET['id_user']; ?>" method="POST">
                        <div class="input-field col s12">
						<input type="text" name="txtNome" id="txtNome" data-length="60" placeholder="Insira seu nome completo" value="<?php echo $r->nome; ?>"/>
						<label for="txtNome">Nome Completo*</label>
					</div>
					
					<div class="input-field col s12">
						<input type="text" name="txtUsuario" id="txtUsuario" data-length="60" placeholder="Insira seu nome de usuário" value="<?php echo $r->usuario; ?>"/>
						<label for="txtUsuario">Usuário*</label>
					</div>
					
		
					<div class="input-field col s6">
						<input type="password" name="txtSenha" id="txtSenha" data-length="60" placeholder="Digite a senha" value="<?php echo $r->senha; ?>"/>
						<label for="txtSenha">Senha*</label>
					</div>
					
					<div class="input-field col s6">
						<input type="password" name="txtConfirmar" id="txtConfirmar" data-length="60" placeholder="Confirme a senha"/>
						<label for="txtConfirmar">Confirme a Senha*</label>
					</div>
					
					<div class="input-field col s12">
						<input type="email" name="txtEmail" id="txtEmail" data-length="60" placeholder="Digite seu e-mail" value="<?php echo $r->email; ?>"/>
						<label for="txtEmail">E-mail*</label>
					</div>
				

                    <button name="acao" value="EditarProfessor" class="btn waves-effect waves-light" type="submit"><i class="material-icons right">send</i>EDITAR</button>
					</div>
						</form>
				</div>
				
<?php }} ?>