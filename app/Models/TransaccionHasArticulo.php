<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class TransaccionHasArticulo extends Model
{
    protected $table = 'transaccion_has_articulos';
    protected $fillable =['cantidadArticulo','transaccions_id','articulos_id'];
    //
}
