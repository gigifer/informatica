<?php
session_start();
?>

<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="css/r.css">
      <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Righteous&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
      <title>Mi perfil</title>
      <script src="https://kit.fontawesome.com/acf02b5d89.js" crossorigin="anonymous"></script>
    </head>

    <body>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <?php include ("header.php") ?>

      <div class="container cuadro">
      <div class="contenedorCarro row">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <h2> Mi perfil </h2>
        </div>
        <div class="col-ms-12 col-md-3 col-lg-3 mensajes">
          <a style="color: #893ba0; font-size: 25px" href="#">Mensajes</a>
        </div>
        <div class="col-ms-12 col-md-3 col-lg-3 misCompras">
          <a style="color: #893ba0; font-size: 25px;" href="#">Mis compras</a>
        </div>
      </div>

      <div class="datosUsuario row">
        <div class="col-ms-12 col-md-4 col-lg-4 fotoUsuario">
          <i class="fas fa-portrait"></i><br><br>
        <div class="boton">  <button type="submit" class="btn">Editar Perfil</button>        </div>
        </div>
        <div class="col-ms-12 col-md-8 col-lg-8 formularioDatos">
          <form>
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="apellido">Apellido</label>
              <input type="text" class="form-control" id="formGroupExampleInput2">
            </div>
            <div class="form-group">
              <label for="nacimiento">Fecha de nacimiento</label>
              <input type="text" class="form-control" id="formGroupExampleInput2">
            </div>
            <div class="form-group">
              <label for="direccion">Dirección</label>
              <input type="text" class="form-control" id="formGroupExampleInput2">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="formGroupExampleInput2">
            </div>
          </form>
        </div>
        </div>
      </div>

      <?php include ("footer.php") ?>
        </body>
      </html>
