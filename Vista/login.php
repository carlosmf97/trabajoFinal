<!DOCTYPE html>
<html>
  <head>
    <title>Inicia Sesion</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../Vista/css/login.css">
    <script src="js/jquery-3.6.0.min.js"></script>    
  </head>

  <body class="text-center">
    <form class="form-signin" action="../Controlador/iniciarSesion.php" method="post" autocomplete="off">
      <h1 class="h3 mb-3 font-weight-normal">Por favor, inicia sesión</h1>
      <label for="usuario" class="sr-only">Nombre de Usuario</label>
      <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Nombre de usuario" required autofocus>
      <label for="pass" class="sr-only">Contraseña</label>
      <input type="password" id="pass" name="pass" class="form-control" placeholder="Contraseña" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" id="botonRecuerda" name="botonRecuerda" value="remember-me"> Recuérdame
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
    </form>
    <form class="form-signin" action="registro.php" method="post">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
    </form> 
  </body>
</html>

