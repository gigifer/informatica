<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermisoXUsuario extends Model
{
  public $table = "permisos_x_usuarios";
  public $primaryKey = "id_permiso_x_usuario";
  public $timestamps = false;
  public $guarded = ["id_permiso_x_usuario"];
}
