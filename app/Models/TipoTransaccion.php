<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class TipoTransaccion extends Model
{
    protected $table = 'tipo_transaccions';
    protected $fillable =['Descripcion','Estado'];
    //
    public function transaccions(){
        return $this->hasMany('App\Models\Transaccion');
    }
}
