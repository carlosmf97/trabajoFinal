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
        <script src="../Vista/js/hierarchy-select.min.js"></script>
        <link rel="stylesheet" href="../Vista/css/hierarchy-select.min.css">
        <script src="../Vista/js/botonBuscar.js"></script>
    </head>
    <body>
    <?php include_once('../Vista/headerGlobal.php'); ?>
      <article>
      <div class="container container-fluid">
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
  </body>
</html>