<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use App\Models\Laboratorio;
use App\Models\Material;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $total_usuarios = User::count();
        $total_administradores = Administrador::count();
        $total_materiales = Material::count();
        $total_laboratorios = Laboratorio::count();
        return view('admin.index',compact("total_usuarios", "total_administradores", "total_materiales","total_laboratorios"));
    }
}
