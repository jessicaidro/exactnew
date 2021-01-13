<?php
	require_once "../util/conexao.php";

	$conn = conectar();

	function cadastrarTrabalhoDAO($id_user, $titulo, $id_categoria, $diretorioArquivo, $ano, $descricao, $tipo_trabalho, $data) {
		global $conn;

		try {
			$cadastrar = $conn->prepare("INSERT INTO trabalhos (id_user, titulo, id_categoria, diretorioArquivo, ano, descricao, tipo_arquivo, datatrabalho) VALUES (?,?,?,?,?,?,?,?)");
			$cadastrar->bindParam(1, $id_user);
			$cadastrar->bindParam(2, $titulo);
			$cadastrar->bindParam(3, $id_categoria);
			$cadastrar->bindParam(4, $diretorioArquivo);
			$cadastrar->bindParam(5, $ano);
			$cadastrar->bindParam(6, $descricao);
			$cadastrar->bindParam(7, $tipo_trabalho);
			$cadastrar->bindParam(8, $data);
			$cadastrar->execute();

			echo "<script> alert('Cadastrado com sucesso!') </script>";
	
			
		} catch (Exception $e){
			echo "Erro cadastrarTrabalhoDAO: ".$e;
		}
	}

	function buscarTrabalhoGETDAO($id_user) {
		$conn = conectar();
		try {
			$buscarTrabalhos = "SELECT id_trabalho FROM trabalhos where id_user".$id_user;
			return $conn->query($buscarTrabalhos);
		} catch(Exception $e){
			echo "Erro buscarTrabalhoGETDAO: ".$e->getMessage();
		}
	}

	function buscarTrabalhoInicialDAO(){
		$conn = conectar();

		try{
			$buscarInicio = "SELECT tr.id_trabalho, tr.id_user, tr.titulo, tr.id_categoria, tr.diretorioArquivo, tr.ano, tr.descricao, tr.tipo_arquivo, tr.datatrabalho, ca.NomeCategoria FROM trabalhos
tr inner join categoria ca on tr.id_categoria = ca.id_categoria order by tr.datatrabalho desc LIMIT 4";
			return $conn->query($buscarInicio);
						
		} catch(Exception $e) {
			echo "Erro buscarTrabalhoInicial: ".$e->getMessage();
		}
	}

	function buscarTodosTrabalhosDAO(){
		$conn = conectar();

		try{
			$buscarTodos = "SELECT id_trabalho, id_user, titulo, id_categoria, diretorioArquivo, ano, descricao, tipo_arquivo, datatrabalho FROM trabalhos order by datatrabalho desc";
			return $conn->query($buscarTodos);
						
		} catch(Exception $e) {
			echo "Erro buscarTodosTrabalhosDAO: ".$e->getMessage();
		}
	}

	function buscarTrabalhoUnicoDAO($id_trabalho){
		$conn = conectar();

		try{
			$buscarUnico = "select id_trabalho, id_user, titulo, id_categoria, diretorioArquivo, ano, descricao, tipo_arquivo, datatrabalho from trabalhos where id_trabalho = ".$id_trabalho;
			return $conn->query($buscarUnico);
					
		} catch(Exception $e) {
			echo "Erro buscarTodosTrabalhosDAO: ".$e->getMessage();
		}
	}
	
	function buscarTrabalhoUserDAO($id_user) {
		$conn = conectar();

		try{
			$buscarUser = 'select id_trabalho, id_user, titulo, id_categoria, diretorioArquivo, ano, descricao, tipo_arquivo, datatrabalho from trabalhos where id_user = '.$id_user.' order by datatrabalho desc';
			return $conn->query($buscarUser);
		} catch(Exception $e) {
			echo "Erro buscarTrabalhoUserDAO: ".$e->getMessage();
		}
	}


	function editarTrabalhoDAO($titulo, $id_categoria, $diretorioArquivo, $ano, $descricao){
		$conn = conectar();
		try {
		$editarTrabalho = "UPDATE trabalhos set id_categoria = '$id_categoria', titulo = '$titulo', diretorioArquivo= '$diretorioArquivo', ano = '$ano', descricao = '$descricao' ";
		return $conn->exec($editarTrabalho);

		echo "<script> window.alert('Editado com Sucesso!'); </script>";

	} catch(Exception $e) {
		echo "Erro editarTrabalhoDAO: ".$e->getMessage();
	}
}

function deletarTrabalhoDAO($id_trabalho) {
	$conn = conectar();

	try{
		$deletarUser = "DELETE FROM trabalhos where id_trabalho =".$id_trabalho;

		return $conn->exec($deletarUser);
		echo "<script>window.alert('Deletado com Sucesso!'); </script>";	

	} catch (Exception $e){
		echo "Erro deletarTrabalhoDAO: ".$e->getMessage();
	}
}

?>