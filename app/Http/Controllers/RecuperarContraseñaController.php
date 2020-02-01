<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecuperarContraseñaController extends Controller
{
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
          return view("login");
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
        return view("recuperar-contraseña");
      }
    }
}
