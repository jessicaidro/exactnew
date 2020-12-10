<?php
  include_once '../BO/cadastrouserBO.php';

  if($_POST["acao"] == "CadastrarUserAluno") {
    if(!empty($_POST["txtUserAluno"])) {
      $nome = $_POST["txtNome"]; 
      $usuario = $_POST["txtUsuario"]; 
      $senha = $_POST["txtSenha"]; 
      $confirmar_senha = $_POST["txtConfirmar"]; 
      $email = $_POST["txtEmail"]; 
      $tipo_user = "A"; 
      $id_curso = $_POST["txtCurso"];

      cadastrarUserBO($nome, $usuario, $senha, $confirmar_senha, $email, $tipo_user, $id_curso);
      echo "<script> window.location.href=\"../index.php\";</script>";
    } else {
      echo "<script> alert('Preencha os campos necessários'); <a href='../paginas/cadastrocurso.php'>VOLTAR</a> </script>";
    }
  }

  if($_POST["acao"] == "EditarUser"){
		if(!empty($_POST["txtUserAluno"])) {
      $nome = $_POST["txtNome"]; 
      $usuario = $_POST["txtUsuario"]; 
      $senha = $_POST["txtSenha"]; 
      $confirmar_senha = $_POST["txtConfirmar"]; 
      $email = $_POST["txtEmail"]; 
      $tipo_user = $_POST["txtTipo"]; 
      $id_curso = $_POST["txtCurso"];

      cadastrarUserBO($nome, $usuario, $senha, $confirmar_senha, $email, $tipo_user, $id_curso);
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
