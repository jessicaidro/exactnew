<?php   
	require_once('../util/conexao.php');

$conn = conectar();


function cadastrarCategoriaDAO ($nomeCategoria) {
	$conn = conectar();
	
	try{
		$verifica = $conn->prepare("SELECT * FROM bdexact.categoria WHERE NomeCategoria = ?");
		$verifica->bindValue(1, $nomeCategoria);
		$verifica->execute();

		if($verifica->rowCount() == 0) {
			$cadastrar = $conn->prepare("INSERT INTO categoria (NomeCategoria) value (?)");
			$cadastrar->bindParam(1, $nomeCategoria);
			$cadastrar->execute();

			echo "<script> alert('Categoria cadastrada com sucesso); </script>";

		} else {
			echo "<script> alert('Já existe categoria cadastrada); </script>";
			echo "Já existe categoria cadastrada";
		}
	} catch (Exception $e) {
		echo " Erro categoriaDAO: ".$e;
	}
}

function buscarCategoriaDAO () {
	$conn = conectar();

	try{
		$buscarCategoria = "SELECT id_categoria, nomeCategoria FROM categoria";
		return $conn->query($buscarCategoria);

	} catch(Exception $e) {
		echo "Erro buscarCategoriaDAO: ". $e->getMessage();
	}
}

function deletarCategoriaDAO($id_categoria) {
	$conn = conectar();

	try {
		$sql = "DELETE from categoria where id_categoria = '$id_categoria'";

		return $conn->exec($sql);
	} catch (Exception $e){
		echo "Erro deletarCategoriaDAO: ".$e->getMessage();
	}
}

function editarCategoriaDAO($id_categoria, $nomeCategoria) {
	$conn = conectar();

	try {
		$sql = "UPDATE categoria set nomeCategoria = '$nomeCategoria' where id_categoria = $id_categoria";

		return $conn->exec($sql);
		
	} catch (Exception $e) {
		echo "Erro editarCategoriaDAO: ".$e->getMessage();
	}
}



?>



