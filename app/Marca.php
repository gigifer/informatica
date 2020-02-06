<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
  public $primaryKey = "id_marca";
  public $timestamps = false;
  public $guarded = ["id_marca"];
}
