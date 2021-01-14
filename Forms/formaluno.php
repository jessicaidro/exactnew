<?php
  include_once '../BO/cadastrouserBO.php';

  if($_POST["acao"] == "CadastrarUserAluno") {
    if(!empty($_POST["txtNome"]) && !empty($_POST["txtUsuario"]) && !empty($_POST["txtSenha"]) && !empty($_POST["txtConfirmar"]) && !empty($_POST["txtEmail"]) && !empty($_POST["txtCurso"])) {
      
      $nome = $_POST["txtNome"]; 
      $usuario = $_POST["txtUsuario"]; 
      $senha = $_POST["txtSenha"]; 
      $confirmar_senha = $_POST["txtConfirmar"]; 
      $email = $_POST["txtEmail"]; 
      $tipo_user = "A"; 
      $id_curso = $_POST["txtCurso"];

      cadastrarUserBO($nome, $usuario, $senha, $confirmar_senha, $email, $tipo_user, $id_curso);
      echo "<script> window.location.href=\"../paginas/index.php\";</script>";
    } else {
      echo "<script> alert('Preencha os campos necessários'); <a href='../paginas/cadastrocurso.php'>VOLTAR</a> </script>";
    }
  }

  if($_POST["acao"] == "EditarAluno"){
    
    $id_user = $_GET['id_user'];

		if(!empty($_SESSION["id_user"]) == $id_user) {

      $id_user = $_SESSION["id_user"];
      $nome = $_POST["txtNome"]; 
      $usuario = $_POST["txtUsuario"]; 
      $senha = $_POST["txtSenha"]; 
      $confirmar_senha = $_POST["txtConfirmar"]; 
      $email = $_POST["txtEmail"]; 
      $tipo_user = "A"; 
      $id_curso = $_POST["txtCurso"];

      editarUserDAO($id_user, $nome, $usuario, $senha, $confirmar_senha, $email, $tipo_user, $id_curso);
      echo "<script> window.location.href=\"../paginas/painelaluno.php\";</script>";
    } else {
		echo "<script> alert('Os campos devem ser preenchidos'); </script>";
		}
  }
  
  if($_POST["acao"] == "DeletarUser") {
    session_start();
    
		if(!empty($_SESSION["id_user"])){

      
			deletarUserDAO($_GET['id_user']);

			echo "<script> window.location.href=\"../paginas/index.php\";</script>";
			

		} else {
			echo "Não foi possivel Deletar o usuário";
		} 
	}
 
  ?>
