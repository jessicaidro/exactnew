<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>EXACT - IFSP-BTV</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>
   <div class="row grey lighten-4">
   <a href="#" class="brand-logo center hide-on-small-only"><img height="20" src="../img/logo-exact.png"></a>
     <a href="#" class="right waves-effect waves-teal btn-flat"><i class="tiny left material-icons">person</i> Bem vind@! Usuário</a>
      <div class="col s3">
      <ul id="slide-out" class="sidenav sidenav-fixed  blue-grey">
      <li><a href="../paginas/inicio.php" class="white-text"><i class="material-icons white-text white-text">home</i><B>Ínicio</B></a></li>
              <li><a class="subheader white-text">Cadastros</a></li>
              <li><a class="white-text" href=""><i class="material-icons white-text">people</i>Aluno</a></li>
              <li><a class="white-text" href=""><i class="material-icons white-text">people</i>Professor</a></li>
              <li><a class="white-text" href="#"><i class="material-icons white-text">attach_file</i>Trabalhos</a></li>
              <li><a class="white-text" href="../paginas/cadastrocategoria.php"><i class="material-icons white-text">book</i>Categoria</a></li>
              <li><a class="white-text" href="../paginas/cadastrocurso.php"><i class="material-icons white-text">list</i>Curso</a></li>
              <li><a class="white-text" class="subheader white-text">Relatórios</a></li>
              <li><a class="white-text" href=""><i class="material-icons white-text">people</i>Nome Relatorio</a></li>
              <li><a class="white-text" href=""><i class="material-icons white-text">people</i>Nome relatorio</a></li>
              <li><a class="white-text" href=""><i class="material-icons white-text">people</i>Nome relatorio</a></li>
            </ul>
    </ul>
    <a href="#" data-target="slide-out" class="sidenav-trigger valign-wrapper"><i class="material-icons blue-text">menu</i></a>
      </div>
    </div>


  <script src="js/materialize.min.js"></script>
  <script src="../js/materialize.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    const elemsDropdown = document.querySelectorAll(".dropdown-trigger");
    const instancesDropdown = M.Dropdown.init(elemsDropdown, {
      coverTrigger: false
    });

    elemsSidenav = document.querySelectorAll(".sidenav");
    const instances  = M.Sidenav.init(elemsSidenav);
  </script>
</body>
</html>
    
  