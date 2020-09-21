<?php
	include_once "../Util/conexao.php";

	$conn = conectar();

	function cadastrarProfessorDAO($id_user, $id_curso, $ano){
		global $conn;
		try{			
			$conn->query("INSERT INTO professor (id_user, id_curso) VALUES ('{$id_user}','{$id_curso}')");
			return $conn->lastInsertId();
		}catch(Exception $e){
			return "Erro". $e;
		}
	}

	function editarProfessorDAO($id_user, $id_curso){
		global $conn;
		try {
			$conn->query("UPDATE aluno WHERE id_professor = {id_user}");
			return true;
		}catch (Exception $e){
			return false;
		}
	}
?>