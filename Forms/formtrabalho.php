<?php
  include_once "../BO/trabalhoBO.php";

if($_POST["acao"] == "CadastrarTrabalhoAluno") {
    if(!empty($_POST["txtTitulo"]) && !empty($_POST["txtCategoria"]) && !empty($_POST["txtAno"])  && !empty($_POST["txtDescricao"]) && isset($_POST['txtTipoArquivo']) && $_FILES['txtArquivo']['size'] > 0)  {

      session_start();

      $diretorioArquivo = rand(15487,1045646);
      $id_user = $_SESSION['id_user'];
      $titulo = $_POST['txtTitulo'];
      $id_categoria = $_POST["txtCategoria"]; 
			move_uploaded_file($_FILES['txtArquivo']['tmp_name'], '../pdf/'.$diretorioArquivo.'.pdf');
      $ano = $_POST["txtAno"]; 
      $descricao = $_POST["txtDescricao"]; 
      $tipo_trabalho = $_POST['txtTipoArquivo'];
      $data = date('Y/m/d');

      cadastrarTrabalhoBO($id_user, $titulo, $id_categoria, $diretorioArquivo, $ano, $descricao, $tipo_trabalho, $data);
      echo "<script> window.location.href=\"../paginas/trabalhosaluno.php\";</script>";

    } else {
      echo "<script> alert('Preencha os campos necessários'); <a href='../paginas/trabalhos.php'>VOLTAR</a> </script>";
    }
  }

  if($_POST["acao"] == "CadastrarTrabalhoProfessor") {
    if(!empty($_POST["txtTitulo"]) && !empty($_POST["txtCategoria"]) && !empty($_POST["txtAno"])  && !empty($_POST["txtDescricao"]) && isset($_POST['txtTipoArquivo']) && $_FILES['txtArquivo']['size'] > 0)  {

      session_start();

      $diretorioArquivo = rand(15487,1045646);
      $id_user = $_SESSION['id_user'];
      $titulo = $_POST['txtTitulo'];
      $id_categoria = $_POST["txtCategoria"]; 
			move_uploaded_file($_FILES['txtArquivo']['tmp_name'], '../pdf/'.$diretorioArquivo.'.pdf');
      $ano = $_POST["txtAno"]; 
      $descricao = $_POST["txtDescricao"]; 
      $tipo_trabalho = $_POST['txtTipoArquivo'];
      $data = date('Y/m/d');

      cadastrarTrabalhoBO($id_user, $titulo, $id_categoria, $diretorioArquivo, $ano, $descricao, $tipo_trabalho, $data);
      echo "<script> window.location.href=\"../paginas/trabalhos.php\";</script>";

    } else {
      echo "<script> alert('Preencha os campos necessários'); <a href='../paginas/trabalhos.php'>VOLTAR</a> </script>";
    }
  }

  ?>
