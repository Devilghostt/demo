<?php

namespace App\Http\Controllers\Frontend;

use App\models\TipoDocumento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Genero;

class WebPageController extends Controller
{
    public function index(){
        return view('index');
    }
    public function index2(){
        return view('index2');
    }

    public function eventos(){
        return view('eventos');

    }
    public function cursos(){
        return view('cursos');
    }
    public function  programas(){
        return view('programas');
    }

    public function mostrarLoginForm(){
        return view('loguear');
    }
    public function __construct(){
        $this->middleware('guest',['only'=>'mostrarLoginForm']);
    }




}
