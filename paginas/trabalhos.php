<?php
	include_once "../util/z_top.php";
?>
	<div class="contentInfos">
		<div class="container">
		<br>
		<br>

					<form method="POST" action="../Forms/formuser" method="POST">
						<input type="hidden" name="acao" value="cadastroFuncionario">
						<h3>Trabalhos | <small>Envie seu trabalho!</small> </h3>


							<div class="form-group">
								
										<img src="../img/folder.png" class="" alt="...">
										<br>
										<br>
										<label for="exampleFormControlFile1">Selecione seu trabalho <small>(Arquivos em PDF)</small> </label>
										<input type="file" class="form-control-file" id="exampleFormControlFile1">

										<b>Selecione seu curso*:</b>
			        						<div class="form-group">
									   			 <select class="form-control" id="exampleFormControlSelect1">
											      <option>1</option>
											      <option>2</option>
											      <option>3</option>
											      <option>4</option>
											      <option>5</option>
												</select>
										<b>Ano da Defesa:</b>
											<input type="text" name="txtAno" id="txtAno" class="form-control" placeholder="Insira o Ano" required autofocus/><br>
				
		

					</form>
					 <center><button type="button" class="btn btn-warning">Cadastrar</button> <button type="button" class="btn btn-success">Atualizar</button> <button type="button" class="btn btn-danger">Excluir</button></center>
				</div>
			</div>
		</div>
	</div>
</form>
</div>
</div>
</div>
</div>

<?php
	include_once "../util/z_footer.php";
?>