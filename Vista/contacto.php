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
        <script src="js/hierarchy-select.min.js"></script>
        <link rel="stylesheet" href="css/hierarchy-select.min.css">
        <script src="../Vista/js/botonBuscar.js"></script>
    </head>
    <body>
      <?php include_once('../Vista/headerGlobal.php'); ?>
      <article>
              <div class="container">
                    <div class="well well-sm">
                    <form class="form" method="post">
                        <fieldset>
                            <legend class="text-center header">Contacto</legend>
                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <input id="nombreContacto" name="nombreContacto" type="text" placeholder="Nombre" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input id="apellContacto" name="apellContacto" type="text" placeholder="Apellidos" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input id="email" name="email" type="text" placeholder="Dirección de correo" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input id="tlfn" name="tlfn" type="text" placeholder="Número de teléfono" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Introduce tu mensaje para nosotros aquí. Te contestaremos antes de 2 días laborales." rows="7"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
              </div>
          </div>
      </article>
      </body>
      </html>
