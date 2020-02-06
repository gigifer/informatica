<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  public $primaryKey = "id_usuario";
  public $timestamps = false;
  public $guarded = ["id_usuario"];
}
