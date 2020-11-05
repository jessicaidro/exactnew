<?php 
include_once "../DAO/categoriaDAO.php";

function cadastrarCategoriaBO($nomeCategoria) {
	return cadastrarCategoriaDAO($nomeCategoria);
}

function buscarCategoriaBO () {
	return  buscarCategoriaDAO ();
}

function buscarCategoriaGETBO ($id_categoria) {
	return  buscarCategoriaGETDAO ($id_categoria);
}

function deletarCategoriaBO($id_categoria){
	return deletarCategoriaDAO($id_categoria);
}

function editarCategoriaBO($id_categoria, $nomeCategoria){
	return editarCategoriaDAO($id_categoria, $nomeCategoria);
}
?>