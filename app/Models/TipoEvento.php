<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoEvento extends Model
{
    protected $table = 'tipo_eventos';
    protected $fillable =['descripcion','estado'];
    //
    public function publicacion_eventos(){
        return $this->hasMany('App\Models\PublicacionEvento');
    }
}
