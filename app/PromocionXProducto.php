<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromocionXProducto extends Model
{
  public $table = "promociones_x_producto";
  public $primaryKey = "id_promocion_x_producto";
  public $timestamps = false;
  public $guarded = ["id_promocion_x_producto"];
}
