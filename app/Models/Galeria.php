<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $table = 'galerias';
    protected $fillable =['URLimagen','URLubicacion','Descripcion'];
    //
}
