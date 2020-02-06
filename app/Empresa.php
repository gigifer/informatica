<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
  public $primaryKey = "id_empresa";
  public $timestamps = false;
  public $guarded = ["id_empresa"];
}
