<?php   
	require_once('../util/conexao.php');

$conn = conectar();


function cadastrarCursoDAO ($nomeCurso) {
	$conn = conectar();
	
	try{
		$verifica = $conn->prepare("SELECT * FROM bdexact.curso WHERE nome = ?");
		$verifica->bindValue(1, $nomeCurso);
		$verifica->execute();

		if($verifica->rowCount() == 0) {
			$cadastrar = $conn->prepare("INSERT INTO curso (nome) value (?)");
			$cadastrar->bindParam(1, $nomeCurso);
			$cadastrar->execute();

			echo "<script>  window.alert('Cadastrado com Sucesso!'); </script>";

		} 
	} catch (Exception $e) {
		echo " Erro CadastrarCursoDAO: ".$e;
	}
}

function buscarCursoDAO () {
	$conn = conectar();

	try{
		$buscarCurso = "SELECT id_curso, nome FROM curso";
		return $conn->query($buscarCurso);

	} catch(Exception $e) {
		echo "Erro buscarCursoDAO: ". $e->getMessage();
	}
}

function buscarCursoGETDAO ($id_curso) {
	$conn = conectar();

	try{
		$buscarCurso = "SELECT id_curso, nome FROM Curso where id_curso = ".$id_curso;
		return $conn->query($buscarCurso);

	} catch(Exception $e) {
		echo "Erro buscarCursoDAO: ". $e->getMessage();
	}
}

function deletarCursoDAO($id_curso) {
	$conn = conectar();

	try {
		$sql = "DELETE from curso where id_curso =". $id_curso;

		return $conn->exec($sql);
		echo "<script>  window.alert('Deletado com Sucesso!'); </script>";	

	} catch (Exception $e){
		echo "Erro deletarCursoDAO: ".$e->getMessage();
	}
}

function editarCursoDAO($nomeCurso, $id_curso) {
	$conn = conectar();

	try {
		$sql = "UPDATE curso set nome = '$nomeCurso' where id_curso = ". $id_curso;
		
		return $conn->exec($sql);

		echo "<script>  window.alert('Editado com Sucesso!'); </script>";
		
	} catch (Exception $e) {
		echo "Erro editarCursoDAO: ".$e->getMessage();
	}
}



?>
