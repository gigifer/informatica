<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoXEnvio extends Model
{
  public $table = "estados_x_envios";
  public $primaryKey = "id_estado_x_envio";
  public $timestamps = false;
  public $guarded = ["id_estado_x_envio"];
}
