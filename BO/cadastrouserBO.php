<?php
	include_once '../DAO/userDAO.php';

	
	$conn = conectar();

	function cadastrarUserBO($nome, $usuario, $senha, $confirmar_senha, $email, $tipo_user, $id_curso){
		return cadastrarUserDAO($nome, $usuario, $senha, $confirmar_senha, $email, $tipo_user, $id_curso);
	}

	function buscarUserBO(){
		return buscarUserDAO();
	}

	function buscarUserGETBO($id_user) {
		return buscarUserGETDAO($id_user);
	}

	function deletarUserBO($id_user) {
		return deletarUserDAO($id_user);
	}

	function editarUserBO($nome, $usuario, $senha, $confirmar_senha, $email, $tipo_user, $id_curso){
		return editarUserDAO($nome, $usuario, $senha, $confirmar_senha, $email, $tipo_user, $id_curso);
	}
	
	function verificaUserBO($id_user){
		return verificaUser($id_user);
	}

?>
