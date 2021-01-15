<?php
  include_once "../z_top.php";
?>

<div id="index-banner" class="parallax-container">
  <div class="section no-pad-bot">
   <div class="container">
     <br><br>
      <h1 class="header center blue-text text-darken-4">EXACT</h1>
    <div class="row center">
      <h5 class="header col s12 light blue-text text-darken-4">Biblioteca Online de TCC e Artigos Científicos</h5>
    </div>
    <br><br>
    </div>
  </div>
  <div class="parallax"><img src="../img/slide01.png" alt="Unsplashed background img 1">
  </div>

</div>


<div class="container">
   <div class="section">

<!--   Intruções section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-text text-darken-4"><i class="material-icons medium">plus_one</i></h2>
            <h5 class="center">Realize seu cadastro</h5>
           
          </div>
        </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center blue-text text-darken-4"><i class="material-icons medium">insert_drive_file</i></h2>
          <h5 class="center">Anexe seu trabalho</h5>
         
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center blue-text text-darken-4"><i class="material-icons medium">pageview</i></h2>
          <h5 class="center">E todos poderão visualizar</h5>
          
        </div>
      </div>

    </div>
    </div>
  </div>
  
<!--   Trabalhos section   -->
    <div class="container">
      <div class="row">
        <h5 class="header col s12 brown-text text-darken-1">De olho nas novidades! <div class="chip v-middle red white-text"><i class="tiny material-icons white-text v-middle">favorite</i><strong>NOVO</strong></div></h5>
        <div class="divider"></div>
       

        <div class="row">
        <?php
            include_once "../BO/trabalhoBO.php";
            $buscarInicio = buscarTrabalhoInicialBO();
            while($r = $buscarInicio->fetch(PDO::FETCH_OBJ)) {
              echo '<div class="col s12 m6 l3">
              <div class="card cardbox small">
                <div class="card-content">
                <span class="badge blue darken-4 white-text buttonbox right-align">'.$r->NomeCategoria.'</span> <br>
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
        <div class="center">
          <a class="waves-effect waves-light btn buttonbox blue darken-4" href="../paginas/todostrabalhos.php"><i class="material-icons tiny v-middle">book</i>VER TODOS OS TRABALHOS</a>
        </div>
        <br>
        <div class="divider"></div>
        <div class="center">
        <br>
        <i class="material-icons center grey-text text-lighten-4"> book </i><i class="material-icons center grey-text text-lighten-4"> search </i><i class="material-icons center grey-text text-lighten-4"> book </i><i class="material-icons center grey-text text-lighten-4"> search </i><i class="material-icons center grey-text text-lighten-4"> book </i><i class="material-icons center grey-text text-lighten-4"> search </i>
        </div>
        <h5 class="center"> Uma frase legal aqui de alguma coisa loca bem loca mesmo - <strong>Jéssica Idro 2021 </strong></h5>
   
        </div>
      </div>

        
  <br>
<?php
  include_once "../z_footer.php";
?>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
     $(document).ready(function(){
    $('.parallax').parallax();
  });

    $("#toast").click(function(){
      M.toast({html: 'I am a toast!'})
    });
  </script>
  </body>
</html>
