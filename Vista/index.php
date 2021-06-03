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
            text-align: center;
          }
          a{
            z-index: 5;
          }
          .carousel-inner img {
            width:50%;
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
      
        <div id="carrusel" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#carrusel" data-slide-to="0" class="active"></li>
            <li data-target="#carrusel" data-slide-to="1"></li>
          </ul>

          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../imagenesSubidas/bmw-320d.jpg" alt="Ferrari">
              <div class="carousel-caption">
                <h3>BMW 320d</h3>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../imagenesSubidas/opel-corsa-16.jpg" alt="Chicago">
              <div class="carousel-caption">
                <h3>Opel Corsa 1.6 dCi</h3>
              </div>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#carrusel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#carrusel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>

        </div>
      </article>
      <article>
      <div class="container container-fluid">
      <h3>Últimos articulos</h3>
      <div class="row">
      <?php
        for($i=0; $i<sizeof($coches); $i++){
          echo "<div class='col-sm-4 py-4'>";
          echo "<div class='card card-body h-100'>";
          echo "<img src='../imagenesSubidas/".$coches[$i]['pathImage']."' height='219px' width='308px' class='card-img-top' alt='...'>";
          echo "<h4 class='card-title'>".$coches[$i]['modelo']."</h4>";
          echo "<p class='card-text'>".$coches[$i]['precio']."€</p>";
          echo "<p class='card-text'>".$coches[$i]['descripcion']."</p>";
          echo "<p class='card-text'>".$coches[$i]['modelo']."</p>";
          echo "<p class='card-text'>".$coches[$i]['fecha-registro']."</p>";
          echo "<button class='btn btn-primary' onclick='guardarFavoritos(`".$coches[$i]['id']."`,`".$datos['id']."`)'>Guardar en favoritos</button>";
          echo "<button class='btn btn-success' onclick='mandarMail(`".$coches[$i]['id']."`)'>Contactar con el vendedor</button>";
          echo "<button class='btn btn-danger' onclick='window.open(`http://www.".$coches[$i]['marca'].".com`,`_blank`)' >Web del Fabricante</button>";
          echo "</div>";
          echo "</div>";
        }
        ?>
        </div>
        </div>
      </article>
      <br><br>
      <footer>
      <div class="container">
        <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
      </div>
      </footer>
    </body>
</html>