<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaXProducto extends Model
{
  public $table = "categorias_x_productos";
  public $primaryKey = "id_categoria_x_producto";
  public $timestamps = false;
  public $guarded = ["id_categoria_x_producto"];
}
