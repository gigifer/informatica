<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
  public $primaryKey = "id_estado";
  public $timestamps = false;
  public $guarded = ["id_estado"];
}
