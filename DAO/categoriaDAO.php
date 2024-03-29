<?php   
	require_once('../util/conexao.php');

$conn = conectar();


function cadastrarCategoriaDAO ($nomeCategoria) {
	$conn = conectar();
	
	try{
		$verifica = $conn->prepare("SELECT * FROM categoria WHERE NomeCategoria = ?");
		$verifica->bindValue(1, $nomeCategoria);
		$verifica->execute();

		if($verifica->rowCount() == 0) {
			$cadastrar = $conn->prepare("INSERT INTO categoria (NomeCategoria) value (?)");
			$cadastrar->bindParam(1, $nomeCategoria);
			$cadastrar->execute();

			echo "<script>  window.alert('Cadastrado com Sucesso!'); </script>";

		} 
	} catch (Exception $e) {
		echo " Erro categoriaDAO: ".$e;
	}
}

function buscarCategoriaDAO() {
	$conn = conectar();

	try{
		$buscarCategoria = "SELECT id_categoria, nomeCategoria FROM categoria order by nomeCategoria asc";
		return $conn->query($buscarCategoria);

	} catch(Exception $e) {
		echo "Erro buscarCategoriaDAO: ". $e->getMessage();
	}
}

function buscarCategoriaGETDAO ($id_categoria) {
	$conn = conectar();

	try{
		$buscarCategoria = "SELECT id_categoria, nomeCategoria FROM Categoria where id_categoria = ".$id_categoria;
		return $conn->query($buscarCategoria);

	} catch(Exception $e) {
		echo "Erro buscarCategoriaDAO: ". $e->getMessage();
	}
}

function deletarCategoriaDAO($id_categoria) {
	$conn = conectar();

	try {
		$sql = "DELETE from categoria where id_categoria =". $id_categoria;

		return $conn->exec($sql);
		echo "<script>  window.alert('Deletado com Sucesso!'); </script>";	

	} catch (Exception $e){
		echo "Erro deletarCategoriaDAO: ".$e->getMessage();
	}
}

function editarCategoriaDAO($nomeCategoria, $id_categoria) {
	$conn = conectar();

	try {
		$sql = "UPDATE categoria set NomeCategoria = '$nomeCategoria' where id_categoria = ". $id_categoria;
		
		return $conn->exec($sql);

		echo "<script>  window.alert('Editado com Sucesso!'); </script>";
		
	} catch (Exception $e) {
		echo "Erro editarCategoriaDAO: ".$e->getMessage();
	}
}

?>