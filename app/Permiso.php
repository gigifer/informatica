<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
  public $primaryKey = "id_permiso";
  public $timestamps = false;
  public $guarded = ["id_permiso"];
}
