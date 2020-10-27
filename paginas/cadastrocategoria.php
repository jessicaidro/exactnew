<?php
	include_once "../menu_lateral.php";
?>

				<div class="row">
					<div class="col s12 m6 push-m3">
					<h3>CADASTRO DE CATEGORIA</h3>
						<form action="../Forms/formcategoria.php" id="formCategoria" method="POST">
							<div class="input-field col s12">
								
								<input type="text" name="txtCategoria" id="txtCategoria" maxlength="60" placeholder="Insira o nome da Categoria"/>
								<label for="txtCategoria">Nome Categoria</label>
							</div>

							<div class="input-field col s12">
								<button name="acao" value="cadastrarCategoria" class="btn" type="submit">CADASTRAR</button>
							</div>
						</form>
					

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
							  <a class=\"waves-effect waves-light btn deep-orange href=\"../Paginas/cadastrocategoria.php?txtDeletar=$row->id_categoria\"><i class=\"material-icons deep-orange\">delete</i></a></td>";
						echo '</tr>';
					}
				}
		?>
	</tbody>
</table>
				<?php
					if(isset($_GET['txtEditar'])){
						echo "<div id=\"modal1\" class=\"modal\">
							<div class=\"modal-content\"> <form action=\"../Forms/formcategoria.php?txtEditar=$_GET[txtEditar]\" method=\"POST\">
								<input type=\"text\" name=\"txtCategoria\" id=\"txtCategoria\" maxlength=\"60\" placeholder=\"Insira o nome da Categoria\" value=\"$_GET[txtEditar]\"/>
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
		const instancesModal = M.Modal.init(elemsModal);

	</script>