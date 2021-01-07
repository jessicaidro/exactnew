<?php
    require_once('../util/conexao.php');

$conn = conectar();

    function loginDAO($usuario, $senha, $tipo_user){
        global $conn;

        try {
            $verificaUsuario = $conn->prepare("SELECT * FROM usuarios where usuario = ? and senha = ?");
            $verificaUsuario->bindVaçue(1, $usuario);
            $verificaUsuario->bindValue(2, $senha);
            $verificaUsuario->execute();

            if($verificaUsuario->rowCount() == 1) {
                if($tipo_user == "A"){
                    $verifica = $conn->query("SELECT * FROM usuarios where email = '$usuario' and senha = '$senha'");
                    $verifica->execute();

                    while($user = $verifica->fetch(PDO::FETCH_OBJ)){
                        $_SESSION["id_user"] = $user->idusuario;
                        $_SESSION["email"] = $user->email;
                        $_SESSION["senha"] = $user->senha;

                        echo $user->rowCount();

                        if($user->rowCount() > 0) {
                            echo "<script> alert('Login efetuado com sucesso')</script>";
                            echo '<meta http-equiv = refresh content = "0; url = ../index.php">';
                        } else {
                            echo "<script> alert('Não existe usuário')</script>";
                        }
                    }
                }
            } else {
                echo "<script> altert('Email ou senha errada!')</script>";
            }
            }catch (Exception $e) {
                echo "Erro cadastrarUserDAO: " . $e;
        }
    }
?>