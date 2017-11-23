<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $table = 'tipo_documentos';
    protected $fillable =['descripcion'];
    //
    public function personas(){
        return $this->hasMany('App\Models\Persona');
    }
}
