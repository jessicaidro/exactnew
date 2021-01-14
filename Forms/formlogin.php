<?php
    include_once '../BO/loginBO.php';	

    if($_POST["acao"] == "RealizarLogin") {
	    if(!empty($_POST["txtUsuario"]) || !empty($_POST["txtSenha"])){
            $usuario = $_POST["txtUsuario"];
            $senha = $_POST["txtSenha"];

            session_start();
            loginBO($usuario, $senha);            
                       
        }
        else{
            echo "<script> alert('Preencha todos os campos'); </script>";
            echo '<meta http-equiv = refresh content= "0; url = ../paginas/index.php">';
        }
            
    }


    if ($_POST["acao"] == "Sair") {
        session_start();
                unset($_SESSION["id_user"]);
                unset($_SESSION["usuario"]);
                unset($_SESSION["senha"]);
        session_destroy();

        echo "<script> alert('Deslogado'); </script>";
        echo '<meta http-equiv = refresh content= "0; url = ../paginas/index.php">';

    }
?>