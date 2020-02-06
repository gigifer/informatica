<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaPago extends Model
{
  public $table = "formas_de_pago";
  public $primaryKey = "id_forma_de_pago";
  public $timestamps = false;
  public $guarded = ["id_forma_de_pago"];
}
