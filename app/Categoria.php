<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $primaryKey = "id_categoria";
    public $timestamps = false;
    public $guarded = ["id_categoria"];
}
