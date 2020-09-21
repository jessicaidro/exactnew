<?php
	include_once '../BO/cadastrouserBO.php';
	include_once '../DAO/professorDAO.php';
	include_once '../BO/cadastrarcursoBO.php';


	function cadastrarProfessorBO($nome, $usuario, $senha, $email, $curso){

		$user = cadastrarUserBO($nome,$usuario,$senha,$email);

		if($user > 0 && $user !== false){
			// cadastrar estado aqui

			$curso = cadastrarCursoBO($curso);	

			$aluno = cadastrarProfessorDAO($usuario, $curso);

			if(is_numeric($usuario) && $usuario > 0 && is_numeric($curso) && $curso > 0){
				return true;
			}else{
				return 0;
			}
		}else{
			return 0;
		}
	}
	
?>