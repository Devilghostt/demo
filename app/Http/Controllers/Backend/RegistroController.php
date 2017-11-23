<?php

namespace App\Http\Controllers\Backend;

use App\models\Persona;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Genero;
use App\Models\TipoDocumento;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $Documento = TipoDocumento::all();
        $Gen = Genero::all();
        return view('registro',compact('Documento','Gen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $this->validate(request(),[
            'primernombre'=>'required|alpha',
            'segundonombre'=>'',
            'primerapellido'=>'required|alpha',
            'segundoapellido'=>'required|alpha',
            'generos_id'=>'required|numeric|',
            'tipo_documentos_id'=>'required|string',
            'documento'=>'required|numeric',
            'correo'=>'required|email|string|same:correo2',
            'correo2'=>'required|email|string|same:correo',
            'usuario'=>'required|string|unique:users,usuario',
            'password'=>'required|string|min:6|same:password2',
            'password2'=>'required|string|min:6|same:password',
            'telefono'=>'required|numeric',
            'direccion'=>'required|string',
            'fechadenacimiento'=>'required|string|date',
        ]);
        if ($validate==true){
            /////////////////////////////////////////////////////////////////////////////////////////
            $user = new User();
            $user->usuario=$request->usuario;
            $user->password=bcrypt($request->password);
            $user->remember_token=str_random(10);
            $user->save();
            ///////////////////////////////////////////////////id del user nuevo
            $id_user = $user->id;
            $persona = new Persona();
            $persona->primernombre = $request->primernombre;
            $persona->segundonombre = $request->segundonombre;
            $persona->primerapellido = $request->primerapellido;
            $persona->segundoapellido = $request->segundoapellido;
            $persona->generos_id = $request->generos_id;
            $persona->tipo_documentos_id = $request->tipo_documentos_id;
            $persona->documento = $request->documento;
            $persona->correo = $request->correo;
            $persona->telefono = $request->telefono;
            $persona->direccion = $request->direccion;
            $persona->fechadenacimiento = $request->fechadenacimiento;
            $persona->afiliados_id = 2;
            $persona->users_id=$user->id;
            $persona->save();



            /////////////////////////////////////////////////////////////////////////////////////////

            session()->flash('flash','SE HA REGISTRADO CORRECTAMENTE');
            return redirect('registro');
        }


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
