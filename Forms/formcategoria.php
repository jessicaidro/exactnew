<?php 
	include_once '../BO/cadastrocategoriaBO.php';

	if($_POST["cadastrar"] == "CadastrarCategoria"){

		if(!empty($_POST["txtCategoria"])){

			$nomeCategoria = $_POST["txtCategoria"];

			cadastrarCategoriaBO($nomeCategoria);
		
			echo "<script> alert('Cadastrado com sucesso');  window.location.href=\"../paginas/cadastrocategoria.php\"; </script>";

		} else {
		echo "<script> alert('Preencha osSSSSSSSSSS campos necessários'); <a href='../paginas/cadastrocategoria.php'>VOLTAR</a> </script>";
	}
}

	if($_POST["editar"] == "EditarCategoria"){
		$nomeCategoria = $_POST["txtCategoria"];
		$id_categoria = $_GET["id_categoria"];

		editarCategoriaBO($nomeCategoria, $id_categoria);

		echo "<script> window.location.href='../paginas/cadastrocategoria.php'</script> ";
	} else {
		echo "<script> alert('Os AAAAAAAAAAAAAcampos devem ser preenchidos'); </script>";
	}


	if($_POST["deletar"] == "DeletarCategoria") {

		deletarCategoriaDAO($_GET['id_categoria']);

		echo "<script> window.location.href=\"../paginas/cadastrocategoria.php\" </script>";

		} 
?>










