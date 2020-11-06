<?php
	include_once "../menu_lateral.php";
?>

				<div class="row">
					<div class="col s12 m6 push-m3">
					<h3>Cadastro <small>|</small> <b>Curso</b></h3>
						<form action="../Forms/formcurso.php" id="formCurso" method="POST">
							<div class="input-field col s12">
								
								<input type="text" name="txtCurso" id="txtCurso" data-length="60" placeholder="Insira o nome do Curso"/>
								<label for="txtCurso">Nome Curso</label>
								<button name="acao" value="CadastrarCurso" class="btn waves-effect waves-light " type="submit"><i class="material-icons right">send</i>CADASTRAR</button>
							</div>
						</form>
					<br>
					<br>
					</div>
				</div>
					
				
				<div class="row">
					<div class="col s12 m6 push-m3">
						<h4> Todos os Cursos</h4>
<table class="responsive-table highlight" >
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome Curso</th>
			<th>Ações</th>
		</tr>
	</thead>

	<tbody>
		<?php
			include "../BO/cadastrocursoBO.php";
			$resultado = buscarCursoBO();

				if($resultado) {
					while($r = $resultado->fetch(PDO::FETCH_OBJ)) {
						echo '<tr>';
						echo "<td> $r->id_curso</td>
							  <td> $r->nome</td>
							  <td> <a class=\"waves-effect waves-light btn blue\" href=\"../paginas/editarcurso.php?id_curso=$r->id_curso\"><i class=\"material-icons blue \">mode_edit</i></a> 
							  <form action=\"../Forms/formcurso.php?id_curso=$r->id_curso\" method=\"POST\"> 
							  <button name=\"acao\" value=\"DeletarCurso\"  class=\"waves-effect waves-light btn deep-orange\"><i class=\"material-icons deep-orange\">delete</i></button></form>
							 </td>";
						echo '</tr>';
					} ;
				} else {
					echo "<h4> Nenhum curso cadastrada.</h4>";
				}
		?>
	</tbody>
</table>
</div>
					</div>