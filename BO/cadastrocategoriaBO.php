<?php 
include_once "../DAO/categoriaDAO.php";

function cadastrarCategoriaBO($nomeCategoria) {
	return cadastrarCategoriaDAO($nomeCategoria);
}

function buscarCategoriaBO ($nomeCategoria) {
	return  buscarCategoriaDAO ($nomeCategoria);
}

function deletarCategoriaBO($id_categoria){
	return deletarCategoriaDAO($id_categoria);
}

function editarCategoriaBO($id_categoria, $nomeCategoria){
	return editarCategoriaDAO($id_categoria, $nomeCategoria);
}
?>