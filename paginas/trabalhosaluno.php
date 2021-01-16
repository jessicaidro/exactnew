<?php
	include_once "../menu_lateral_aluno.php";

	session_start();
    $sessao = $_SESSION['id_user']; 

    if (!isset($_SESSION['id_user'])) {
        echo "<script> alert('Acesso negado'); </script>";
        echo '<meta http-equiv = refresh content= "0; url = ../paginas/index.php">';
}
?>
<div class="row">
	<div class="col s12 m6 push-m3">
		<h3>Cadastro <b>Trabalho</b></h3>

		<form action="../Forms/formtrabalho.php" id="formTrabalho" method="POST" enctype="multipart/form-data" class="col s12">
			<div class="input-field col s12">
				<input type="text" name="txtTitulo" id="txtTitulo" max-length="50" placeholder="Insira o nome do Trabalho"/>
				<label for="txtTitulo">Título</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="txtDescricao" id="txtDescricao" max-length="60" placeholder="Insira a descrição do Trabalho"/>
				<label for="txtDescricao">Descrição</label>
			</div>
					
			<div class="file-field input-field col s6">
				<div class="btn blue darken-4">
					<span> <i class="material-icons">attach_file</i></span>
					<input type="file" name="txtArquivo" id="txtArquivo">
				</div> 
				<div class="file-path-wrapper">
					<input class="file-path validate">
				</div>
			</div>	

			<div class="input-field col s6">
				<input type="text" name="txtAno" id="txtAno" max-length="4" placeholder="AAAA"/>
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
									while($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
					?>
					<option value="<?php 
						echo $registro->id_categoria ;
					?> " selected>
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
					Seu trabalho é?
				<p>
					<label>
						<input name="txtTipoArquivo" type="radio" value="0" checked />
						<span>TCC</span>
					</label>
				</p>
				<p>
					<label>
						<input name="txtTipoArquivo" type="radio" value="1" />
						<span>Artigo Cientifico</span>
					</label>
				</p>
			</div>	
			<div class="col s12"> 
				<button name="acao" value="CadastrarTrabalhoAluno" class="btn waves-effect waves-light blue darken-4 " type="submit"><i class="material-icons right">send</i>CADASTRAR</button>
			</div>
		</form>
	</div>
</div>

		
				<script>
					$(document).ready(function(){
    					$('select').formSelect();
  					});
				</script>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
     $(document).ready(function(){
    $('.parallax').parallax();
  });

    $("#toast").click(function(){
      M.toast({html: 'I am a toast!'})
    });
  </script>