<?php
	include_once "../menu_lateral_master.php";
?>

				<div class="row ">
					<div class="col s12 m6 push-m3">
					<h3>Cadastro<b> Categoria</b></h3>
						<form action="../Forms/formcategoria.php" id="formCategoria" method="POST">
							<div class="input-field col s12">
								
								<input type="text" name="txtCategoria" id="txtCategoria" data-length="60" placeholder="Insira o nome da Categoria"/>
								<label for="txtCategoria">Nome Categoria</label>
								<button name="acao" value="CadastrarCategoria" class="btn waves-effect waves-light " type="submit"><i class="material-icons right">send</i>CADASTRAR</button>
							</div>
						</form>
					<br>
					<br>
					</div>
				</div>
					
				
				<div class="row">
					<div class="col s12 m6 push-m3">
						<h4> Todas as Categorias</h4>
<table class="table highlight" >
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
					while($r = $resultado->fetch(PDO::FETCH_OBJ)) {
						echo '<tr>';
						echo "<td> $r->id_categoria</td>
							  <td> $r->nomeCategoria</td>
							  <td> <a class=\"waves-effect waves-light btn blue\" href=\"../paginas/editarcategoria.php?id_categoria=$r->id_categoria\"><i class=\"material-icons blue \">mode_edit</i></a> 
							  <form action=\"../Forms/formcategoria.php?id_categoria=$r->id_categoria\" method=\"POST\"> 
							  <button name=\"acao\" value=\"DeletarCategoria\"  class=\"waves-effect waves-light btn deep-orange\"><i class=\"material-icons deep-orange\">delete</i></button></form>
							 </td>";
						echo '</tr>';
					} ;
				} else {
					echo "<h4> Nenhuma categoria cadastrada.</h4>";
				}
		?>
	</tbody>
</table>
</div>
					</div>