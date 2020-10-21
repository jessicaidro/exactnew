<?php
	include_once "../menu_lateral.php";
?>

				<div class="row">
					<div class="col s12 m6 push-m3">
					<h3>CADASTRO DE CATEGORIA</h3>
						<form action="../Forms/formcategoria.php" id="formCategoria" method="POST">
							<div class="input-field col s12">
								
								<input type="text" name="txtCategoria" id="txtCategoria" maxlength="50" placeholder="Insira o nome da Categoria" autofocus/>
								<label for="txtCategoria">Nome Categoria</label>
							</div>

							<div class="input-field col s12">
								<button name="acao" value="cadastrarCategoria" class="btn" type="submit">CADASTRAR CATEGORIA</button>
							</div>
						</form>

					</div>
				</div>
		