<!DOCTYPE html>
<html>
    <head>
        <title>Inicio</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
          #carrusel{
            height:400px;
          }

          .carousel-inner img {
            width: 100%;
            height: 400px;
          }
        </style>
    </head>
    <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="../index.php">WallaCoches</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item" id="inicio">
                <a class="nav-link" href="../index.php">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Controlador/cargarPerfil.php">Mi perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Vista/contacto.php">Contacto</a>
              </li>
              <?php
                if($_SESSION['tipo']=="0"){
                  echo '<li class="nav-tiem">';
                  echo '<a class="nav-link" href="../Controlador/cargarUsuarios.php">Usuarios</a>';
                  echo '</li>';
                }
              ?>
            </ul>            
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
            <form class="form-inline my-2 my-lg-0" action="../Controlador/cerrarSesion.php" method="post">
              <button type="submit" class="btn btn-outline-danger">Cerrar Sesion</button>
            </form>
          </div>
        </nav>
      </header>
      <article>
      <div class="container">
        <form class="form-signin" action="../Controlador/guardarCambiosPerfil.php" method="post" autocomplete="off">
            <label for="usuario" class="sr-only">Nombre de Usuario</label>
            <input type="text" id="usuario" name="usuario" class="form-control" value=<?=$datos['usuario']?> required autofocus>
            <label for="usuario" class="sr-only">Correo Electrónico</label>
            <input type="text" id="correo" name="correo" class="form-control" value=<?=$datos['correo']?> required>
            <label for="nombre" class="sr-only">Nombre Completo</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value=<?=$datos['nombre']?> required>
            <label for="fechaNacimiento" class="sr-only">Fecha de Nacimiento</label>
            <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Guardar Cambios</button>
        </form>
      </div>
      </article>
      <script src="js/jquery-3.6.0.min.js"><script>
      <script src="js/botonBuscar.js"></script>
    </body>
</html>