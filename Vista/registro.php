<!DOCTYPE html>
<html>
  <head>
    <title>Inicia Sesion</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
  <form class="form-signin" action="../Controlador/registrarUsuario.php" method="post" autocomplete="off">
    <label for="usuario" class="sr-only">Direccion de correo</label>
      <input type="text" id="usuario" name="correo" class="form-control" placeholder="Direccion de correo" required autofocus>
      <label for="usuario" class="sr-only">Nombre de Usuario</label>
      <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Nombre de usuario" required >
      <label for="pass" class="sr-only">Contraseña</label>
      <input type="password" id="pass" name="pass" class="form-control" placeholder="Contraseña" required>
      <label for="nombre" class="sr-only">Nombre</label>
      <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre completo" required>
      <label for="fechaNacimiento" class="sr-only">Fecha de Nacimiento</label>
      <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control" placeholder="Fecha de nacimiento" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
    </form>
  </body>
</html>