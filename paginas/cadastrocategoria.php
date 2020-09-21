<?php
	include_once "../util/z_top.php";
	include_once "../BO/cadastroalunoBO.php";


?>
	<div class="contentInfos">
		<div class="container">
			<br>
			<br>
				<div class="row">
					<div class="col-sm">
						<form method="POST" action="../Forms/formcategoria.php">
							<h3>Categoria</h3>
							<hr />
							<b>Nome da Categoria*:</b>
							<input type="text" name="txtCategoria" id="txtCategoria" class="form-control" placeholder="Insira o nome da Categoria" required autofocus/><br>
							<center><input type="submit" class="btn btn-outline-warning" value="Cadastrar" name="acao"></center>
						</form>
					</div>
				</div>
		</div>
	</div>
<?php
	include_once "../util/z_footer.php";
?>