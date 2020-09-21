<?php
	include_once "../z_top.php";
	include_once "../BO/cadastroalunoBO.php";

	$action = "cadastrarAluno";
	$nome = "";
	$usuario = "";
	$senha = "";
	$email = "";
	$curso = "";
	$ano = "";
	$id_aluno ="";
	$id_usuario="";
	$id_curso="";

?>

	<div class="container">
		
		<div class="row">
			<div class="col s6 m6">
			<form method="POST" action="../Forms/formaluno.php" class="cadastro">
				<input type="hidden" name="acao" value="<?= $action ?>">
				<input type="hidden" value="<?=$id_aluno?>" name="id_aluno"/>
				<input type="hidden" value="<?=$id_usuario?>" name="id_usuario"/>
				<input type="hidden" value="<?=$id_curso?>" name="id_curso"/>
				<input type="hidden" name="acao" value="cadastrarAluno">
				
				<h4>Aluno | <small> Realize seu cadastro!</small></h4>
				<hr />
				
				<label for="first_name">Nome</label>
				<input type="text" name="txtNome" id="txtNome" class="form-control" placeholder="Insira seu Nome aqui " value="<?=$nome?>"required autofocus/>
				
				<div class="form-row">
					<div class="col s6 m6">
					<label for="first_name">Usuário</label>
					<input type="text" name="txtUsuario" id="txtUsuario" class="form-control" placeholder="Insira seu Usuário aqui" value="<?=$usuario?>" required autofocus/>
					</div>

					<div class="col s6 m6">	
						<label for="first_name">Senha</label>
						<input type="password" name="txtSenha" id="txtSenha" class="form-control" placeholder="Insira sua senha" value="<?=$senha?>"required autofocus/>
					</div>

					<label for="first_name">E-mail</label>
					<input type="text" name="txtEmail" id="txtEmail" class="form-control" placeholder="Insira seu E-mail aqui" value="<?=$email?>" required autofocus/>

				</div>
					<div class="form-row">
					<label>Selecione seu curso:</label>
					<select class="browser-default"  name="txtCurso" value="<?=$curso?>">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
					<label for="first_name">Ano</label>
					<input type="text" name="txtAno" id="txtAno" class="form-control" placeholder="Insira o Ano" value="<?=$ano?>" required autofocus/>			
				</div>
				<input type="hidden" name="tipo" value="aluno" />
				<input type="submit" class="btn btn-outline-warning" value="Cadastrar" id="btn-cadastroAluno" name="cadastrar">
			</form>
			</div>

		<div class="col s6 m6">
			<h4> Já é cadastrado? <small> Realize seu login aqui!</small></h4>
			<hr>
			<div class="input-group">
      <div class="input-group-prepend">
         		 
        		</div>
        		
        		<div class="invalid-feedback">
          			Please choose a username.
        		</div>
        	</div>
			<input type="text" name="txtLogin" id="txtLogin" class="form-control" placeholder="Insira seu Usuario" required autofocus>
			
			<input type="password" name="txtSenha" id="txtSenha" class="form-control" placeholder="Insira sua Senha" required autofocus>
		
			<input type="submit" class="btn btn-outline-warning" value="Login" id="Login" name="LOGIN">
		</div>
	</div>
</div>
<?php
	include_once "../z_footer.php";
?>