<?php
    include_once "../menu_lateral_professor.php";
    
    session_start();
    $sessao = $_SESSION['id_user']; 

    if (!isset($_SESSION['id_user'])) {
        echo "<script> alert('Acesso negado'); </script>";
        echo '<meta http-equiv = refresh content= "0; url = ../index.php">';
}
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h4 style=> <strong> Painel Administrativo </strong> </h4>
        <div class="divider"></div>
        <br><br>
        <i class="material-icons grey-text v-middle">face</i> <a class="blue-text text-darken-4"> Jéssica Idro de Camargo </a> <a href="../Paginas/editarprofessor.php?id_user=<?php echo $_SESSION['id_user']; ?>" class="btn btn-success"><i class="material-icons grey-text v-middle tiny">create</i></a> <br>
        <i class="material-icons grey-text v-middle">school</i> <a class="blue-text text-darken-4"> Análise e Desenvolvimento de Sistemas </a> <br><br>

        <h5 class="grey-text text-darken-4"> Trabalhos Publicados</h5>
        <div class="card grey lighten-4 gap-card">
            <div class="card-content grey-text">
                <span class="card-title blue-text text-darken-4">Nome do Trabalho </span> 
                <span class="new badge" data-badge-caption="">CATEGORIA</span>
                <p class="grey-text text-darken-4">Descrição do trabalho trabalho trabalho trabalho trabalho trabalho trabalho trabalho</p>
                <p class="texto"> Ano de Conclusão: <strong>2021</strong></p>
            </div>
        </div>
        <div class="card grey lighten-4 gap-card">
            <div class="card-content grey-text">
                <span class="card-title blue-text text-darken-4">Nome do Trabalho </span> 
                <span class="new badge" data-badge-caption="">CATEGORIA</span>
                <p class="grey-text text-darken-4">Descrição do trabalho trabalho trabalho trabalho trabalho trabalho trabalho trabalho</p>
                <p class="texto"> Ano de Conclusão: <strong>2021</strong></p>
            </div>
        </div>
    </div>
</div>

<a class="sair"> <i class="material-icons v-middle black-text">clear</i> Sair</a>
