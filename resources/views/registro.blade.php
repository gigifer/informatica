<!-- REVISAR BIEN DONDE LLAMAR A LAS FUNCIONES-->


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/r.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/acf02b5d89.js" crossorigin="anonymous"></script>
    <title>Registro - Mapache</title>
  </head>
  <body>
    <!--header-->
    @include("header")
    <!--formulario de registro-->
    <div class="container-fluid">
      <div class="container">
        <div class="todo">
        <h2>Completá tus datos</h2><br>
        <div class="centrar col-lg-6">
          <div class="cuadro">
            <?php
            validarUsuario();
            validarEmail();
            validarContrasenia();
            validarArchivos();
            registrarUsuario();
            ?>
            <form class="" action="registro" method="POST" enctype="multipart/form-data">
              <div class="row">
                  <div class="col-12  ">
                    <!-- <input type="text" class="form-control" name="usuario"  placeholder="Usuario"> -->
                    <input type="text" class="form-control" name="usuario" placeholder="Usuario">
                  </div>
                  <div class="col-12  ">
                    <input type="email" class="form-control" name="email" placeholder="E-mail">
                  </div>
                  <div class="col-12  ">
                    <input type="password" class="form-control" name="contrasenia" placeholder="Contraseña">
                  </div>
                  <div class="col-12  ">
                    <input type="password" class="form-control" name="repetirContrasenia" placeholder="Confirmar contraseña">
                  </div>
                  <div class=" col-12 ">
                    <div class="imagenPerfil">
                      <label for="fotoPerfil">Adjuntá tu foto de perfil</label>
                      <input type="file" id="fotoPerfil" name="imagen">
                    </div>
                  </div>
              </div>
            </div>
            <div class="boton">
                <input type="checkbox" name="recordarme" value="">Recordarme
            </div>


            <?php
            mostrarErrores();
            ?>
            <div class="boton">
              <button type="submit" class="btn">Crear Cuenta</button>
              </form>
            </div>

            <div class="cuenta col-xs-5 col-lg-6">
            <a href="login.php"><p>Ya tengo cuenta</p></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--footer-->
    @include("footer")
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
