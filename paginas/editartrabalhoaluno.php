<?php
    include_once "../menu_lateral_aluno.php";
    include_once "../BO/trabalhoBO.php";

	session_start();
    $sessao = $_SESSION['id_user']; 

    if (!isset($_SESSION['id_user'])) {
        echo "<script> alert('Acesso negado'); </script>";
        echo '<meta http-equiv = refresh content= "0; url = ../paginas/index.php">';
}   
    $trabalho = buscarTrabalhoBO($_GET['id_trabalho']);
        if ($trabalho->rowCount() > 0) {
            while($r = $trabalho->fetch(PDO::FETCH_OBJ)){
    
?>
<div class="row">
	<div class="col s12 m6 push-m3">
		<h3>Cadastro <b>Trabalho</b></h3>

		<form action="../Forms/formtrabalho.php" id="formTrabalho" method="POST" enctype="multipart/form-data" class="col s12">
			<div class="input-field col s12">
				<input type="text" name="txtTitulo" id="txtTitulo" data-length="60" placeholder="Insira o nome do Trabalho" value="<?php echo $r->titulo; ?>"/>
				<label for="txtTitulo">Título</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="txtDescricao" id="txtDescricao" data-length="60" placeholder="Insira a descrição do Trabalho" value="<?php echo $r->descricao; ?>"/>
				<label for="txtDescricao">Descrição</label>
			</div>
					
			<div class="file-field input-field col s6">
				<div class="btn">
					<span> <i class="material-icons">attach_file</i></span>
					<input type="file" name="txtArquivo" id="txtArquivo" value="<?php echo $r->diretorioArquivo; ?>">
				</div> 
				<div class="file-path-wrapper">
					<input class="file-path validate" value="<?php echo $r->diretorioArquivo;'.pdf'?>">
				</div>
			</div>	

			<div class="input-field col s6">
				<input type="text" name="txtAno" id="txtAno" data-length="60" placeholder="__/__/____" value="<?php echo $r->ano; ?>"/>
				<label for="txtAno">Ano Conclusão</label>
			</div>

			<div class="input-field col s12"> 
				<select name="txtCategoria" id="id_categoria"> 
					<option value="<?php echo $r->id_categoria; ?>" disabled selected>Selecione a categoria</option>
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
				<button name="acao" value="EditarTrabalhoAluno" class="btn waves-effect waves-light " type="submit"><i class="material-icons right">send</i>EDITAR</button>
			</div>
		</form>
	</div>
</div>

		
				<script>
					$(document).ready(function(){
    					$('select').formSelect();
  					});
				</script>

<?php }} ?>