<?php
    include_once "../menu_lateral_aluno.php";
    
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
        <h4 style=> <strong> Painel Administrativo </strong> </h4>
        <div class="divider"></div>
        <br><br>
        <i class="material-icons grey-text v-middle">face</i> <a class="blue-text text-darken-4">  </a> <a href="../Paginas/editaraluno.php?id_user=<?php echo $_SESSION['id_user']; ?>"><i class="material-icons grey-text v-middle tiny">create</i></a> <br>
        <i class="material-icons grey-text v-middle">school</i> <a class="blue-text text-darken-4">  </a> <br><br>

        <h5 class="grey-text text-darken-4"> Trabalhos Publicados</h5>
        <div class="row">
        <?php
            include_once "../BO/trabalhoBO.php";
            $id_user = $_SESSION['id_user'];
            $buscarUser = buscarTrabalhoUserBO($id_user);
            while($r = $buscarUser->fetch(PDO::FETCH_OBJ)) {
              echo '<div class="card cardbox small">
                <div class="card-content">
                  <h5 class="blue-text text-darken-1">'.$r->titulo.'</h5>
                  <p class="black-text">'.$r->descricao.'</p> <br>
                  <div class="card-action">
                  <a class="waves-effect waves-light btn white blue-text text-darken-4 cardbox z-depth-0 semborder" href="../paginas/trabalhounico.php?id_trabalho='.$r->id_trabalho.'">Ver Trabalho <i class="material-icons v-middle tiny">chevron_right</i></a>
        </div>
        </div>
                </div>
              </div>';
             }       
          ?>
        </div>
    </div>
</div>

