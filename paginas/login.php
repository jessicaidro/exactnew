<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="../style.css">
  <title>Login - E X A C T</title>
</head>
<body>
  <div class="center">
    <img src="../img/logo.png" height="50px">
  </div>

    <form action="../Forms/formlogin.php" id="formLogin" method="POST">
      <div class="container">
      <div class="login modal-content grey lighten-5">
      <h5 class="blue-text text-darken-4 center">Realizar Login</h5> 
      <label for="txtUsuario" class="blue-text text-darken-4">Usuário *</label>
      <input type="text" name="txtUsuario" id="txtUsuario" data-length="60" class="blue-text text-darken-4" placeholder="Insira seu nome de usuário"/>
  
      <label for="txtSenha" class="blue-text text-darken-4">Senha *</label>
      <input type="password" name="txtSenha" id="txtSenha" data-length="60" class="blue-text text-darken-4" placeholder="Digite a senha"/>
      <div class="center">
        <button name="acao" value="RealizarLogin" class="btn waves-effect waves-light blue darken-4 wjite-text" type="submit">Login</button>
      </div>
    </form>
    </div>  </div>
</body>
</html>