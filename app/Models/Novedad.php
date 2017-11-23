<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Novedad extends Model
{
    protected $table = 'novedades';
    protected $fillable =['Descripcion','Estado','tipo_novedads_id','transaccions_id'];
    //
    public function tipo_novedads(){
        return $this->belongsTo('App\Models\TipoNovedad');
    }
}
