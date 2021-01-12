<?php
	include_once "../menu_lateral_professor.php";

	session_start();
    $sessao = $_SESSION['id_user']; 

    if (!isset($_SESSION['id_user'])) {
        echo "<script> alert('Acesso negado'); </script>";
        echo '<meta http-equiv = refresh content= "0; url = ../index.php">';
}
?>

				<div class="row">
					<div class="col s12 m6 push-m3">
						<h3>Cadastro <b>Trabalho</b></h3>
							<form action="../Forms/formtrabalho.php" id="formTrabalho" method="POST" class="col s12">
								<div class="input-field col s12">
									<input type="text" name="txtTitulo" id="txtTitulo" data-length="60" placeholder="Insira o nome do Trabalho"/>
									<label for="txtTitulo">Título</label>
								</div>

								<div class="input-field col s12">
									<input type="text" name="txtDescricao" id="txtDescricao" data-length="60" placeholder="Insira a descrição do Trabalho"/>
									<label for="txtDescricao">Descrição</label>
								</div>
					
								<div class="file-field input-field col s6">
									<div class="btn">
										<span> <i class="material-icons">attach_file</i></span>
										<input type="file">
									</div> 

									<div class="file-path-wrapper">
										<input class="file-path validate" type="file" name="txtArquivo" id="txtArquivo">
									</div>
								</div>	

								<div class="input-field col s6">
									<input type="text" name="txtAno" id="txtAno" data-length="60" placeholder="__/__/____"/>
									<label for="txtAno">Ano Conclusão</label>
								</div>

								<div class="input-field col s12"> 
									<select name="txtCategoria" id="id_categoria"> 
										<option value="0" disabled selected>Selecione a categoria</option>
										<?php 
											include_once '../BO/cadastrocategoriaBO.php';
											if(1==1){
												$resultado = buscarCategoriaBO();                          
												if($resultado->rowCount() > 0){
												while($registro = $resultado->fetch(PDO::FETCH_OBJ)) 
													{
													?>
													<option value="<?php 
													echo $registro->id_categoria ;
													?>">
													<?php 
													echo $registro->nomeCategoria ;
													?>
													</option> 
													<?php
													}
												}
											}
											?>
									</select>
						<label for="txtCategoria"> Selecione a Categoria*</label>
					</div>
					<div class="input-field col s12"> 
						<br>
						<br>
						<button name="acao" value="CadastrarTrabalho" class="btn waves-effect waves-light " type="submit"><i class="material-icons right">send</i>CADASTRAR</button>
								</div>
							</form>
					</div>
				</div>

		
				<script>
					$(document).ready(function(){
    					$('select').formSelect();
  					});
				</script>
