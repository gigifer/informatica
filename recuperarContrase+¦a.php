<?php
session_start();

define('__ROOT__', dirname(__FILE__));
require_once(__ROOT__.'/clases/'.'conexion.php');
require_once(__ROOT__.'/clases/'.'usuarios.php');

$errores = [];

function buscarEmail(){
  global $errores;
  global $pdo;
  if(!empty($_POST["email"])){
    $query = 'SELECT * FROM usuarios WHERE (email = :email)';
    $values = array(':email' => $_POST["email"]);

    try{
      $res = $pdo->prepare($query);
      $res->execute($values);
    }
    catch (PDOException $e){
      throw new Exception('Error al buscar nombre en la base de datos');
    }

    $fila = $res->fetch(PDO::FETCH_ASSOC);

    if (is_array($fila))
    {
      return true;
    }

    return false;
  }
}

  function validarContrasenia(){
    global $pdo;
    $patronContrasenia = "/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/";
    if($_POST){
      //validar contraseña con expresion regular
      if(!preg_match($patronContrasenia, $_POST["contrasenia"])){
        global $errores;
        $errores[] = "La contraseña debe tener entre 8 y 16 caracteres, al menos un número, al menos una minúscula y al menos una mayúscula.
                      NO puede tener otros símbolos.";
        $contrasenia = "";
      }

      //validar que las contraseñas sean iguales
      elseif($_POST["contrasenia"] != $_POST["repetirContrasenia"]){
        global $errores;
        $errores[] = "Las contraseñas no coinciden";
      }

      else{
        $contrasenia = $_POST["contrasenia"];
        $query = 'UPDATE usuarios SET contrasenia = :contrasenia WHERE email = :email';
        $hash = password_hash($contrasenia, PASSWORD_DEFAULT);
        $values = array(':email' => $_POST["email"], ':contrasenia' => $hash);

        try{
          $res = $pdo->prepare($query);
          $res->execute($values);
        }
        catch (PDOException $e){
          throw new Exception('Error mientras se registraba el usuario en la base de datos');
        }
        header("location: login.php");
        exit;

      }

    }
  }

  function mostrarErrores(){
    global $errores;
    echo '<br>';
    //imprimo errores en un alerta o en un succes
    if($errores>0){
      for ($i=0; $i < count($errores); $i++) {
        echo '<div class="alert alert-danger" role="alert">' . $errores[$i] . '</div>';
      }
    }
  }



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
    <title>Recuperar contraseña- Mapache</title>
  </head>
  <body>
    <!--header-->
    <?php include 'header.php' ?>
    <!--formulario de registro-->
    <div class="container-fluid">
      <div class="container">
        <div class="todo">
        <h2>Recuperá tu cuenta</h2><br>
        <div class="centrar col-lg-6">
          <div class="cuadro">
            <form class="" action="recuperarContraseña.php" method="POST">
              <?php buscarEmail();
                    validarContrasenia();
               ?>
              <div class="row">
                  <div class="col-12  ">
                    <input type="email" class="form-control" name="email" placeholder="E-mail">
                  </div>
                  <div class="col-12  ">
                    <input type="password" class="form-control" name="contrasenia"  placeholder="Nueva contraseña">
                  </div>
                  <div class="col-12  ">
                    <input type="password" class="form-control" name="repetirContrasenia" placeholder="Confirmar nueva contraseña">
                  </div>

              </div>
            </div>


            <?php
            mostrarErrores();
            ?>
            <div class="boton">
              <button type="submit" class="btn">Cambiar contraseña</button>
              </form>
            </div>

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
