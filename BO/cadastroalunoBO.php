<?php
	include_once '../BO/cadastrouserBO.php';
	include_once '../DAO/alunoDAO.php';
	include_once '../BO/cadastrarcursoBO.php';


	function cadastrarAlunoBO($nome, $usuario, $senha, $email, $curso, $ano){

		$user = cadastrarUserBO($nome,$usuario,$senha,$email);

		if($user > 0 && $user !== false){
			// cadastrar estado aqui

			$curso = cadastrarCursoBO($curso);	

			$aluno = cadastrarAlunoDAO($usuario, $curso, $ano);

			if(is_numeric($usuario) && $usuario > 0 && is_numeric($curso) && $curso > 0 && is_numeric($aluno) && $aluno > 0){
				return true;
			}else{
				return 0;
			}
		}else{
			return 0;
		}
	}
	
?>