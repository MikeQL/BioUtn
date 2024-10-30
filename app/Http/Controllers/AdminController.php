<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $total_usuarios = User::count();
        $total_administradores = Administrador::count();
        return view('admin.index',compact("total_usuarios", "total_administradores"));
    }
}
