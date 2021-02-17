<?php
	include_once '../DAO/userDAO.php';

	
	$conn = conectar();

	function cadastrarUserBO($nome, $usuario, $senha, $confirmar_senha, $email, $tipo_user, $id_curso){
		return cadastrarUserDAO($nome, $usuario, $senha, $confirmar_senha, $email, $tipo_user, $id_curso);
	}

	function buscarUserBO(){
		return buscarUserDAO();
	}

	function buscarUserABO(){
		return buscarUserADAO();
	}

	function buscarUserPBO(){
		return buscarUserPDAO();
	}

	function buscarUserGETBO($id_user) {
		//echo "<script> alert('".$id_user."'); </script>";
		return buscarUserGETDAO($id_user);
	}
	function buscarUserCursoBO($id_user) {
		return buscarUserCursoDAO($id_user);
	}
	function deletarUserBO($id_user) {
		return deletarUserDAO($id_user);
	}

	function editarUserBO($id_user,$nome, $usuario, $senha, $confirmar_senha, $email, $tipo_user, $id_curso){
		// echo "<script> alert('".$id_user."'); </script>";
		return editarUserDAO($id_user, $nome, $usuario, $senha, $confirmar_senha, $email, $tipo_user, $id_curso);
	}
	
	function verificaUserBO($id_user){
		//echo "<script> alert('".$id_user."'); </script>";
		return verificaUser($id_user);
	}

?>
