<?php
	include_once '../BO/petosBO.php';
	

    if($_POST["acao"] == "RealizarLogin"){
	    if(!empty($_POST["txtUsuario"]) && !empty($_POST["txtSenha"]) && isset($_POST["txtTipoUser"])){
            $usuario = $_POST["txtUsuario"];
            $senha = $_POST["txtSenha"];
            $tipo_user = $_POST["txtTipoUser"];

            session_start();
            loginBO($usuario, $senha, $tipo_user);
            echo 'chegou aqui';
        } else {
            echo "<script> altert('Preencha todos os campos'); </script>";
            echo "<script> window.history.back()</script>";
        }
    }
?>