<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
  public $table = "promociones";
  public $primaryKey = "id_promocion";
  public $timestamps = false;
  public $guarded = ["id_promocion"];
}
