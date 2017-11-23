<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';
    protected $fillable = ['codigo','cantidad','nombre','observaciones','tamano','valoraArticulo',
        'estado','PrecioUnitarioAlquiler','descripcion','tipo_articulos_id'];
    //
    public function tipo_articulos(){
        return $this->belongsTo('App\Models\Tipo_Articulo');
    }
    public function transaccions(){
        return $this->belongsToMany('App\Models\Transaccion');
    }
}
