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
        <nav>
          <div class="nav-wrapper blue darken-4">
            <a href="" class="right brand-logo white-text">Logo</a>
            
            <a href="" data-target="mobile-navbar" class="sidenav-trigger">
              <i class="material-icons">menu</i>
            </a>
            <ul id="navbar-items" class="left hide-on-med-and-down">
              <li class=""><a href="#" class="white-text">ínicio</a></li>
              <li class=""><a class="dropdown-trigger white-text" data-target="dropdown-menu" href="#">Cadastros <i class="material-icons right">arrow_drop_down</i></a></li>
              <li class=""><a href="#" class="white-text">Trabalhos</a></li>
            </ul>

            <ul id="dropdown-menu" class="dropdown-content">
              <li class=""><a href="" class="blue-text">Aluno</a></li>
              <li class=""><a href="" class="blue-text">Categoria</a></li>
              <li class=""><a href="" class="blue-text">Curso</a></li>
              <li class=""><a href="" class="blue-text">Professor</a></li>
            </ul>
          </div>
        </nav>

  <ul id="mobile-navbar" class="sidenav">

              <li><a href="#">ínicio</a></li>
              <li>Cadastros</li>
              <li><a href="#">Trabalhos</a></li>
              <li><a href="">Aluno</a></li>
              <li><a href="">Categoria</a></li>
              <li><a href="">Curso</a></li>
              <li><a href="">Professor</a></li>
            </ul>

  </ul>

  <script src="js/materialize.min.js"></script>
  <script src="../js/materialize.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    const elemsDropdown = document.querySelectorAll(".dropdown-trigger");
    const instancesDropdown = M.Dropdown.init(elemsDropdown, {
      coverTrigger: false
    });

    elemsSidenav = document.querySelectorAll(".sidenav");
    const instanceSidenav = M.Sidenav.init(elemsSidenav);
  </script>
</body>
</html>
    
  