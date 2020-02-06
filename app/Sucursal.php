<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
  public $table = "sucursales";
  public $primaryKey = "id_sucursal";
  public $timestamps = false;
  public $guarded = ["id_sucursal"];
}
