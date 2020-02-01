<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
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
        return view("registro");
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
            return view("index");
          }
      }
    }
}
