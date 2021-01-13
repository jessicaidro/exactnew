<?php
  include_once "../z_top.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos os Trabalhos - EXACT</title>
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col s12">
        <h5>Todos trabalhos</h5>
        <div class="row">
          <?php
            include_once "../BO/trabalhoBO.php";
            $buscarInicio = buscarTodosTrabalhosBO();
            while($r = $buscarInicio->fetch(PDO::FETCH_OBJ)) {
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
    </div>
</body>
</html>


<?php
  include_once "../z_footer.php";
?>