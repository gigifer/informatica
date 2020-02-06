<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
  public $table = "paises";
  public $primaryKey = "id_pais";
  public $timestamps = false;
  public $guarded = ["id_pais"];
}
