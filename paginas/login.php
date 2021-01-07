<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="../js/materialize.min.js"></script>
  <title>Login - E X A C T</title>
</head>
<body>

<div class="container">
    <div class="col s7">
      <div class="card white">
        <div class="card-content white-text">
          <span class="card-title blue-text text-darken-4 center">Realizar Login</span>
          <form action="../Forms/formlogin.php" id="formLogin" method="POST">
            <div class="input-field col s6 center">
              <input type="text" name="txtUsuario" id="txtUsuario" data-length="60" placeholder="Insira seu nome de usuário"/>
              <label for="txtUsuario">Usuário *</label>
            </div>
					
            <div class="input-field col s6 center">
              <input type="password" name="txtSenha" id="txtSenha" data-length="60" placeholder="Digite a senha"/>
              <label for="txtSenha">Senha *</label>
            </div>

            <div class="center">
              <button name="acao" value="RealizarLogin" class="btn waves-effect waves-light blue darken-4" type="submit">Login</button>
            </div>
          </div>
          <p class="blue-text text-darken4">Esqueceu a senha?</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>