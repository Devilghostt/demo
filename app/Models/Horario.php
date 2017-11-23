<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'horarios';
    protected $fillable =['fechaInicio','fechaFin','horaInicio','horaFin',
        'numeroCupos','cuposListaEspera','instructor'];
    //
    public function capacitacions(){
        return $this->belongsToMany('App\Models\Capacitacion');
    }
}
