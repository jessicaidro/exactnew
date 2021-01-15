<?php
    require_once('../util/conexao.php');

$conn = conectar();

    function loginDAO($usuario, $senha){
        global $conn;

        try {
            $verificaUsuario = $conn->prepare("SELECT tipo_user, usuario, senha FROM usuarios where usuario = ? and senha = ?");
            $verificaUsuario->bindValue(1, $usuario);
            $verificaUsuario->bindValue(2, $senha);
            $verificaUsuario->execute();

            if($verificaUsuario->rowCount() == 1) {
                while($us = $verificaUsuario->fetch(PDO::FETCH_OBJ)){
                if($us->tipo_user == "A"){
                    $verifica = $conn->query("SELECT id_user, usuario, senha FROM usuarios where usuario = '$usuario' and senha = '$senha'");
                    $verifica->execute();
                    if($verifica->rowCount() == 1) {
                    while($user = $verifica->fetch(PDO::FETCH_OBJ)){                        
                            // session_start();
                            $_SESSION["id_user"] = $user->id_user;
                            $_SESSION["usuario"] = $user->usuario;
                            $_SESSION["senha"] = $user->senha;
                            echo "<script> alert('Login efetuado com sucesso'); </script>";
                            echo '<meta http-equiv = refresh content = "0; url = ../paginas/painelaluno.php">';
                    }
                    } 
                    else {
                        echo "<script> alert('Não existe usuário'); </script>";
                    }
                } 
                
                if($us->tipo_user == "P"){
                    $verifica = $conn->query("SELECT * FROM usuarios where usuario = '$usuario' and senha = '$senha'");
                    $verifica->execute();
                    if($verifica->rowCount() == 1) {
                        while($user = $verifica->fetch(PDO::FETCH_OBJ)){
                            $_SESSION["id_user"] = $user->id_user;
                            $_SESSION["usuario"] = $user->usuario;
                            $_SESSION["senha"] = $user->senha;
                            echo "<script> alert('Login efetuado com sucesso'); </script>";
                            echo '<meta http-equiv = refresh content = "0; url = ../paginas/painelprofessor.php">';
                        }                           
                    } 
                    else {
                        echo "<script> alert('Não existe usuário');</script>";
                    }
                }   
            } 
        }
        else {
                echo "<script> alert('Email ou senha errada!'); </script>";
                echo "<script> window.history.back(); </script>";
            }
            } catch (Exception $e) {
                echo "Erro cadastrarUserDAO: " . $e;
        }
    }
?>