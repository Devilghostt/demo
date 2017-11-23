<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $table = 'asistencias';
    protected $fillable =['fechaClase','motivo','snAsistio','capacitacions_id'];
    //
    public function capacitacions(){
        return $this->belongsTo('App\Models\Capacitacion');
    }
}
