<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    protected $table = 'transaccions';
    protected $fillable =['FechaSalida','FechaDevolucion','HoraSalida','HoraDevolucion',
        'TotalAlquiler','Generado','tipo_transaccions_id','estado_transaccions_id','users_id'];
    //
    public function estado_transaccions(){
        return $this->belongsTo('App\Models\EstadoTransaccion');
    }
    public function tipo_transaccions(){
        return $this->belongsTo('App\Models\TipoTransaccion');
    }
    public function articulos(){
        return $this->belongsToMany('App\Models\Articulo');
    }
    public function users(){
        return $this->belongsTo('App\Models\User');
    }
}
