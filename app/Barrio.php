<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{
    public $primaryKey = "id_barrio";
    public $timestamps = false;
    public $guarded = ["id_barrio"];
}
