<?php
session_start();
if(isset($_SESSION["usuario"])){
?>

<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="carritostyle.css">
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Righteous&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Gelasio&display=swap" rel="stylesheet">
      <title>Mapache</title>
      <script src="https://kit.fontawesome.com/acf02b5d89.js" crossorigin="anonymous"></script>
    </head>

    <body>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <?php include ("header.php") ?>

      <div class="container py-5 cuadro">
        <div class="row contenedorCarro">
          <div class="fuenteCarro font-size-2 col-12">
            <h2>
              Descripción de tu producto:
            </h2>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4 cajasCarro">
            <div class="fuenteCarro">
              Producto
            </div>
            <img id="productoCarro" src="/img/fotoCarrito.jpg" alt="foto monitor">
            <p>
              Monitor Samsung S24F350FH
              LED 23.5" negro 110V/220V (Bivolt)
            </p>
            <ul>
              <li>
                Pantalla led
              </li>
              <li>
                Tamaño: 23.5"
              </li>
              <li>
                Resolución de 1920px-1080px
              </li>
              <li>
                Brillo 250cd/m²
              </li>
              <li>
                Conexiones del monitor: D-Sub, HDMI
              </li>
            </ul>
          </div>
          <div class="col-sm-12 col-md-2 col-lg-2 cajasCarro fuenteCarro">
            Precio
            <div class="text-center">
              $12,799
            </div>
          </div>
          <div class="col-sm-12 col-md-2 col-lg-2 cajasCarro fuenteCarro">
            Cantidad
            <div class="input-group-qty">
  						<input type="text" name="cart_quantity[]" value="1" class="form-control input-cart-qty"
              size="1" id="quantityProduct_11263" onkeyup="actualizarCantidad('11263')"><input type="hidden"
              name="products_id[]" value="11263">
  					</div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4 cajasCarro cajaTotal">
            <div class="fuenteCarro text-center">
              Resumen de tu compra
            </div>
            <br>
            <div class=" text-center">
              Subtotal: $12799
            </div>
            <br>
            <div class="text-center">
              Total: $12799
            </div>
            <br>
            <div class="text-center">
              <button type="button" class="btn colorVioleta" name="button">Pagar</button>
              <button type="button" class="btn colorVioleta" name="button">Agregar Producto</button>
          </div>
          </div>
        </div>
      </div>
      <?php
      }
      else {
      header("Location: logout.php");
      }
      ?>
      <?php include ("footer.php") ?>

    </body>
  </html>
