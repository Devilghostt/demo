<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripciones';
    protected $fillable =['estado','fechaInscripcion','capacitacions_id','users_id'];
    //
    public function capacitacions(){
        return $this->belongsTo('App\Models\Capacitacion');
    }
    public function users(){
        return $this->belongsTo('App\Models\User');
    }

}
