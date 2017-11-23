<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Afiliado extends Model
{
    protected $table = 'afiliados';
    protected $fillable = ['afiliado'];

    public function personas(){
        return $this->hasMany('App\Models\Persona');
    }
}

