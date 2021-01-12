<?php
    require_once('../util/conexao.php');

$conn = conectar();

    function loginDAO($usuario, $senha, $tipo_user){
        global $conn;

        try {
            $verificaUsuario = $conn->prepare("SELECT * FROM usuarios where usuario = ? and senha = ? and tipo_user = ?");
            $verificaUsuario->bindValue(1, $usuario);
            $verificaUsuario->bindValue(2, $senha);
            $verificaUsuario->bindValue(3, $tipo_user);
            $verificaUsuario->execute();

            if($verificaUsuario->rowCount() == 1) {
                if($tipo_user == "A"){
                    $verifica = $conn->query("SELECT * FROM usuarios where usuario = '$usuario' and senha = '$senha'");
                    $verifica->execute();

                    while($user = $verifica->fetch(PDO::FETCH_OBJ)){
                        $_SESSION["id_user"] = $user->id_user;
                        $_SESSION["usuario"] = $user->usuario;
                        $_SESSION["senha"] = $user->senha;
                    }    
                                            
            
                        if($verifica->rowCount() > 0) {
                            echo "<script> M.toast({html: 'Login Efetuado com sucesso!'}) </script>";
                            echo '<meta http-equiv = refresh content = "0; url = ../paginas/painelaluno.php">';
                        } else {
                            echo "<script> alert('Não existe usuário');</script>";
                        }
                    
                } else if($tipo_user == "P"){
                $verifica = $conn->query("SELECT * FROM usuarios where usuario = '$usuario' and senha = '$senha'");
                $verifica->execute();

                while($user = $verifica->fetch(PDO::FETCH_OBJ)){
                    $_SESSION["id_user"] = $user->id_user;
                    $_SESSION["usuario"] = $user->usuario;
                    $_SESSION["senha"] = $user->senha;
                }    
                                        
                    if($verifica->rowCount() > 0) {
                        echo "<script> alert('Login efetuado com sucesso'); </script>";
                        echo '<meta http-equiv = refresh content = "0; url = ../paginas/painelprofessor.php">';
                    } else {
                        echo "<script> alert('Não existe usuário');</script>";
                    }
                
            } else {
                echo "<script> altert('Email ou senha errada!')</script>";
            }
    }
            } catch (Exception $e) {
                echo "Erro cadastrarUserDAO: " . $e;
        }
    }
?>