<?php
	include_once "../DAO/trabalhoDAO.php";


	$conn = conectar();

	function cadastrarTrabalhoBO($id_user, $titulo, $id_categoria, $diretorioArquivo, $ano, $descricao, $tipo_trabalho, $data) {
		return cadastrarTrabalhoDAO($id_user, $titulo, $id_categoria, $diretorioArquivo, $ano, $descricao, $tipo_trabalho, $data);
	}

	function buscarTrabalhoGETBO($id_user) {
		return buscarTrabalhoGETDAO($id_user);
	}

	function buscarTrabalhoInicialBO(){
		return buscarTrabalhoInicialDAO();
	}

	function buscarTodosTrabalhosBO(){
		return buscarTodosTrabalhosDAO();
	}

	function buscarTrabalhoUnicoBO($id_trabalho) {
		return buscarTrabalhoUnicoDAO($id_trabalho);
	}

	function buscarTrabalhoUserBO($id_user){
		echo "<script> alert(".$id_user."); </script>";
		return buscarTrabalhoUserDAO($id_user);
	}

	function editarTrabalhoBO($id_user, $titulo, $id_categoria, $diretorioArquivo, $ano, $descricao){
		return editarTrabalhoDAO($id_user, $titulo, $id_categoria, $diretorioArquivo, $ano, $descricao);
}

    function deletarTrabalhoBO($id_trabalho) {
        return deletarTrabalhoDAO($id_trabalho);
    }
?>