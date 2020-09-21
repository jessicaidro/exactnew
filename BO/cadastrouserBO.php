<?php
	include_once '../DAO/userDAO.php';

	function cadastrarUserBO($nome, $usuario, $senha, $email) {		
		
		cadastrarUserDAO($nome, $usuario, $senha, $email);

	}
?>
