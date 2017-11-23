<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';
    protected $fillable = ['primernombre', 'primerapellido', 'direccion', 'documento', 'correo',
        'fechadenacimiento', 'telefono', 'tipo_documentos_id', 'generos_id', 'users_id','segundonombre','segundoapellido','afiliados_id'];

    //
    public function tipo_documentos(){
        return $this->belongsTo('App\Models\TipoDocumento');
    }
        public function afiliados(){
            return $this->belongsTo('App\Models\Afiliado');
        }
    public function generos(){
        return $this->belongsTo('App\Models\Genero');
    }
    public function users(){
        return $this->hasOne('App\Models\User');
    }

}
