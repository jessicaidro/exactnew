<?php
	include_once "../Util/conexao.php";

	$conn = conectar();

	function cadastrarAlunoDAO($id_user, $id_curso, $ano){
		global $conn;
		try{			
			$conn->query("INSERT INTO aluno (id_user, id_curso, ano) VALUES ('{$id_user}','{$id_curso}','{$ano}')");
			return $conn->lastInsertId();
		}catch(Exception $e){
			return "Erro". $e;
		}
	}

	function editarAlunoDAO ($id_user, $id_curso, $ano){
		global $conn;
		try {
			$conn->query("UPDATE aluno WHERE id_aluno = {id_user}");
			return true;
		}catch (Exception $e){
			return false;
		}
	}
?>