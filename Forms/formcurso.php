<?php 
	include_once '../BO/cadastrocursoBO.php';

	if($_POST["acao"] == "CadastrarCurso"){

		if(!empty($_POST["txtCurso"])){

			$nomeCurso = $_POST["txtCurso"];

			cadastrarCursoBO($nomeCurso);
		
			echo "<script> window.location.href=\"../paginas/cadastrocurso.php\";</script>";

		} else {
		echo "<script> alert('Preencha os campos necessários'); <a href='../paginas/cadastrocurso.php'>VOLTAR</a> </script>";
	}
}

	if($_POST["acao"] == "EditarCurso"){
		if(!empty($_GET["id_curso"])) {
			$nomeCurso = $_POST["txtCurso"];
			$id_curso = $_GET["id_curso"];

			editarCursoBO($nomeCurso, $id_curso);

			echo "<script> window.location.href='../paginas/cadastrocurso.php';</script> ";
	} else {
		echo "<script> alert('Os campos devem ser preenchidos'); </script>";
		}
	}


	if($_POST["acao"] == "DeletarCurso") {
		if(!empty($_GET["id_curso"])){

			deletarCursoDAO($_GET['id_curso']);

			echo "<script> window.location.href=\"../paginas/cadastrocurso.php\";</script>";
			

		} else {
			echo "Não foi possivel Deletar curso";
		} 
	}
?>










