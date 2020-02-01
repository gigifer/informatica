<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
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
            return view("index");
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
        return view("login");
      }
    }
}
