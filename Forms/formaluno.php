<?php
  include_once "../Util/conexao.php";
  include_once "../BO/cadastroalunoBO.php";
  include_once "../BO/cadastrocategoriaBO.php";
  include_once "../BO/cadastrouserBO.php";


 /* if($_POST['acao'] === "cadastrar") {
    if(!empty($_POST['nome']) ||
       !empty($_POST['usuario']) ||
       !empty($_POST['senha']) ||
       !empty($_POST['email']) ||
       !empty($_POST['curso']) ||
       !empty($_POST['ano'])) {
      $cadastrar = cadastrarAlunoBO($_POST['nome'], $_POST['usuario'], $_POST['senha'], $_POST['email'], $_POST['curso'], $_POST['ano']);
    }
  }*/

  if ($_POST['acao'] === "cadastrar") {
    foreach ($_POST as $key => $value) {
      if(
        $key != 'txtNome'
        && $key != 'txtUsuario'
        && $key != 'txtSenha'
        && $key != 'txtEmail'
        && $key != 'txtCurso'
        && $key != 'txtAno'
        && (empty($value)
        || is_null($value)
        || $value == "")) {
        $retorno['mensagem'] = "Preencha todas as informações";
        $retorno['code'] = 400;
        echo json_encode($retorno);
        return;
}
    }

    $cadastrar = cadastroalunoBO(
      $_POST['txtNome'],
      $_POST['txtUsuario'],
      $_POST['txtSenha'],
      $_POST['txtEmail'],
      $_POST['txtCurso'],
      $_POST['txtAno']);

      if($cadastrar != true){
        $retorno['mensagem'] = "Ocorreu um erro ao cadastrar";
        $retorno['code'] = 500;
        echo json_encode($retorno);
        return;
      }else{
        $retorno['mensagem'] = "Cadastrado com sucesso";
        $retorno['code'] = 200;
         echo json_encode($retorno);
        }
    
  }
  ?>
