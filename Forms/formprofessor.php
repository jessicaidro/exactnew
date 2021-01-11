<?php
  include_once '../BO/cadastrouserBO.php';

  if($_POST["acao"] == "CadastrarUserProfessor") {
    if(!empty($_POST["txtNome"]) && !empty($_POST["txtUsuario"]) && !empty($_POST["txtSenha"]) && !empty($_POST["txtConfirmar"]) && !empty($_POST["txtEmail"]) && !empty($_POST["txtCurso"])) {
      
      $nome = $_POST["txtNome"]; 
      $usuario = $_POST["txtUsuario"]; 
      $senha = $_POST["txtSenha"]; 
      $confirmar_senha = $_POST["txtConfirmar"]; 
      $email = $_POST["txtEmail"]; 
      $tipo_user = "P"; 
      $id_curso = $_POST["txtCurso"];

      cadastrarUserBO($nome, $usuario, $senha, $confirmar_senha, $email, $tipo_user, $id_curso);
      echo "<script> window.location.href=\"../index.php\";</script>";
    } else {
      echo "<script> alert('Preencha os campos necessários'); <a href='../paginas/cadastrocurso.php'>VOLTAR</a> </script>";
    }
  }

  if($_POST["acao"] == "EditarUser"){
		if(!empty($_POST["id_user"])) {
      $id_user = $_POST["id_user"];
      $nome = $_POST["txtNome"]; 
      $usuario = $_POST["txtUsuario"]; 
      $senha = $_POST["txtSenha"]; 
      $confirmar_senha = $_POST["txtConfirmar"]; 
      $email = $_POST["txtEmail"]; 
      $tipo_user = "P"; 
      $id_curso = NULL;

      cadastrarUserBO($id_user, $nome, $usuario, $senha, $confirmar_senha, $email, $tipo_user, $id_curso);
      echo "<script> window.location.href=\"../index.php\";</script>";
    } else {
		echo "<script> alert('Os campos devem ser preenchidos'); </script>";
		}
  }
  
  if($_POST["acao"] == "DeletarUser") {
		if(!empty($_GET["id_user"])){

			deletarUserDAO($_GET['id_user']);

			echo "<script> window.location.href=\"../index.php\";</script>";
			

		} else {
			echo "Não foi possivel Deletar o usuário";
    } 

	}
 
  ?>
