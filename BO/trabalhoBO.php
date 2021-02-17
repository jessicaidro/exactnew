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

	function buscarTodosTrabalhosBO($idcat){
		return buscarTodosTrabalhosDAO($idcat);
	}

	function buscarTrabalhoUnicoBO($id_trabalho) {
		return buscarTrabalhoUnicoDAO($id_trabalho);
	}

	function buscarTrabalhoUserBO($id_user){
		// echo "<script> alert(".$id_user."); </script>";
		return buscarTrabalhoUserDAO($id_user);
	}
	function buscarTrabalhoBO($id_trabalho) {
		return buscarTrabalhoDAO($id_trabalho);
	}

	function editarTrabalhoBO($id_trabalho, $titulo, $id_categoria, $diretorioArquivo, $ano, $descricao, $tipo_arquivo){
		return editarTrabalhoDAO($id_trabalho, $titulo, $id_categoria, $diretorioArquivo, $ano, $descricao, $tipo_arquivo);
}

    function deletarTrabalhoBO($id_trabalho) {
        return deletarTrabalhoDAO($id_trabalho);
	}
	
	function buscarTipoCategoriaBO($idcat) {
		return buscarTipoCategoriaDAO($idcat);	
	}

	function contaVisitasBO($id_trabalho){
		return contaVisitasDAO($id_trabalho);
	}
	function buscaTrabalhoDescricaoBO($descricao) {
		return buscaTrabalhoDescricaoDAO($descricao);
	}
?>