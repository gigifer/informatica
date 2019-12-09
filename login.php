<?php
$placeholder = ["Usuario", "Contraseña"];
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
   <link rel="stylesheet" href="css/login.css">
   <link rel="stylesheet" href="style.css">
   <script src="https://kit.fontawesome.com/acf02b5d89.js" crossorigin="anonymous"></script>
   <title>Login - Mapache</title>
 </head>
 <body>
   <?php include 'header.php' ?>
   <div class="container-fluid">
     <div class="container">
       <div class="todo">


       <h2>Ingresá tu Usuario y tu contraseña</h2><br>
       <div class="row">
         <div class="cuadro">
           <?php for ($i=0; $i < count($placeholder); $i++) :?>
             <div class="col-12">
               <input type="text" name="" value="" placeholder="<?= $placeholder[$i]; ?>">
             </div>
           <?php endfor; ?>

       </div>


      </div>
      <div class="boton">
        <input type="checkbox" name="" value="">Recordar <br>
        <button type="button" class="btn btn-primary">Ingresar</button>
        <a href="#">Olvidé mi contraseña</a><br>

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
