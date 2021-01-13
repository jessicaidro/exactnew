<?php
    include_once "../menu_lateral_aluno.php";
    
    session_start();
    $sessao = $_SESSION['id_user']; 

    if (!isset($_SESSION['id_user'])) {
        echo "<script> alert('Acesso negado'); </script>";
        echo '<meta http-equiv = refresh content= "0; url = ../paginas/index.php">';
}
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h4 style=> <strong> Painel Administrativo </strong> </h4>
        <div class="divider"></div>
        <br><br>
        <i class="material-icons grey-text v-middle">face</i> <a class="blue-text text-darken-4"> Jéssica Idro de Camargo </a> <a href="../Paginas/editarprofessor.php?id_user=<?php echo $_SESSION['id_user']; ?>"><i class="material-icons grey-text v-middle tiny">create</i></a> <br>
        <i class="material-icons grey-text v-middle">school</i> <a class="blue-text text-darken-4"> Análise e Desenvolvimento de Sistemas </a> <br><br>

        <h5 class="grey-text text-darken-4"> Trabalhos Publicados</h5>
        <div class="row">
        <?php
            include_once "../BO/trabalhoBO.php";
            $id_user = $_SESSION['id_user'];
            $buscarUser = buscarTrabalhoUserBO($id_user);
            while($r = $buscarUser->fetch(PDO::FETCH_OBJ)) {
              echo '<div class="col s12 m6 l3">
              <div class="card cardbox">
                <div class="card-content">
                  <h5 class="blue-text text-darken-1">'.$r->titulo.'</h5>
                  <p class="black-text">'.$r->descricao.'</p> <br>
                  <a class="waves-effect waves-light btn blue cardbox" href="../paginas/trabalhounico.php?id_trabalho='.$r->id_trabalho.'">Ver Trabalho</a>
                </div>
                </div>
              </div>';
             }       
          ?>
        </div>
    </div>
</div>

