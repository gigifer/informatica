<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
  public $table = "detalle_de_facturas";
  public $primaryKey = "id_detalle_factura";
  public $timestamps = false;
  public $guarded = ["id_detalle_factura"];
}
