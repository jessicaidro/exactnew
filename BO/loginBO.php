<?php 
include_once "../DAO/loginDAO.php";

function loginBO($usuario, $senha){
    return loginDAO($usuario, $senha);
}
?>