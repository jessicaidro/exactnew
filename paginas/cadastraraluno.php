<?php
	include_once "../index.php";
?>

				<div class="row">
					<div class="col s12 m6 push-m3">
					<h3>Cadastro <b>Aluno</b></h3>
						<form action="../Forms/formaluno.php" id="formAluno" method="POST">
							<div class="input-field col s12">
								
								<input type="text" name="txtNome" id="txtNome" data-length="60" placeholder="Insira seu nome completo"/>
								<label for="txtNome">Nome Completo*</label>

								<input type="text" name="txtUsuario" id="txtUsuario" data-length="60" placeholder="Insira seu nome de usuário"/>
								<label for="txtUsuario">Usuário*</label>

								<input type="text" name="txtSenha" id="txtSenha" data-length="60" placeholder="Digite a senha"/>
								<label for="txtSenha">Senha*</label>

								<input type="text" name="txtConfirmar" id="txtConfirmar" data-length="60" placeholder="Confirme a senha"/>
								<label for="txtConfirmar">Confirme a Senha*</label>

								<input type="text" name="txtEmail" id="txtEmail" data-length="60" placeholder="Digite seu e-mail"/>
								<label for="txtEmail">E-mail*</label>

								<!-- <div class="input-field col s12"> -->
    								<!-- <select>
										<//?php
											include "../BO/cadastrocursoBO.php";
											$resultaado = buscarCursoBO();
												if($resultado) {
													while($r = $resultado->fetch(PDO::FETCH_OBJ)) {
														echo "<option value='$r=$id_curso'> $r->$nome </option>"; 
													}
												}
										?>
									</select>	 -->
									<!-- <label>Selecione o Curso</label> -->


								<button name="acao" value="CadastrarUserAluno" class="btn waves-effect waves-light " type="submit"><i class="material-icons right">send</i>CADASTRAR</button>
							</div>
						</form>
					<br>
					<br>
					</div>
				</div>