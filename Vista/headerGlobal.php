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
              if(session_status()!=2){
                session_start();
              }
                if($_SESSION['tipo']=="0"){
                  echo '<li class="nav-tiem">';
                  echo '<a class="nav-link" href="../Controlador/cargarUsuarios.php">Usuarios</a>';
                  echo '</li>';
                }
              ?>
              <li class="nav-item">
                <a class="nav-link" href="../Vista/ayuda.php">Ayuda</a>
              </li>
            </ul>
            
            <form class="form-inline my-2 my-lg-0" action="../Controlador/cochesFavoritos.php" method="post">
              <button type="submit" class="btn btn-outline-success">Favoritos</button>
            </form>

            <form class="form-inline my-2 my-lg-0" action="../Controlador/cochesBuscados.php" autocomplete="off">
            <div class="dropdown hierarchy-select" id="example">
                    <div class="hs-searchbox">
                        <input type="text" id="busqueda" name="string" class="form-control" autocomplete="off">
                    </div>
                    <div id="resultadoBuscar" class="hs-menu-inner">
                    </div>  
            </div>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
            
            <form class="form-inline my-2 my-lg-0" action="../Controlador/cerrarSesion.php" method="post">
              <button type="submit" class="btn btn-outline-danger">Cerrar Sesion</button>
            </form>
          </div>
        </nav>
</header>