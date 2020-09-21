<?php
	include_once "../Util/conexao.php";

	$conn = conectar();

	function cadastrarUserDAO($nome, $usuario, $senha, $email){
		global $conn;
		try{			
			$query("INSERT INTO usuarios (nome, usuario, senha, email) VALUES ('$nome','$usuario','$senha','$email')");
			$conn->exec($query);

			return $conn->lastInsertId();
		}catch(Exception $e){
			echo "erro: ".$e;
		}
	}
?>