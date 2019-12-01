<?php
$faq=["¿Cómo me registro en Mapache?", "¿Cómo me logueo en Mapache?", "¿Cómo agrego productos a mi carro?",
      "¿Cuales son las formas de pago?", "¿Dónde está mi pedido?", "¿Cuál es la política de reembolsos/cambios?",
    "¿Cómo puedo contactarme con un representante de la empresa?", "¿Cuál es el costo de envío?"];

$registro="En la esquina superior derecha de la página usted podrá encontrar el link 'registro' que al
hacerle click lo va a reedireccionar a la pagina de registro. Hecho esto usted debe completar los campos
y una vez completados hacer click al boton 'registrar' para ser parte de Mapache";

$login="Para poder loguearse en nuestra página primero debe estar registrado, una vez hecho esto usted
ya está en condiciones de loguearse. Primero damos click al enlace ubicado en la esquina superior derecha
de la página que está junto al link de registro, una vez reedireccionado debe completar con su nombre
de usuario y la contraseña que haya elegido al registrarse, hecho esto usted ya estaría logueado";

$carro="Junto a cada producto que usted desea ver en la pagina se encontrará con el dibujo de un carro
de supermercado el cual al hacerle click automaticamente está agregando un producto a su carro de compras,
una vez seleccionados los productos que usted desea comprar puede ver su carro haciendo click en el dibujo
del carro que se encuentra al lado de 'registro' y 'login'. Una vez dentro del carro usted puede
seleccionar la forma de pago y adjuntar información personal";

$pago="usted puede seleccionar distintas formas de pago: tarjeta de débito, tarjeta de crédito, Rapipago,
Pagofácil.";

$pedido="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

$politica="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

$contacto="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

$costo="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

$respuestas=[$registro, $login, $carro, $pago, $pedido, $politica, $contacto, $costo];
 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/faq.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <title>FAQ - Mapache</title>
  </head>
  <body>
    <!-- header -->

    <!-- faq -->
    <div class="container-fluid">
        <div class="row">
          <div class="col-3">
            <ul class="nav flex-column">
              <?php for ($i=0; $i < count($faq); $i++) :?>
                <li class="nav-item">
                  <a class="nav-link" href="#Preguntas<?= $i?>"><?= $faq[$i]; ?></a>
                <?php endfor; ?>
            </ul>
          </div>

          <div class="container">
            <?php for ($i=0; $i < count($respuestas); $i++) :?>
              <div class="preguntas" id="Preguntas<?=$i?>">
                <h3>
                  <?= $faq[$i] . "</br>";?>
                </h3>
                <p>
                  <?= $respuestas[$i] . "</br> </br>"; ?>
                </p>
              </div>
            <?php endfor; ?>
          </div>

        </div>
    </div>

    <!-- footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
