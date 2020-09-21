<?php
  include_once "../BO/cadastrouserBO.php";

  if (!empty($_POST['txtNome']) && !empty($_POST['txtUsuario']) && !empty($_POST['txtSenha']) && !empty($_POST['txtEmail'])) {
    $NOME = $_POST['txtNome'];
    $USUARIO = $_POST['txtUsuario'];
    $SENHA = $_POST['txtSenha'];
    $EMAIL = $_POST['txtEmail'];

    cadastrarUserDAO($NOME, $USUARIO, $SENHA, $EMAIL);
    include_once "../paginas/cadastraraluno.php";

  }

    else {
      echo "Os campos devem ser preenchidos <br>";
    }

  ?>

  