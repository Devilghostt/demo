<?php

namespace App\Http\Controllers\Frontend;

use App\models\TipoDocumento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Genero;

class WebPageController extends Controller
{
    //vista personas
    public function index(){
        return view('index');
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
    //// vista usuarios

    public function index2(){
        return view('index2');
    }

    ////// afiliados


    //// vista admin
    public function index3(){
        return view('index3');
    }
    public function publicaciones(){
        return view('publicaciones');
    }
    public function eventos3(){
        return view('eventos3');
    }
    public function implementosdeportivos(){
        return view('implementosdeportivos');
    }
    public function implementos(){
        return view('implementos');
    }
    public function reservaimplementosdeportivos(){
        return view('reservaimplementosdeportivos');
    }
    public function prestamoimplementosdeportivos(){
        return view('prestamoimplementosdeportivos');
    }
    public function elementoseventos(){
        return view('elementoseventos');
    }
    public function registroelementoseventos(){
        return view('registroelementoseventos');
    }
    public function reservaelementoseventos(){
        return view('reservaelementoseventos');
    }
    public function alquilerelementos(){
        return view('alquilerelementos');
    }
    public function registroafiliadosaccion(){
        return view('registroafiliadosaccion');
    }
    public function afiliadosaccion(){
        return view('afiliadosaccion');
    }

    ///// logueo
    public function mostrarLoginForm(){
        return view('loguear');
    }
    public function __construct(){
        $this->middleware('guest',['only'=>'mostrarLoginForm']);
    }




}
