<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
    protected $table = 'capacitacions';
    protected $fillable =['nombreCapacitacion','descripcionCapacitacion','duracion',
        'imagenCapacitacion','URLubicacion','tipo_capacitacions_id','estado_capacitacions_id','users_id'];
    //
    public function asistencias(){
        return $this->hasMany('App\Models\Asistencia');
    }
    public function estado_capacitacions(){
        return $this->belongsTo('App\Models\EstadoCapacitacion');
    }
    public function inscripcions(){
        return $this->hasMany('App\Models\Inscripcion');
    }
    public function horarios(){
        return $this->belongsToMany('App\Models\Horario');
    }
    public function users(){
        return $this->belongsTo('App\Models\User');
    }
    public function tipo_capacitacions(){
        return $this->belongsTo('App\Models\TipoCapacitacion');
    }
}
