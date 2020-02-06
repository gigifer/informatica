<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
  public $primaryKey = "nro_factura";
  public $timestamps = false;
  public $guarded = ["nro_factura"];
}
