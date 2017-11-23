<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoCapacitacion extends Model
{
    protected $table = 'estado_capacitacions';
    protected $fillable =['Descripcion','estado'];
    //
    public function capacitacions(){
        return $this->hasMany('App\Models\Capacitacion');
    }
}
