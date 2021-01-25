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
<body class="body">
  <main>
    <div class="container">
      <div class="row">
      <div class="col s1 m6 l12">
        <?php
        include '../BO/trabalhoBO.php';

          $id_trabalho = $_GET['id_trabalho'];
          
          $resultado = buscarTrabalhoUnicoBO($id_trabalho);
          if($resultado->rowCount() > 0 ) {
            $contador = contaVisitasBO($id_trabalho);
            while($r = $resultado->fetch(PDO::FETCH_OBJ)) {
              echo '
                <h4>'.$r->titulo.'</h4>
                <a class="blue-text text-darken-4"> <strong>Publicado por: </strong>'.$r->nome.'</a>  <br>
                <a class="blue-text text-darken-4"> <strong>Categoria: </strong> '.$r->NomeCategoria.'</a> <br><br>
                <blockquote>'.$r->descricao.'</blockquote>
                <div class="left-align">
                  <a class="waves-effect waves-light btn buttonbox blue darken-4" href="../pdf/'.$r->diretorioArquivo.'.pdf">Ver em outra guia</a> 
                  </div>
                  <div class="center">
              <iframe width="560" height="800" src="../pdf/'.$r->diretorioArquivo.'.pdf"></iframe>
              </div>';
            }
          }
        ?>
      </div>
      </div> </div>
        </main>
</body>
</html>


<?php
  include_once "../z_footer.php";
?>