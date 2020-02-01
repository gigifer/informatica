<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilUsuarioController extends Controller
{
  function recuperarFoto(){
    $query = $pdo->prepare("select foto from usuarios");
    $query->execute();
    $resultado = $query->fetch(PDO::FETCH_ASSOC);
    $recuperarFoto = base64_encode($resultado['foto']);
    return $recuperarFoto;

  }

}
