<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class TipoNovedad extends Model
{
    protected $table = 'tipo_novedads';
    protected $fillable =['descripcion','estado'];
    //
    public function novedads(){
        return $this->hasMany('App\Models\Novedad');
    }
}
