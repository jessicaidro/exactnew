<?php 
include_once "../DAO/loginDAO.php";

function loginBO ($usuario, $senha, $tipo_user){
    return loginDAO($usuario, $senha, $tipo_user);
}
?>