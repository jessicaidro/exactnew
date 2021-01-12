<?php
  include_once "../BO/trabalhoBO.php";

if($_POST["acao"] == "CadastrarTrabalho") {
    if(!empty($_POST["txtTitulo"]) && !empty($_POST["txtCategoria"]) && !empty($_POST["txtAno"])  && !empty($_POST["txtDescricao"])) {

      session_start();

      $id_user = $_SESSION['id_user'];
      $titulo = $_POST['txtTitulo'];
      $id_categoria = $_POST["txtCategoria"]; 
      $diretorioArquivo = rand(15487,1045646);
			move_uploaded_file($_FILES["txtArquivo"]['tmp_name'], '../pdf/'.$diretorioArquivo.'.pdf');
      $ano = $_POST["txtAno"]; 
      $descricao = $_POST["txtDescricao"]; 

      cadastrarTrabalhoBO($id_user, $titulo, $id_categoria, $diretorioArquivo, $ano, $descricao);
      echo "<script> window.location.href=\"../paginas/trabalhos.php\";</script>";

    } else {
      echo "<script> alert('Preencha os campos necessários'); <a href='../paginas/trabalhos.php'>VOLTAR</a> </script>";
    }
  }
  ?>
