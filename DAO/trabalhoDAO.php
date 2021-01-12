<?php
	require_once "../util/conexao.php";

	$conn = conectar();

	function cadastrarTrabalhoDAO($id_user, $titulo, $id_categoria, $diretorioArquivo, $ano, $descricao) {
		global $conn;

		try {
			$cadastrar = $conn->prepare("INSERT INTO trabalhos (id_user, titulo, id_categoria, diretorioArquivo, ano, descricao) VALEUS (?,?,?,?,?,?)");
			$cadastrar->bindParam(1, $id_user);
			$cadastrar->bindParam(2, $titulo);
			$cadastrar->bindParam(3, $id_categoria);
			$cadastrar->bindParam(4, $diretorioArquivo);
			$cadastrar->bindParam(5, $ano);
			$cadastrar->bindParam(6, $descricao);
			$cadastrar->exeute();

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