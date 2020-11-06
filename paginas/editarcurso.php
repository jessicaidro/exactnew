<?php
	include_once "../menu_lateral.php";
?>


        <?php
			include "../BO/cadastrocursoBO.php";
			$resultado = buscarCursoGETBO($_GET['id_curso']);

				if($resultado->rowCount() > 0 ) {
					while($r = $resultado->fetch(PDO::FETCH_OBJ)) {

        ?>
				<div class="row">
					<div class="col s12 m6 push-m3">
					<h3>Edite o <b>Curso</b></h3>
						<form action="../Forms/formcurso.php?id_curso=<?php echo $_GET['id_curso']; ?>" method="POST">
							<div class="input-field col s12">
								
								<input type="text" name="txtCurso" id="txtCurso" data-length="60" placeholder="Insira o nome do Curso" value="<?php echo $r->nome; ?>"/>
								<label for="txtCurso">Nome Curso</label>
								<button name="acao" value="EditarCurso" class="btn waves-effect waves-light" type="submit"><i class="material-icons right">send</i>EDITAR</button>
							</div>
						</form>
					<br>
					<br>
					</div>
				</div>
					<?php }} ?>