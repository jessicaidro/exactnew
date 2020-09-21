<?php
	include_once '../DAO/cursoDAO.php';

	function cadastrarCursoBO($nome){		
		$curso = cadastrarCursoBO($nome);
		if(is_numeric($curso) && $curso !== 0){
			return $curso;
		}else{
			return false;
		}
	}
?>