<?php
	include_once "../menu_lateral_master.php";
?>


        <?php
			include "../BO/cadastrocategoriaBO.php";
			$resultado = buscarCategoriaGETBO($_GET['id_categoria']);

				if($resultado->rowCount() > 0 ) {
					while($r = $resultado->fetch(PDO::FETCH_OBJ)) {

        ?>
				<div class="row">
					<div class="col s12 m6 push-m3">
					<h3>Edite a <b>Categoria</b></h3>
						<form action="../Forms/formcategoria.php?id_categoria=<?php echo $_GET['id_categoria']; ?>" method="POST">
							<div class="input-field col s12">
								
								<input type="text" name="txtCategoria" id="txtCategoria" max-length="100" placeholder="Insira o nome da Categoria" value="<?php echo $r->nomeCategoria; ?>"/>
								<label for="txtCategoria">Nome Categoria</label>
								<button name="acao" value="EditarCategoria" class="btn waves-effect waves-light blue darken-4" type="submit"><i class="material-icons right">send</i>EDITAR</button>
							</div>
						</form>
					<br>
					<br>
					</div>
				</div>
					<?php }} ?>