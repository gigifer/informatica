<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
  public $table = "tipos_de_productos";
  public $primaryKey = "id_tipo_de_producto";
  public $timestamps = false;
  public $guarded = ["id_tipo_de_producto"];
}
