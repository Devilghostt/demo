<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicacionEvento extends Model
{
    protected $table = 'publicacion_eventos';
    protected $fillable =['fechaPublicacion','fechaInicioPublicacion','horaInicionPublicacion',
        'fechaFinalPublicacion','horaFinalPublicacion','descripcion','fechaEvento','horaInicio',
        'horaFin','totalAsistencia','imagenPublicacion','nombrePublicacion','tipo_eventos_id','users_id'];
    //
    public function tipo_eventos(){
        return $this->belongsTo('App\Models\TipoEvento');
    }
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

}
