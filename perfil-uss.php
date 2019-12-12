<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Righteous&display=swap" rel="stylesheet">
        <title>Panel de usuario</title>
        <script src="https://kit.fontawesome.com/acf02b5d89.js" crossorigin="anonymous"></script>
      </head>
      <body class="container-fluid">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <?php include ("header.php") ?>
<section id="perfil">

  <div class="container columns">

	<div class="row">
    <div class="col-left sidebar f-left col-sm-12 col-md-4 col-lg-4 fondo">
      <div class="block block-account">
<div class="block-title f-rigth">
<strong><span>Mi cuenta</span></strong>
</div>
<div class="block-content">
<ul>
<li class="imagen"><a href="editar-uss.php"><img src="img/perfil.png" alt="perfil"></a></li>
<li><a href="editar-uss.php">Información de Cuenta</a><br></li>
<li><a href="editar-uss.php">Libreta de Direcciones</a><br></li>
<li><a href="pedidos.php">Mis pedidos</a><br></li>
<li><a href="editar-uss.php">Carrito de compras</a><br></li>
</ul>
</div>
</div>  </div>
    <div class="col-sm-12 col-md-8 col-lg-8 f-right fondo">
      <h1>Mi panel de control</h1>
      <h2>Gracias por registrarse en Mapache!.</h2>
      <div class="welcome-msg">
        <p class="hello"><strong>Hola, //Nombre de usuario//:</strong><br>
      Desde aqui podés ver la actividad reciente en tu cuenta y actualizar la información de tu cuenta.</p>

          </div>
            <h2>Información de Cuenta</h2>
          <div class="box-content">
              <p>
                  Nombre de usuario: Mapache admins<br>
                  Email: email@mapache.com<br>
                  <a href="editar-uss.php"><button>Cambiar Contraseña</button></a><br>
              </p>
          </div>
          <div class="box-content">
              <p> Direcion de envio: Salta 352 <br>
                  Barrio Localidad Provincia<br>
                  <a href="editar-uss.php"><button>Cambiar direccion</button><br></p>
          </div>
        </div>

  </div>

  </div>

</section>

<?php include ("footer.php") ?>
  </body>

</html>
