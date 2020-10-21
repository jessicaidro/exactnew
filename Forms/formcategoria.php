<?php 
	include_once '../BO/cadastrocategoriaBO.php';

	if($_POST["acao"] == "cadastrarCategoria"){
		if(!empty($_POST["txtCategoria"])){

			$nomeCategoria = $_POST["txtCategoria"];

			cadastrarCategoriaBO($nomeCategoria);
			

		} else {
		echo "<script> alert('Preencha os campos necessários'); </script>";
		echo "<script> window.history.back() </script>";
	}
}

?>










