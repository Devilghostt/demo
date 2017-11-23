<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class TipoArticulo extends Model
{
    protected $table = 'tipo_articulos';
    protected $fillable =['descripcion','estado'];
    //
    public function articulos(){
        return $this->hasMany('App\Models\Articulo');
    }
}
