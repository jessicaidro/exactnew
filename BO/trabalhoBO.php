<?php
	include_once "../DAO/trabalhoDAO.php";

	$conn = conectar();

	function cadastrarTrabalhoBO($id_user, $titulo, $id_categoria, $diretorioArquivo, $ano, $descricao) {
		return cadastrarTrabalhoDAO($id_user, $titulo, $id_categoria, $diretorioArquivo, $ano, $descricao);
	}

	function buscarTrabalhoGETBO($id_user) {
		return buscarTrabalhoGETDAO($id_user);
	}

	function editarTrabalhoBO($id_user, $titulo, $id_categoria, $diretorioArquivo, $ano, $descricao){
		return editarTrabalhoDAO($id_user, $titulo, $id_categoria, $diretorioArquivo, $ano, $descricao);
}

    function deletarTrabalhoBO($id_trabalho) {
        return deletarTrabalhoDAO($id_trabalho);
    }
?>