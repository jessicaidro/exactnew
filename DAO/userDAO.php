<?php
	require_once "../util/conexao.php";

	$conn = conectar();

	function cadastrarUserDAO($nome, $usuario, $senha, $email){
		global $conn;
		try{		
			$verificaUser = $conn->prepare("SELECT * FROM  usuarios WHERE usuario = ? ");
			$verificaUser->bindParam(1, $usuario);
			$verificaUser->execute();
			$conn->exec($verificaUser);

			$verificaEmail = $conn->prepare("SELECT * FROM  usuarios WHERE email = ? ");
			$verificaEmail->bindParam(1, $email);
			$verificaEmail->execute();
			$conn->exec($verificaEmail);
			

			if($verificaUser->rowCount() >= 1) {
				echo "<script>  window.alert('Já existe esse usuário cadastrado!'); </script>";
			} 
			else if($verificaEmail->rowCount() >= 1) {
				echo "<script>  window.alert('Já existe esse e-mail cadastrado!'); </script>";
			}
			else if($verificaUser->rowCount() == 0 && $verificaEmail->rowCount() == 0) {
				$cadastrar = $conn->prepare("INSERT INTO usuarios (nome, usuario, senha, email) VALUES ('$nome','$usuario','$senha','$email')");
				$cadastrar->bindParam(1, $usuario);
				$cadastrar->execute();

				echo "<script> window.alert('Cadastrado com Sucesso!') </script>";
			} 


			return $conn->lastInsertId();
		} catch(Exception $e){
			echo "erro: ".$e;
		}
	}

	function buscarUserGETDAO($id_user) {
		$conn = conectar();

		try {
			$buscarUsuario = "SELECT id_user, nome, email FROM usuarios WHERE id_user = ".$id_user;
			return $conn->query($buscarUsuario);
		} catch(Exception $e) {
			echo "Erro buscarUsuarioGETDAO: ".$e->getMessage();
		}
	}

	function deletarUserDAO($id_user) {
		$conn = conectar();
	
		try {
			$sql = "DELETE from usuarios where id_user =". $id_user;
	
			return $conn->exec($sql);
			echo "<script>  window.alert('Deletado com Sucesso!'); </script>";	
	
		} catch (Exception $e){
			echo "Erro deletarUserDAO: ".$e->getMessage();
		}
	}

	function editarUserDAO($id_user, $nome, $usuario, $senha, $email) {
		$conn = conectar();
	
		try {
			$verifica = $conn->prepare("SELECT * FROM usuarios WHERE usuario = '?' ");
			$verifica->bindValue(1, $usuario);
			$verifica->execute();	

			$sql = "UPDATE user set nome = '$nome', usuario = '$usuario', senha = '$senha', email = '$email' where id_user = ". $id_user;
			
			return $conn->exec($sql);
	
			echo "<script>  window.alert('Editado com Sucesso!'); </script>";
			
		} catch (Exception $e) {
			echo "Erro editarCategoriaDAO: ".$e->getMessage();
		}
	}

?>