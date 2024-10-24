<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//rutas para el administrador de usuarios
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar

//rutas para el admin - lista de usuarios
Route::get('/admin/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])->name('admin.usuarios.index') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar

//rutas para el admin - crear usuarios
Route::get('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'create'])->name('admin.usuarios.create') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar

//rutas para el formulario de registro de usuarios
Route::post('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'store'])->name('admin.usuarios.store') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
