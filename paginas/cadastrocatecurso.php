<?php
	include_once "../util/z_top.php";
?>
<div class="contentInfos">
	<div class="container">
		<br>
		<br>
		<div class="row">
    		<div class="col-sm">
			<form method="POST" action="../Forms/formcategoria.php" method="POST">
				<input type="hidden" name="acao" value="cadastro">
					<h3>Categoria </h3>
					<hr>
	        		<div class="form-row">
	        		<div class="col">	
	    
	        				<input type="text" name="txtCategoria" id="txtCategoria" class="form-control" placeholder="Insira o nome do categoria" required autofocus/><br>
	        		</div>
	        		</div>
			</form>
		</div>

		<div class="col-sm">
			<form method="POST" action="../Forms/formcurso.php" method="POST">
			<h3> Curso</h3>
			<hr>
			<input type="text" name="txtCurso" id="txtCurso" class="form-control" placeholder="Insira o nome do Curso" required autofocus>
			<br>
		</form>
		</div>
</div>
</div>
<br>
	 <center><button type="button" class="btn btn-warning">Cadastrar</button> <button type="button" class="btn btn-success">Atualizar</button> <button type="button" class="btn btn-danger">Excluir</button></center>
</div>

<?php
	include_once "../util/z_footer.php";
?>