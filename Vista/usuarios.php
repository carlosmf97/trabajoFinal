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
        <script src="../Vista/js/usuarios.js"></script>
        <style>
          #carrusel{
            height:400px;
          }

          .carousel-inner img {
            width: 100%;
            height: 400px;
          }
        </style>
        <script src="../Vista/js/hierarchy-select.min.js"></script>
        <link rel="stylesheet" href="../Vista/css/hierarchy-select.min.css">
        <script src="../Vista/js/botonBuscar.js"></script>
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
              <th></th>
            </tr>
            <?php
              for($i=0; $i<sizeof($usuarios);$i++){
                echo '<tr>';
                echo '<td>'.$usuarios[$i]['usuario'].'</td>';
                echo '<td>'.$usuarios[$i]['correo'].'</td>';
                echo '<td>'.$usuarios[$i]['nombre'].'</td>';
                echo '<td>'.$usuarios[$i]['fechaNacimiento'].'</td>';
                echo '<td><button type="submit" class="btn btn-success" class="botonMostrar" onclick="cargarCollapse('.$usuarios[$i]['id'].')">Mostrar Coches</button></td>';
                echo '<td>
                <form class="form" action="../Controlador/borrarUsuario.php">
                <input type="hidden" name="idUsuario" value="'.$usuarios[$i]["id"].'">
                <button type="submit" class="btn btn-danger">Borrar Usuario</button>
                </form></td>';
                echo '</tr>';
              }
            ?>
        </table>
          <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <table class="table" id="tablaRellena">               
                </table>
            </div>
          </div>
      </div>
      </article>
      </body></html>
      