<?php
session_start();

define('__ROOT__', dirname(__FILE__));
require_once(__ROOT__.'/clases/'.'conexion.php');
require_once(__ROOT__.'/clases/'.'usuarios.php');

$errores = [];

  function verificarLogin(){
    global $errores;
    global $pdo;
    if(!empty($_POST["usuario"]) && !empty($_POST["contrasenia"])){
      $query = 'SELECT * FROM usuarios WHERE (nombre_usuario = :nombre_usuario)';
	    $values = array(':nombre_usuario' => $_POST["usuario"]);

	    try{
        $res = $pdo->prepare($query);
		    $res->execute($values);
      }
	    catch (PDOException $e){
        throw new Exception('Error al buscar nombre en la base de datos');
      }

	    $row = $res->fetch(PDO::FETCH_ASSOC);

      if (is_array($row)){
        if (password_verify($_POST["contrasenia"], $row['contrasenia'])){

          $_SESSION["usuario"] = $row["nombre_usuario"];
          if(isset($_POST["recordarme"])){
            setcookie("nombreUsuario", $row["contrasenia"], time() + 60 * 60 * 24 * 7);
          }
          header("location: index.php");
          exit;
        }
      }
      else{
        $errores = ["usuario o contraseña incorrectos"];
    }
    /*else{
        $errores[] = "El nombre de usuario y la contraseña son campos obligatorios";
    }*/
  }


  }


  function mostrarErrores(){
    global $errores;

    //imprimo errores en un alerta o en un succes
    if($errores>0){

      for ($i=0; $i < count($errores); $i++) {
        echo '<br>';
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
    <script src="https://kit.fontawesome.com/acf02b5d89.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/l.css">
    <link rel="stylesheet" href="style.css">

    <title>Login - Mapache</title>
  </head>
  <body>
    <?php include 'header.php' ?>
    <div class="container-fluid">
      <div class="container">
        <div class="todo">


            <h2>Ingresá con tu usuario y contraseña</h2><br>
            <div class="centrar col-lg-6">
              <div class="cuadro">
                <form class="" action="login.php" method="POST">
                  <?php verificarLogin(); ?>
                  <div class="row">
                    <div class="col-12">
                      <input type="text" name="usuario" class="form-control" placeholder="Usuario">
                    </div>
                    <div class="col-12">
                      <input type="password" name="contrasenia" class="form-control" placeholder="Contraseña">
                    </div>
                  </div>
              </div>
            <?php
            mostrarErrores();
            ?>

            <div class="boton">
                <input type="checkbox" name="recordarme" value="">Recordarme
                <button type="submit" class="btn">Ingresar</button>
            </div>
              </form>

            <div class="cuenta col-xs-5 col-lg-6">
            <a href="#"><p>Olvidé mi contraseña</p></a>
            <a href="registro.php"><p>No tengo cuenta</p></a>
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
