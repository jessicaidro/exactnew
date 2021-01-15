<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>EXACT - IFSP-BTV</title>

  <!-- CSS  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="../js/materialize.min.js"></script>

  <link rel="stylesheet" href="../style.css">

</head>
<body>
  <div class="center">
    <img src="../img/logo.png" height="50px">
  </div>

    <form action="../Forms/formlogin.php" id="formLogin" method="POST">
      <div class="container">
        <div class="row">
        <div class="col s12 m4 l2"></div>
          <div class="col s12 m4 l8">
            <div class="card cardbox ">
            <div class="card-content">
                <h5 class="blue-text text-darken-4 center">Login</h5> 
                
                <label for="txtUsuario" class="blue-text text-darken-4">Usuário *</label>
                <input type="text" name="txtUsuario" id="txtUsuario" data-length="60" class="blue-text text-darken-4" placeholder="Insira seu nome de usuário"/>

                <label for="txtSenha" class="blue-text text-darken-4">Senha *</label>
                <input type="password" name="txtSenha" id="txtSenha" data-length="60" class="blue-text text-darken-4" placeholder="Digite a senha"/>
                <div class="center">
                  <a name="acao" value="RealizarLogin" class="btn waves-effect waves-light blue darken-4 white-text center-align" type="submit">Login</a>
                </div>
                <br>
                <a class="blue-text text-darken-4 center" href="../paginas/tipouser.php"><h5>Ou cadastre-se aqui!</h5></a> 
          </div>
          <div class="col s12 m4 l2"></div>
        </div>
      </div>
    </div>
      </div>
    </form>

</body>
</html>