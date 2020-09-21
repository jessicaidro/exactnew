<?php 

include '../Util/Conexao.php';

$conn = conectar();

function CategoriaDAO($NomeCategoria)
{
	global $conn;
	
	try
	{
		$conn->query("INSERT INTO categoria (NomeCategoria) values('{$NomeCategoria}')");
		return $conn->lastInsertId();
	}catch(Exception $e){
		echo "erro: ".$e;
	}
}

function consultarCategoriaDAO()
{
	global $conn;
	
	try{
		$select = $conn->query("SELECT id_categoria from categoria where NomeCategoria = '{$NomeCategoria}'");
		$NomeCategoria = $select->fetch();

		return $NomeCategoria['id_categoria'];
	}
	catch(Exception $e)
	{
		echo "erro: ".$e;
	}
}

?>



