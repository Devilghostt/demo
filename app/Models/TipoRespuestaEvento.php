<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoRespuestaEvento extends Model
{
    protected $table = 'tipo_respuesta_eventos';
    protected $fillable =['descripcion','estado'];
    //
    public function usuario_publicacion_eventos(){
        return $this->hasMany('App\Models\UsuarioPublicacionEvento');
    }
}
