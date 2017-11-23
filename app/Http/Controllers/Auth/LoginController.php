<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use function Symfony\Component\Debug\Tests\FatalErrorHandler\test_namespaced_function;


class LoginController extends Controller
{
   public function login(){
       $credentials = $this->validate(request(),[
           'Usuario'=>'required|string',
           'password'=>'required|string|min:6'


       ]);


       if (Auth::attempt($credentials)){
           if (Auth::User()->rol=='admin'){
               return redirect()->route('admin');
           }
           return redirect()->route('usuario');



       }
           return back()->withErrors([
               'usuario'=>trans('auth.failed'),
               'password'=>trans('auth.failed')
           ]);



   }
   public function logaut(){
       Auth::logout();
       return redirect('/');
   }


}
