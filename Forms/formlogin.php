<?php
    include_once '../BO/loginBO.php';
    include_once '../BO/cadastrouserBO.php';
	

    if($_POST["acao"] == "RealizarLogin") {
	    if(!empty($_POST["txtUsuario"]) && !empty($_POST["txtSenha"])){
            $usuario = $_POST["txtUsuario"];
            //echo "<script> alert('".$usuario."'); </script>";
            
            $tipo_userv = verificaUserBO($usuario);

            if($tipo_userv->rowCount() > 0){
                while($registro = $tipo_userv->fetch(PDO::FETCH_OBJ)) {

                    if($registro->tipo_user == 'A') {

                    $usuario = $_POST["txtUsuario"];
                    $senha = $_POST["txtSenha"];
                    $tipo_user = "A";

                    session_start();

                    loginBO($usuario, $senha, $tipo_user);

                } else if($registro->tipo_user == 'P') {

                    $usuario = $_POST["txtUsuario"];
                    $senha = $_POST["txtSenha"];
                    $tipo_user = "P";

                    session_start();

                    loginBO($usuario, $senha, $tipo_user);

                
                 } else {
                    echo "<script> alert('Preencha todos os campos'); </script>";
                    echo "<script> window.history.back()</script>";
                
                }

               
                }
            
            }
  
        }

    }


            if ($_POST["acao"] == "Sair") {
                session_start();
                        unset($_SESSION["id_user"]);
                        unset($_SESSION["usuario"]);
                        unset($_SESSION["senha"]);
                session_destroy();

                echo "<script> alert('Deslogado'); </script>";
                echo '<meta http-equiv = refresh content= "0; url = ../index.php">';

            }
?>