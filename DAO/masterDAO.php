<?php   
	require_once('../util/conexao.php');

$conn = conectar();

function totalUserAlunoDAO() {
	$conn = conectar();

	try{
		$totalUserAluno = $conn->query("select count(*) from usuarios u where u.tipo_user like '%A%'");
		return $totalUserAluno;

	} catch(Exception $e) {
		echo "Erro totalUserAlunoDAO: ". $e->getMessage();
	}
}

function totalUserProfessorDAO() {
	$conn = conectar();

	try{
		$totalUserProfessor = $conn->query("select count(*) from usuarios u WHERE u.tipo_user like '%P%'");
		return $totalUserProfessor;

	} catch(Exception $e) {
		echo "Erro totalUserProfessorDAO: ". $e->getMessage();
	}
}

function totalTCCDAO() {
	$conn = conectar();

	try{
		$totalTCC = "select count(*) from trabalhos t WHERE t.tipo_arquivo = 0";
		return $conn->query($totalTCC);

	} catch(Exception $e) {
		echo "Erro totalTCCDAO: ". $e->getMessage();
	}
}

function totalArtigoDAO() {
	$conn = conectar();

	try{
		$totalArtigo = "select count(*) from trabalhos t WHERE t.tipo_arquivo = 1";
		return $conn->query($totalArtigo);

	} catch(Exception $e) {
		echo "Erro totalArtigoDAO: ". $e->getMessage();
	}
}

?>