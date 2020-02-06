<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
  public $primaryKey = "id_provincia";
  public $timestamps = false;
  public $guarded = ["id_provincia"];
}
