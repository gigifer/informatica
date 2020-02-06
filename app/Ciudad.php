<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
  public $table = "ciudades";
  public $primaryKey = "id_ciudad";
  public $timestamps = false;
  public $guarded = ["id_ciudad"];
}
