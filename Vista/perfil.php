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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
        <script src="../Vista/js/hierarchy-select.min.js"></script>
        <link rel="stylesheet" href="../Vista/css/hierarchy-select.min.css">
    </head>
    <body>
    <?php include_once('../Vista/headerGlobal.php'); ?>
      <article>
      <div class="container">
          <table class="table table-striped">
            <tr>
              <th>Nombre de Usuario</th>
              <th>Correo Electrónico</th>
              <th>Nombre Completo</th>
              <th>Fecha de Nacimiento</th>
              <th></th>
            </tr>
            <tr>
              <td><?= $datos['usuario']?></td>
              <td><?= $datos['correo']?></td>
              <td><?= $datos['nombre']?></td>
              <td><?= $datos['fechaNacimiento']?></td>
              <td><form action="editarPerfil.php" method="post">
                <button type="submit" class="btn btn-primary">Editar Perfil</button></form>
              </td>
            </tr>
          </table><br><br>
          <table class="table">
            <tr>
              <th>Modelo</th>
              <th>Caballos</th>
              <th>Descripción</th>
              <th>Precio</th>
              <th>Fecha de subida</th>
              <th></th>
            </tr>
            <?php
              for($i=0; $i<sizeof($coches);$i++){
                if(sizeof($coches[$i])!=0){
                  echo '<tr>';
                  echo '<td>'.$coches[$i][0]['modelo'].'</td>';
                  echo '<td>'.$coches[$i][0]['caballos'].'</td>';
                  echo '<td>'.$coches[$i][0]['descripcion'].'</td>';
                  echo '<td>'.$coches[$i][0]['precio'].'</td>';
                  echo '<td>'.$coches[$i][0]['fecha-registro'].'</td>';
                  echo '<td>
                  <form class="form" action="../Controlador/borrarCoche.php">
                  <input type="hidden" name="idCoche" value="'.$coches[$i][0]["id"].'">
                  <button type="submit" class="btn btn-outline-danger">Borrar Coche</button>
                  </form>';
                  echo '</tr>';
                }
              }
            ?>
          </table>
          <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Añadir Coche
          </button>
          <div class="collapse" id="collapseExample">
            <div class="card card-body">
              <form class="form" action="../Controlador/annadirCoche.php" autocomplete="off" method="post" enctype="multipart/form-data">
                <label for="exampleFormControlFile1">Imagen del Vehículo</label>
                <input type="file" class="form-control-file" name="imagen">
                <label for="marca" class="sr-only">Marca</label>
                <input type="text" id="marca" name="marca" class="form-control" placeholder="Marca del coche" required autofocus>
                <label for="usuario" class="sr-only">Modelo</label>
                <input type="text" id="modelo" name="modelo" class="form-control" placeholder="Modelo de coche" required>
                <label for="usuario" class="sr-only">Potencia</label>
                <input type="text" id="potencia" name="potencia" class="form-control" placeholder="Caballos del coche" required>
                <label for="usuario" class="sr-only">Descripcion</label>
                <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Descripción del coche" required>
                <label for="usuario" class="sr-only">Precio</label>
                <input type="number" min="5" max="150000" id="precio" name="precio" class="form-control" placeholder="Precio" required>
                <button type="submit" class="btn btn-success">Confirmar</button>
              </form>
            </div>
          </div>
          
      </div>
      </article>
      <script src="../Vista/js/jquery-3.6.0.min.js"><script>
      <script src="../Vista/js/botonBuscar.js"></script>
      </body>
      </html>