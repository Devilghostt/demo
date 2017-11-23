<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable =['rol','usuario','password'];
    //
    public function menus(){
        return $this->hasOne('App\Models\Menu');
    }
    public function personas(){
        return $this->hasOne('App\Models\Persona');
    }
    public function publicacion_eventos(){
        return $this->belongsToMany('App\Models\PublicacionEvento');
    }
    public function inscripcions(){
        return $this->hasMany('App\Models\Inscripcion');
    }
    public function capacitacions(){
        return $this->hasMany('App\Models\Capacitacion');
    }
    public function transaccions(){
        return $this->hasMany('App\Models\Transaccion');
    }
}
