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

//rutas para la acción ver de la lista de usuarios
Route::get('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'show'])->name('admin.usuarios.show') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar

//rutas para poder actualizar a los usuarios de la lista con el boton edit primero para la funcion edit y luego para el update
Route::get('/admin/usuarios/{id}/edit', [App\Http\Controllers\UsuarioController::class, 'edit'])->name('admin.usuarios.edit') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::put('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'update'])->name('admin.usuarios.update') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar

//rutas para poder eliminar a los usuarios de la lista con el boton delete 
Route::get('/admin/usuarios/{id}/confirm-delete', [App\Http\Controllers\UsuarioController::class, 'confirmDelete'])->name('admin.usuarios.confirmDelete') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::delete('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'destroy'])->name('admin.usuarios.destroy') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
