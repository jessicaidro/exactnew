<?php
	include_once "../util/z_top.php";
	include_once "../BO/cadastroalunoBO.php";

	$action = "cadastrar";
	$nome = "";
	$usuario = "";
	$senha = "";
	$email = "";
	$curso = "";
	$id_professor ="";
	$id_usuario="";
	$id_curso="";

?>
<div class="contentInfos">
	<div class="container">
		<br>
		<br>
		<div class="row">
    		<div class="col-sm">
			<form method="POST" action="../Forms/formprofessor.php" class="cadastro">
			<input type="hidden" name="acao" value="<?= $action ?>">
			<input type="hidden" value="<?=$id_professor?>" name="id_professor"/>
			<input type="hidden" value="<?=$id_usuario?>" name="id_usuario"/>
			<input type="hidden" value="<?=$id_curso?>" name="id_curso"/>
			<input type="hidden" name="acao" value="cadastrarAluno">
					<h3>Cadastro Professor
					</h3><hr />
					<b>Nome*:</b>
	        			<input type="text" name="txtNome" id="txtNome" class="form-control" placeholder="Insira seu Nome" value="<?=$nome?>"required autofocus/><br>
	        		<div class="form-row">
    					<div class="col">
	        			<b>Usuário*:</b>
	        				<input type="text" name="txtUsuario" id="txtUsuario" class="form-control" placeholder="Insira seu Usuario" value="<?=$usuario?>" required autofocus/><br>
	        			</div>
	        		<div class="col">	
	        			<b>Senha*:</b>
	        				<input type="password" name="txtSenha" id="txtSenha" class="form-control" placeholder="Insira sua senha" value="<?=$senha?>"required autofocus/><br>
	        		</div>
	        		</div>
	        		<b>E-mail*:</b>
	        			<input type="text" name="txtEmail" id="txtEmail" class="form-control" placeholder="Insira seu Nome" value="<?=$email?>" required autofocus/>
	        			<br>
	        		<div class="form-row">
    					<div class="col">
			        		<b>Selecione seu curso*:</b>
			        		<div class="form-group">
							    <select class="form-control" name="txtCurso" value="<?=$curso?>">
								      <option value="1">1</option>
								      <option value="2">2</option>
								      <option value="3">3</option>
								      <option value="4">4</option>
								      <option value="5">5</option>
								</select>
							</div>
						</div>
						
				</div>

					<input type="hidden" name="tipo" value="aluno" />
	
			<!--<button class="btn btn-primary" id="btn-cadastro-aluno" type="button">
				<span class="glyphicon glyphicon-floppy-disk"></span> Salvar
			</button> -->
	        		<center><input type="submit" class="btn btn-outline-warning" value="Cadastrar"name="cadastrar"></center>
			</form>
		</div>

		
	</div>
</div>
<?php
	include_once "../util/z_footer.php";
?>