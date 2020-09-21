<?php 

include '../DAO/categoriaDAO.php';

function CategoriaBO($NomeCategoria)
{
	
	
	$NomeCategoria = CategoriaDAO($NomeCategoria);
	if(is_numeric($NomeCategoria) && $NomeCategoria !== 0) {
		return true;
	} else {
		return 0;
	}
}

function consultarCategoriaBO($NomeCategoria)
{
	$NomeCategoria = ConsultaCategoriaBO($NomeCategoria);
	if (is_numeric($NomeCategoria) && $NomeCategoria !==0) {
		return $NomeCategoria;
	} else {
		return false;
	}
}

?>



