<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'generos';
    protected $fillable =['genero'];
    //
    public function personas(){
        return $this->hasMany('App\Models\Persona');
    }
}
