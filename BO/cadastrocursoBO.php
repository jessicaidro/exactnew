<?php 
include_once "../DAO/cursoDAO.php";

function cadastrarCursoBO($nomeCurso) {
	return cadastrarCursoDAO($nomeCurso);
}

function buscarCursoBO () {
	return  buscarCursoDAO ();
}

function buscarCursoGETBO ($id_curso) {
	return  buscarCursoGETDAO ($id_curso);
}

function deletarCursoBO($id_curso){
	return deletarCursoDAO($id_curso);
}

function editarCursoBO($id_curso, $nomeCurso){
	return editarCursoDAO($id_curso, $nomeCurso);
}
?>