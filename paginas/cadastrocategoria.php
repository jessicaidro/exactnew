<?php
	include_once "../menu_lateral.php";
?>

				<div class="row">
					<div class="col s12 m6 push-m3">
					<h3>Cadastro de <b>Categoria</b></h3>
						<form action="../Forms/formcategoria.php" id="formCategoria" method="POST">
							<div class="input-field col s12">
								
								<input type="text" name="txtCategoria" id="txtCategoria" data-length="60" placeholder="Insira o nome da Categoria"/>
								<label for="txtCategoria">Nome Categoria</label>
								<button name="acao" value="cadastrarCategoria" class="btn waves-effect waves-light" type="submit"><i class="material-icons right">send</i>CADASTRAR</button>
							</div>
						</form>
					<br>
					<br>
					</div>
				</div>
					
				
				<div class="row">
					<div class="col s12 m6 push-m3">
						<h4> Todas as Categorias</h4>
<table class="responsive-table highlight" >
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome Categoria</th>
			<th>Ações</th>
		</tr>
	</thead>

	<tbody>
		<?php
			include "../BO/cadastrocategoriaBO.php";
			$resultado = buscarCategoriaBO();

				if($resultado) {
					while($row = $resultado->fetch(PDO::FETCH_OBJ)) {
						echo '<tr>';
						echo "<td> $row->id_categoria</td>
							  <td> $row->nomeCategoria</td>
							  <td> <a class=\"waves-effect waves-light btn blue\" href=\"../paginas/cadastrocategoria.php?txtEditar=$row->nomeCategoria\"><i class=\"material-icons blue \">mode_edit</i></a>
							  <a class=\"waves-effect waves-light btn deep-orange href=\"../paginas/cadastrocategoria.php?txtDeletar=$row->id_categoria\"><i class=\"material-icons deep-orange\">delete</i></a></td>";
						echo '</tr>';
					}
				} else {
					echo "<h4> Nenhuma categoria cadastrada.</h4>";
				}
		?>
	</tbody>
</table>
				<?php
					if(isset($_GET['txtEditar'])){
						echo "<div id=\"modal1\" class=\"modal\">
							<div class=\"modal-content\"> <form action=\"../Forms/formcategoria.php?txtEditar=$_GET[txtEditar]\" method=\"POST\">
								<input type=\"text\" name=\"txtCategoria\" id=\"txtCategoria\" maxlength=\"60\" placeholder=\"Insira o nome da Categoria\" value=\"$_GET[nomeCategoria]\"/>
								<label for=\"txtCategoria\">Nome Categoria</label>
								
								<div class=\"modal-footer\">
									<button name=\"txtEditar\" value=\"editarCategoria\" class=\"btn\" type=\"submit\">EDITAR CATEGORIA</button>
								</form>
							</div>
  						</div>";
					} elseif(isset($_GET['txtDeletar'])) {
						echo "<form action=\"../Forms/formcategoria.php?txtDeletar=$_GET[txtDeletar]\" method=\"POST\">
						<input type=\"hidden\" name=\"txtCategoria\" value=\"$_GET[txtDeletar]\"/>
						<label class=\"alert alert-error\">Você deseja excluir esse registro?</label>
						<input type=\"submit\" class=\"btn\" value=\"Sim\"/>
						<a class=\"btn\" href=\"cadastrocliente.php\">Não</a>; 
						</form>";
					}
				?>	
</div>
					</div>

	<script>
		elemsModal = document.querySelectorAll('.modal');
		const instances  = M.Modal.init(elemsModal);

	    elemsCount = $(document).ready(function(){
			$('input#txtCategoria'.characterCounter();
		});
	</script>