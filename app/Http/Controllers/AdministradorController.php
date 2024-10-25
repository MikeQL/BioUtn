<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // primero tienes que declarar las variables para la relación entre las tablas, luego lo mandas con el compact
        $administradores = Administrador::with(relations:'user')->get();
        return view('admin.administradores.index',compact("administradores"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.administradores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datos = request()->all();
        //return response()->json($datos);
        $request->validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'ci'=>'required|unique:administradors',
            'celular'=>'required',
            'fecha_nacimiento'=>'required',
            'direccion'=>'required',
            'email'=>'required|max:250|unique:users',
            'password'=>'required|max:250|confirmed',
        ]);

        // Accion de registro
        $usuario = new User(); //aquí lo haces un nuevo usuario
        $usuario->name = $request->nombres . ' ' . $request->apellidos;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request['password']);
        $usuario->save();

        $administrador = new Administrador();
        $administrador->user_id = $usuario->id;
        $administrador->nombres = $request->nombres;
        $administrador->apellidos = $request->apellidos;
        $administrador->ci = $request->ci;
        $administrador->celular = $request->celular;
        $administrador->fecha_nacimiento = $request->fecha_nacimiento;
        $administrador->direccion = $request->direccion;
        $administrador->save();

        //retornar a la vista cuando todo se complete correctamente
        return redirect()->route(route:'admin.administradores.index')
        ->with('mensaje','Administrador registrado correctamente')
        ->with('icono','success');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function show(Administrador $administrador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrador $administrador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrador $administrador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrador $administrador)
    {
        //
    }
}
