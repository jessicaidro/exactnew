<?php
  include_once "../z_top.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    
    <title>Todos os Trabalhos - EXACT</title>
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col s6 m6">
          <div class="center">
           <i class="material-icons large">book</i>
          </div>
        </div>

        <?php
        include '../BO/trabalhoBO.php';

          $id_trabalho = $_GET['id_trabalho'];
          
          $resultado = buscarTrabalhoUnicoBO($id_trabalho);
          if($resultado->rowCount() > 0 ) {
            while($r = $resultado->fetch(PDO::FETCH_OBJ)) {
              echo '<div class="col s6 m6 s2">
              <h3>'.$r->titulo.'</h3>
              <a class="blue-text text-darken-4"> <strong>Publicado por:</strong>'.$r->id_user.'</a>  <br>
              <a class="blue-text text-darken-4"> <strong>Categoria:</strong> '.$r->id_categoria.'</a> <br><br>
              <p>'.$r->descricao.'</p>
            </div>';
            }
          }
        ?>
      </div>
     <div class="divider"></div>
      <div class="row">
        <div class="col s12">
        <h5>Outros trabalhos</h5>
        <div class="row">
          <div class="col s12 m6 l3">
            <div class="card cardbox">
              <div class="card-content">
                <h5 class="blue-text text-darken-1">Título do Trabalho aqui</h5>
                <p class="black-text">Um descrição bem breve do trabalho aqui Um descrição bem breve do trabalho aqui.</p> <br>
                <a class="waves-effect waves-light btn cardbox grey lighten-5 blue-text text-darken-4">Ver Trabalho</a>
              </div>
            </div>
          </div>

          <div class="col s12 m6 l3">
            <div class="card cardbox">
              <div class="card-content">
                <h5 class="blue-text text-darken-1">Título do Trabalho aqui</h5>
                <p class="black-text">Um descrição bem breve do trabalho aqui Um descrição bem breve do trabalho aqui.</p> <br>
                <a class="waves-effect waves-light btn cardbox">Ver Trabalho</a>
              </div>
            </div>
          </div>

          <div class="col s12 m6 l3">
            <div class="card cardbox">
              <div class="card-content">
                <h5 class="blue-text text-darken-1">Título do Trabalho aqui</h5>
                <p class="black-text">Um descrição bem breve do trabalho aqui Um descrição bem breve do trabalho aqui.</p> <br>
                <a class="waves-effect waves-light btn cardbox">Ver Trabalho</a>
              </div>
            </div>
          </div>

          <div class="col s12 m6 l3">
            <div class="card cardbox">
              <div class="card-content">
                <h5 class="blue-text text-darken-1">Título do Trabalho aqui</h5>
                <p class="black-text">Um descrição bem breve do trabalho aqui Um descrição bem breve do trabalho aqui.</p> <br>
                <a class="waves-effect waves-light btn cardbox">Ver Trabalho</a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
</body>
</html>


<?php
  include_once "../z_footer.php";
?>