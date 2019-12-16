<?php
      //conservar datos ingresados por el usuario (persistencia)
      $usuario = "";
      $email = "";
      $contraseña = "";
      $repetirContraseña = "";


    if(($_POST)){

      $usuario = $_POST["usuario"];
      $email = $_POST["email"];
      $contraseña = $_POST["contraseña"];
      $repetirContraseña = $_POST["repetirContraseña"];
    }

    //validacion de campos
    function validar(){

      //expresion regular para comprobar que la contraseña tenga ciertos caracteres
      $patronContraseña = "/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/";

      //array de errores
      $errores = array();

      //validar que venga por post
      if($_POST){

      //validar que el usuario tenga mas de 8 caracteres
      if( strlen($_POST["usuario"]) < 8 ){
        $errores[] = "El campo del usuario debe tener más de 8 carácteres";
      }

      //validar el formato de email
      if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
        $errores[] = "El email no tiene el formato correcto";
      }

      //validar contraseña con expresion regular
      if(!preg_match($patronContraseña, $_POST["contraseña"])){
        $errores[] = "La contraseña debe tener entre 8 y 16 caracteres, al menos un número, al menos una minúscula y al menos una mayúscula.
                      NO puede tener otros símbolos.";
      }

      //validar que las contraseñas sean iguales
      if($_POST["contraseña"] != $_POST["repetirContraseña"]){
        $errores[] = "Las contraseñas no coinciden";
      }

      //imprimo errores en un alerta o en un succes
      if($errores>0){
        echo "<br>";
        for ($i=0; $i < count($errores); $i++) {
          echo '<div class="alert alert-danger" role="alert">' . $errores[$i] . '</div>';
        }
      }
      else{
        echo '<br><div class="alert alert-success" role="alert">Sus datos se han ingresado correctamente!</div>';
      }
    }
  }


//}

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
    <link rel="stylesheet" href="css/r.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/acf02b5d89.js" crossorigin="anonymous"></script>
    <title>Registro - Mapache</title>
  </head>
  <body>
    <!--header-->
    <?php include 'header.php' ?>
    <!--formulario de registro-->
    <div class="container-fluid">
      <div class="container">
        <div class="todo">
        <h2>Completá tus datos</h2><br>
        <div class="cuadro">
          <form class="" action="registro.php" method="POST">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                  <input type="text" class="form-control" name="usuario" value="<?= $usuario?>" placeholder="Usuario">
                </div>
                <div class="col-xs-12 col-md-6">
                  <input type="password" class="form-control" name="contraseña" value="<?= $contraseña?>" placeholder="Contraseña">
                </div>
                <div class="col-xs-12 col-md-6">
                  <input type="email" class="form-control" name="email" value="<?= $email?>" placeholder="E-mail">
                </div>
                <div class="col-xs-12 col-md-6">
                  <input type="password" class="form-control" name="repetirContraseña" value="<?= $repetirContraseña?>" placeholder="Repita la contraseña">
                </div>
                <div class="col-md-4">
                  <button type="button" class="btn btn-secondary">Subí tu foto de perfil</button>
                </div>
            </div>
        </div>
        <?php validar();?>
        <div class="boton">
          <input type="checkbox" name="recordarme" value="">Recordarme<br>
          <button type="submit" class="btn">Crear Cuenta</button>
          </form>
        </div>

        </div>
      </div>
    </div>
    <!--footer-->
    <?php include 'footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
