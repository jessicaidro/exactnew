<?php
  include_once "../BO/cadastrouserBO.php";

  if (!empty($_POST['txtCurso'])) {

    cadastrarCursoDAO($nome);
    include_once "../paginas/cadastrarcurso.php";

  }

    else {
      echo "Os campos devem ser preenchidos <br>";
    }

  ?>

  