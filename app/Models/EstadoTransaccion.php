<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class EstadoTransaccion extends Model
{
    protected $table = 'estado_transaccions';
    protected $fillable =['Descripcion','Estado'];
    //
    public function transaccions(){
        return $this->hasMany('App\Models\Transaccion');
    }
}
