<?php
	include_once "../Util/conexao.php";

	$conn = conectar();

	function cadastrarCursoDAO($nome){
		global $conn;
		try{			
			$conn->query("INSERT INTO curso (nome) VALUES ('{$nome})");
			return $conn->lastInsertId();
		}catch(Exception $e){
			return "Erro". $e;
		}
	}
?>