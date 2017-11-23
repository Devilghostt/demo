<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
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
        return $this->hasMany('App\Models\Transccion');
    }
    protected $hidden = [
        'password','remember_token',
    ];
}
