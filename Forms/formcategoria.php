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

	if(isset($_POST['txtCategoria']) && isset($_GET['txtEditar'])){
		$nomeCategoria = $_POST["txtCategoria"];

		editarCategoriaBO($id_categoria, $nomeCategoria);

		echo "<script> window.location.href='../paginas/cadastrocategoria.php'</script> ";
	} else {
		echo "Os campos devem ser preenchidos <br>";
		echo "<br> <a href='../paginas/cadastrocategoria.php'> Voltar</a>";
	}

	if(isset($_GET['txtDeletar'])) {
		if(!empty($_GET['txtDeletar'])) {
			$id_categoria = $_GET['txtDeletar'];

			deletarCategoriaBO($id_categoria);

			echo "<script>
				window.location.href=\"../paginas/cadastrocategoria.php\" </script>";
		} else {
			echo "Os campos devem ser preenchidos <br>";
			echo "<br> <a href='../paginas/cadastrocategoria.php'> Voltar</a>";
		}
	}
?>










