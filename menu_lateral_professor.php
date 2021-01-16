<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>EXACT - IFSP-BTV</title>

  <!-- CSS  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="/style.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="js/materialize.min.js"></script>

<link rel="stylesheet" href="../style.css">

</head>
<body>
   <div class="row">
      <div class="col s3">
        <ul id="slide-out" class="sidenav sidenav-fixed  blue-grey">
        <li><a class="white-text center v-middle">Painel do Professor</a></li>
          <div class="divider"></div>
          <li><a href="../paginas/painelprofessor.php" class="white-text"><i class="material-icons white-text v-middle">home</i><B>Página Inicial</B></a></li>
          <li><a class="subheader white-text">Cadastros</a></li>
          <li><a class="white-text" href="../paginas/trabalhos.php"><i class="material-icons white-text v-middle">attach_file</i>Trabalhos</a></li>
          <li><form action="../Forms/formlogin.php" method="post" class="center">
                        <button class="btn btn-success middle v-middle blue darken-4" name="acao" value="Sair"><i class="material-icons v-middle">clear</i>Sair</button>
                        </form></li>
        </ul>

        <a href="#" data-target="slide-out" class="sidenav-trigger valign-wrapper"><i class="material-icons blue-text">menu</i></a>
      </div>
    </div>

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
    
  