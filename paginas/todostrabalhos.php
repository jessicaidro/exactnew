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
<body class="body">
    <main>
    <div class="container">
      <div class="row">
        <div class="col s12">
        <h5>Todos trabalhos</h5>
          
          <?php
            include "../BO/trabalhoBO.php";
            include "../BO/cadastrocategoriaBO.php";
            $buscaTodasCategorias = buscarCategoriaBO();
              if($buscaTodasCategorias->rowCount() > 0){
                while($todascat = $buscaTodasCategorias->fetch(PDO::FETCH_OBJ)){
                  $idtodascat = $todascat->id_categoria;
                $buscarCategorias = buscarTipoCategoriaBO($idtodascat);
                  if($buscarCategorias->rowCount() > 0){
                    while($cat = $buscarCategorias->fetch(PDO::FETCH_OBJ)){                  
                    echo '<div class="row">   
                      <ul class="collapsible z-depth-0 semborder"> 
                        <li>
                          <div class="collapsible-header z-depth-0 semborder">
                            <p> <i class="material-icons v-middle">format_list_bulleted</i>'.$cat->NomeCategoria.'</p>
                            </div> 
                            <div class="collapsible-body z-depth-0 semborder">';
                    $idcat = $cat->id_categoria;
                      $buscarInicio = buscarTodosTrabalhosBO($idcat);
                      if($buscarInicio->rowCount() > 0){
                        while($r = $buscarInicio->fetch(PDO::FETCH_OBJ)) {
                          echo '
                          <div class="col s12 m6 l3">
                          <div class="card cardbox medium hoverable">
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
                      }
                      echo '
                      
                  </div></div>
                  </li>
                  </ul>';
                  
                  }
              }
            }
            }
            
                 
          ?>
        </div>
      </div>
    </div>
          </main>
</body>
</html>

<script>
$(document).ready(function(){
    $('.collapsible').collapsible();
  });
</script>
<?php
  include_once "../z_footer.php";
?>