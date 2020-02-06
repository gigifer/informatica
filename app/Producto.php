<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  public $primaryKey = "cod_producto";
  public $timestamps = false;
  public $guarded = ["cod_producto"];
}
