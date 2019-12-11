<?php
$provincias = ["Buenos Aires", "Córdoba", "Santa Fe","San Luis"];
 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/acf02b5d89.js" crossorigin="anonymous"></script>
    <title>Contacto - Mapache</title>
  </head>
  <body>
    <?php include 'header.php' ?>
    <div class="container-fluid">
      <div class="container">
        <div class="dentro">
          <div class="row">
            <div class="cuadro">
              <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Apellido y Nombre</label>
                    <input type="password" class="form-control" id="inputPassword4">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Dirección</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="">
                </div>
                <div class="form-group">
                  <label for="inputAddress2">Teléfono</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">Ciudad</label>
                    <input type="text" class="form-control" id="inputCity">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputState">Provincia</label>
                    <select id="inputState" class="form-control" placeholder="Seleccione una opción">
                      <?php for ($i=0; $i < count($provincias); $i++) :?>
                      <option><?= $provincias[$i]; ?></option>
                      <?php endfor;?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Tu mensaje</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Mantenerme al tanto de las promociones
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
