<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioPublicacionEvento extends Model
{
    protected $table = 'usuario_publicacion_eventos';
    protected $fillable =['usuarios_id','publicacion_eventos_id','tipo_respuesta_eventos_id'];
    //
    public function tipo_respuesta_eventos(){
        return $this->belongsTo('App\Models\TipoRespuestaEvento');
    }
}
