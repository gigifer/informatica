<?php
session_start();

define('__ROOT__', dirname(__FILE__));
require_once(__ROOT__.'/clases/'.'conexion.php');
require_once(__ROOT__.'/clases/'.'usuarios.php');

$errores = array();
$usuario = "";
$email = "";
$contraseña = "";


  function validarUsuario(){
    $patronUsuario = "/^[a-z0-9_-]{8,16}$/";
    global $errores;
    if($_POST){
      //validar usuario con expresion regular
      if(!preg_match($patronUsuario, $_POST["usuario"])){
        $errores[] = "El nombre de usuario debe tener entre 8 y 16 carácteres, puede contener minúsculas, números, un guión bajo y/o guión medio";
        $usuario = "";
      }
      //validar que no exista el nombre de usuario y persistir el dato por si se quiere cambiar algo
      else{
        global $usuario;
        $gestor_usuarios = new Usuario();

        if ($gestor_usuarios->existeUsuario($_POST["usuario"])) {
          $errores[] = "El nombre de usuario ya existe";
          $usuario = "";
          return false;
        }
        else {
          $usuario = $_POST["usuario"];
        }
      }
    }
  }

  function validarEmail(){
    if($_POST){
      global $email;
      global $errores;
      //validar el formato de email, que no exista el email y persistir el dato por si se quiere cambiar algo
      if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == true){
        $gestor_usuarios = new Usuario();

        if ($gestor_usuarios->existeEmail($_POST["email"])) {
          $errores[] = "El email ya se encuentra registrado";
          $email = "";
          return false;
        }
          else{
            $email = $_POST["email"];
          }
      }
      else{
        $errores[] = "El email no tiene el formato correcto";
        $email = "";
      }
    }
  }

  function validarContrasenia(){
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

  function validarArchivos(){
    if($_FILES){
      global $errores;
      global $foto;
      //no tienen que haber errores registrados
      if (empty($errores)) {
        if (!empty($_FILES["imagen"]["name"])) {
          if ($_FILES["imagen"]["error"] != 0) {
            $errores[] = "La imagen de perfil no se ha subido correctamente";
          }
          else{
            $extension = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
            if ($extension != "jpg" && $extension != "jpeg" && $extension != "png") {
              $errores[] = "La imagen debe ser de tipo jpg, jpeg o png";
            }
            else{
              $gestor_usuarios = new Usuario();
              $imagen = $_FILES['imagen']['tmp_name'];
              $foto = addslashes(file_get_contents($imagen));

            }
          }
        }
      }
    }
  }

  function registrarUsuario(){
    if($_POST){
      global $errores;
      $usuario = new Usuario();
        //no tiene que haber errores (incluso al subir la foto de perfil)
        if(empty($errores)){
          try {
            $idNuevoUsuario = $usuario->nuevoUsuario($_POST["usuario"], $_POST["email"], $_POST["contrasenia"],$foto);
          } catch (Exception $e) {
            echo $e->getMessage();
            die();
          }
          $_SESSION["usuario"] = $_POST["usuario"];
          header("location: index.php");
          exit;

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
        <div class="centrar col-lg-6">
          <div class="cuadro">
            <?php
            validarUsuario();
            validarEmail();
            validarContrasenia();
            validarArchivos();
            registrarUsuario();
            ?>
            <form class="" action="registro.php" method="POST" enctype="multipart/form-data">
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
    <?php include 'footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
