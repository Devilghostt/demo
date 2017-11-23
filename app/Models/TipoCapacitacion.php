<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoCapacitacion extends Model
{
    protected $table = 'tipo_capacitacions';
    protected $fillable =['Descripcion','estado'];
    //
    public function capacitacions(){
        return $this->hasMany('App\Models\Capacitacion');
    }
}
