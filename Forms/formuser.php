<?php
  include_once "../BO/cadastrouserBO.php";

  if (!empty($_POST['txtNome']) && !empty($_POST['txtUsuario']) && !empty($_POST['txtSenha']) && !empty($_POST['txtEmail'])) {
    $nome = $_POST['txtNome'];
    $usuario = $_POST['txtUsuario'];
    $senha = $_POST['txtSenha'];
    $confirmar_senha = $_POST['txtConfirmar'];
    $email = $_POST['txtEmail'];
    $curso = $_POST['txtCurso'];

    cadastrarUserDAO($nome, $usuario, $senha, $confirmar_senha, $email, $tipo_user, $id_curso);
    include_once "../paginas/cadastraraluno.php";

  }
    else {
      echo "Os campos devem ser preenchidos <br>";
    }

    if($_POST["acao"] == "EditarAluno") {
      if(!empty($_GET["id_user"])) {
        $id_user = $_GET["id_user"];
        $nome = $_POST['txtNome'];
        $usuario = $_POST['txtUsuario'];
        $senha = $_POST['txtSenha'];
        $confirmar_senha = $_POST['txtConfirmar'];
        $email = $_POST['txtEmail'];
        $curso = $_POST['txtCurso'];

        editarUserBO($nome, $usuario, $senha, $confirmar_senha, $email, $tipo_user, $id_curso);
        echo "<script> window.location.href='../paginas/painelaluno.php';</script> ";
      } else {
        echo "<script> alert('Os campos devem ser preenchidos'); </script>";
        }
    }

    if($_POST["acao"] == "DeletarAluno") {
      if(!empty($_GET["id_user"])){
  
        deletarUserDAO($_GET['id_user']);
  
        echo "<script> window.location.href=\"../index.php\";</script>";
        
  
      } else {
        echo "Não foi possivel Deletaro usuário";
      } 
    }

  ?>

  