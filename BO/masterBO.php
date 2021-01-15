<?php   
	include_once "../DAO/masterDAO.php";

$conn = conectar();

function totalUserAlunoBO() {
    return totalUserAlunoDAO();
}

function totalUserProfessorBO() {
    return totalUserProfessorDAO();
}

function totalTCCBO() {
    return totalTCCDAO();
}

function totalArtigoBO() {
    return totalArtigoDAO();
}
?>