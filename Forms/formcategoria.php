<?php 
	include_once '../BO/cadastrocategoriaBO.php';

	if($_POST["acao"] == "CadastrarCategoria"){

		if(!empty($_POST["txtCategoria"])){

			$nomeCategoria = $_POST["txtCategoria"];

			cadastrarCategoriaBO($nomeCategoria);
		
			echo "<script> window.location.href=\"../paginas/cadastrocategoria.php\";</script>";

		} else {
		echo "<script> alert('Preencha os campos necessários'); <a href='../paginas/cadastrocategoria.php'>VOLTAR</a> </script>";
	}
}

	if($_POST["acao"] == "EditarCategoria"){
		if(!empty($_GET["id_categoria"])) {
			$nomeCategoria = $_POST["txtCategoria"];
			$id_categoria = $_GET["id_categoria"];

			editarCategoriaBO($nomeCategoria, $id_categoria);

			echo "<script> window.location.href='../paginas/cadastrocategoria.php';</script> ";
	} else {
		echo "<script> alert('Os campos devem ser preenchidos'); </script>";
		}
	}


	if($_POST["acao"] == "DeletarCategoria") {
		if(!empty($_GET["id_categoria"])){

			deletarCategoriaDAO($_GET['id_categoria']);

			echo "<script> window.location.href=\"../paginas/cadastrocategoria.php\";</script>";
			

		} else {
			echo "Não foi possivel Deletar categoria";
		} 
	}
?>





