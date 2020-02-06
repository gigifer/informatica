<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
  public $primaryKey = "id_envio";
  public $timestamps = false;
  public $guarded = ["id_envio"];
}
