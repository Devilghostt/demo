<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagenBanner extends Model
{
    protected $table = 'imagen_banners';
    protected $fillable =['urlImagenBanner','descripcion'];
    //
}
