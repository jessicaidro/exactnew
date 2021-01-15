<?php
    include_once "../menu_lateral_master.php";
    
    session_start();
    $sessao = $_SESSION['id_user']; 

    if (!isset($_SESSION['id_user'])) {
        echo "<script> alert('Acesso negado'); </script>";
        echo '<meta http-equiv = refresh content= "0; url = ../paginas/index.php">';
}
?>
<link rel="stylesheet" href="../style.css">

<div class="row">
    <div class="col s12 m6 push-m3">
        <h4> <strong> Painel Administrativo </strong> </h4>
        <div class="divider"></div>
        <br><br>
        <div class="row">
        <div class="col s12 m5">
          <div class="card-panel cardbox small">
            <div class="card-content">
              <p>Total de Aluno</p>
              <h3 class="blue-text text-darken-1">
              <?php
                include_once "../BO/masterBO.php";
                  $totalUserAluno = totalUserAlunoBO();
                  $r = $totalUserAluno->fetchColumn();

                  echo "".$r."";
              ?>
              </h3>
          </div>
        </div>
        </div>
        <div class="col s12 m5">
        <div class="card-panel cardbox small">
            <div class="card-content">
              <p>Total de Professor</p>
              <h3 class="blue-text text-darken-1">
              <?php
                include_once "../BO/masterBO.php";
                  $totalUserProfessor = totalUserProfessorBO();
                  $r = $totalUserProfessor->fetchColumn();

                  echo "".$r."";
              ?>
              </h3>
          </div>
        </div>
        </div>

        <div class="col s12 m5">
        <div class="card-panel cardbox small">
            <div class="card-content">
              <p>Total de TCC</p>
              <h3 class="blue-text text-darken-1">
              <?php
                include_once "../BO/masterBO.php";
                  $totalTCCBO = totalTCCBO();
                  $r = $totalTCCBO->fetchColumn();

                  echo "".$r."";
              ?>
              </h3>
          </div>
        </div>
        </div>

        <div class="col s12 m5">
        <div class="card-panel cardbox small">
            <div class="card-content">
              <p>Total de Artigos</p>
              <h3 class="blue-text text-darken-1">
              <?php
                include_once "../BO/masterBO.php";
                  $totalArtigoBO = totalArtigoBO();
                  $r = $totalArtigoBO->fetchColumn();

                  echo "".$r."";
              ?>
              </h3>
          </div>
        </div>
      </div>
        </div></div></div>
    </div>
