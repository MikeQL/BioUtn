<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index(){
        //Consulta en MYsql
        //SSQL = 'SELECT * FROM users';


        // Ah pero en laravel... consulta en laravel (elocuent)
        $usuarios = User::all();
        //retorna la vista
        return view('admin.usuarios.index',compact("usuarios"));
    }

    public function create(){
        return view(view:'admin.usuarios.create');
    }

    public function store(Request $request){
        // Asi se almacenan los datos en una variable tipo json
        //$datos = request()->all();
        //return response()->json($datos);

        // //manera correcta de validar los datos en el backend
        $request->validate([
            'name'=>'required|max:250',
            'email'=>'required|max:250|unique:users|regex:/^[\w\.-]+@utn\.edu\.ec$/',
            'password'=>'required|max:250|confirmed',
        ],
        [
            'email.regex' => 'El email debe ser una dirección de correo con el dominio @utn.edu.ec',
        ]);

        // Accion de registro
        $usuario = new User(); //aquí lo haces un nuevo usuario
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request['password']);
        $usuario->save();

        //retornar a la vista cuando todo se complete correctamente
        return redirect()->route(route:'admin.usuarios.index')
        ->with('mensaje','Usuario registrado correctamente')
        ->with('icono','success');
    }


}
