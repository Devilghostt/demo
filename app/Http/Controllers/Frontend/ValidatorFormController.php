<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ValidatorFormController extends Controller
{
    public function __construct(){
        $this->middleware('auth');

    }
    public function admin(){
        return view('admin');

    }
    public  function usuario(){
        return view('usuario');

    }
}
