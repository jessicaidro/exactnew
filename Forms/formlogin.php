<?php
    include_once '../BO/loginBO.php';
    include_once '../BO/cadastrouserBO.php';
	

    if($_POST["acao"] == "RealizarLogin") {
	    if(!empty($_POST["txtUsuario"]) && !empty($_POST["txtSenha"])){
            
            $tipo_user = verificaUserBO($id_user);

            if($tipo_user == 'A') {

            $usuario = $_POST["txtUsuario"];
            $senha = $_POST["txtSenha"];
            $tipo_user = "A";

            session_start();

            loginBO($usuario, $senha, $tipo_user);

        } else if($id_user == 'P') {

            $usuario = $_POST["txtUsuario"];
            $senha = $_POST["txtSenha"];
            $tipo_user = "P";

            session_start();

            loginBO($usuario, $senha, $tipo_user);

        }
     } else {
            echo "<script> alert('Preencha todos os campos'); </script>";
            echo "<script> window.history.back()</script>";
        }
    }
?>