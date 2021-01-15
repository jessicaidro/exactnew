<?php
	require_once "../util/conexao.php";

	$conn = conectar();

	function cadastrarUserDAO($nome, $usuario, $senha, $confirmar_senha, $email, $tipo_user, $id_curso){
		global $conn;

		try {
			$verifica = $conn->prepare("select * from Usuarios where email = ?");
			$verifica->bindValue(1, $email);
			$verifica->execute();

	   if($verifica->rowCount() == 0){

			$verifica2 = $conn->prepare("select * from usuarios where usuario = ?");
			$verifica2->bindValue(1, $usuario);
			$verifica2->execute();
	   if ($verifica2->rowCount() == 0) {
	   if ($senha != $confirmar_senha) {
		   echo "<script> alert('As senhas não coincidem'); </script>";
		   echo "<script> window.history.back() </script>";
	   } else{

		   $cadastrar = $conn->prepare("insert into Usuarios(nome, usuario, senha, confirmar_senha, email, tipo_user, id_curso) values (?, ?, ?, ?, ?, ?, ?)");
		   $cadastrar->bindParam(1, $nome);
		   $cadastrar->bindParam(2, $usuario);
		   $cadastrar->bindParam(3, $senha);
		   $cadastrar->bindParam(4, $confirmar_senha);
		   $cadastrar->bindParam(5, $email);
		   $cadastrar->bindParam(6, $tipo_user);
		   $cadastrar->bindParam(7, $id_curso);
		   $cadastrar->execute();
		   
		   echo "<script> alert('Cadastrado com Sucesso'); </script>";
		   echo '<meta http-equiv = refresh content= "0; url = ../paginas/index.php">';
	   }
   }else{
	   echo "<script> alert('Esse nome de usuário já existe'); </script>";
	   echo "<script> window.history.back() </script>";
   }
   }else{
	   echo "<script> alert('Esse e-mail já existe'); </script>";
	   echo "<script> window.history.back() </script>";

		}
   }catch (Exception $e) {
	   echo "Erro cadastrarUserDAO: " . $e;
   }
	}

	function buscarUserDAO(){
		$conn = conectar();

		try {
			$buscarUser = "SELECT id_user FROM where id_user ";
			return $conn->query($buscarUser);
		} catch(Exception $e) {
			echo "Erro buscarUserDAO: ". $e->getMessage();
		}
	}

	function buscarUserGETDAO($id_user) {
		$conn = conectar();

		try{
			$buscarUserget = "SELECT id_user, nome, usuario, senha, email, id_curso  FROM Usuarios where id_user = ".$id_user;
			return $conn->query($buscarUserget);

		} catch(Exception $e) {
			echo "Erro buscarUserGETDAO: ". $e->getMessage();
		}
	}
	function buscarUserCursoDAO($id_user) {
		$conn = conectar();

		try{
			$buscarUserCurso = "SELECT us.id_user, us.id_curso, c.id_curso, c.nome FROM Usuarios us inner join curso c on us.id_curso = c.id_curso where id_user = ".$id_user;
			return $conn->query($buscarUserCurso);

		} catch(Exception $e) {
			echo "Erro buscarUserCursoDAO: ". $e->getMessage();
		}
	}

	function verificaUser($usuario) {
		$conn = conectar();

		try{
			//echo "<script> alert('".$usuario."'); </script>";
			$verifica = "SELECT tipo_user FROM usuarios where usuario = '".$usuario."'";
			return $conn->query($verifica);
			
		} catch(Exception $e){
			echo "Erro verificaUser: ". $e->getMessage();
		}
	}

	function deletarUserDAO($id_user) {
		$conn = conectar();

		try{
			$deletarUser = "DELETE FROM Usuarios where id_user=".$id_user;

			return $conn->exec($deletarUser);
			echo "<script>window.alert('Deletado com Sucesso!'); </script>";	

		} catch (Exception $e){
			echo "Erro deletarUserDAO: ".$e->getMessage();
		}
	}

	function editarUserDAO($id_user,$nome, $usuario, $senha, $confirmar_senha, $email, $tipo_user, $id_curso){
		$conn = conectar();

		try {
			$editarUser = "UPDATE Usuarios set nome = '$nome', usuario = '$usuario', senha = '$senha', confirmar_senha = '$confirmar_senha', email = '$email', tipo_user = '$tipo_user', id_curso = '$id_curso' WHERE ".$id_user;
			return $conn->exec($editarUser);

			echo "<script> window.alert('Editado com Sucesso!'); </script>";
		} catch(Exception $e) {
			echo "Erro editarUserDAO: ".$e->getMessage();
		}
	}

?>