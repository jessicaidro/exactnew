<?php 
	include_once '../BO/cadastrocategoriaBO.php';

	if($_POST["acao"] == "cadastrarCategoria"){
		if(!empty($_POST["txtCategoria"])){

			$nomeCategoria = $_POST["txtCategoria"];

			cadastrarCategoriaBO($nomeCategoria);
			
			echo "Cadastrado com sucesso";
			echo "<script> window.history.back() </script>";
			echo "<script> object.reload(forcedReload);</script>";

		} else {
		echo "<script> alert('Preencha os campos necessários'); </script>";
		echo "<script> window.history.back() </script>";
	}
}

	if($_POST['acao'] == 'txtEditar'){
		$nomeCategoria = $_POST["txtCategoria"];
		$id_categoria = $_GET['txtEditar'];

		editarCategoriaBO($id_categoria, $nomeCategoria);

		echo "<script> window.location.href='../paginas/cadastrocategoria.php'</script> ";
		echo "Editar com sucesso";
	} else {
		echo "Os campos devem ser preenchidos <br>";
		echo "<br> <a href='../paginas/cadastrocategoria.php'> Voltar</a>";
	}

	if($_POST['acao'] == 'txtDeletar') {

			deletarCategoriaBO($_GET['id_categoria']);

			echo "<script>
				window.location.href=\"../paginas/cadastrocategoria.php\" </script>";
			echo "Deletado com sucesso";
		} else {
			echo "Os campos devem ser preenchidos <br>";
			echo "<br> <a href='../paginas/cadastrocategoria.php'> Voltar</a>";
		}
?>










