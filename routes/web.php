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


// rutas para el admin - administradores
Route::get('/admin/administradores', [App\Http\Controllers\AdministradorController::class, 'index'])->name('admin.administradores.index') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::get('/admin/administradores/create', [App\Http\Controllers\AdministradorController::class, 'create'])->name('admin.administradores.create') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar

// ruta para llenar las tablas que están relacionadas con los nuevos datos de los administradores
Route::post('/admin/administradores/create', [App\Http\Controllers\AdministradorController::class, 'store'])->name('admin.administradores.store') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::get('/admin/administradores/{id}', [App\Http\Controllers\AdministradorController::class, 'show'])->name('admin.administradores.show') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::get('/admin/administradores/{id}/edit', [App\Http\Controllers\AdministradorController::class, 'edit'])->name('admin.administradores.edit') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::put('/admin/administradores/{id}', [App\Http\Controllers\AdministradorController::class, 'update'])->name('admin.administradores.update') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::get('/admin/administradores/{id}/confirm-delete', [App\Http\Controllers\AdministradorController::class, 'confirmDelete'])->name('admin.administradores.confirmDelete') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::delete('/admin/administradores/{id}', [App\Http\Controllers\AdministradorController::class, 'destroy'])->name('admin.administradores.destroy') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar


//rutas para el admin - estudiantes 
Route::get('/admin/materiales', [App\Http\Controllers\MaterialController::class, 'index'])->name('admin.materiales.index') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::get('/admin/materiales/create', [App\Http\Controllers\MaterialController::class, 'create'])->name('admin.materiales.create') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::post('/admin/materiales/create', [App\Http\Controllers\MaterialController::class, 'store'])->name('admin.materiales.store') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::get('/admin/materiales/{id}', [App\Http\Controllers\MaterialController::class, 'show'])->name('admin.materiales.show') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::get('/admin/materiales/{id}/edit', [App\Http\Controllers\MaterialController::class, 'edit'])->name('admin.materiales.edit') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::put('/admin/materiales/{id}', [App\Http\Controllers\MaterialController::class, 'update'])->name('admin.materiales.update') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::get('/admin/materiales/{id}/confirm-delete', [App\Http\Controllers\MaterialController::class, 'confirmDelete'])->name('admin.materiales.confirmDelete') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::delete('/admin/materiales/{id}', [App\Http\Controllers\MaterialController::class, 'destroy'])->name('admin.materiales.destroy') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar


//rutas para el admin - laboratorios
Route::get('/admin/laboratorios', [App\Http\Controllers\LaboratorioController::class, 'index'])->name('admin.laboratorios.index') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::get('/admin/laboratorios/create', [App\Http\Controllers\LaboratorioController::class, 'create'])->name('admin.laboratorios.create') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::post('/admin/laboratorios/create', [App\Http\Controllers\LaboratorioController::class, 'store'])->name('admin.laboratorios.store') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::get('/admin/laboratorios/{id}', [App\Http\Controllers\LaboratorioController::class, 'show'])->name('admin.laboratorios.show') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::get('/admin/laboratorios/{id}/edit', [App\Http\Controllers\LaboratorioController::class, 'edit'])->name('admin.laboratorios.edit') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::put('/admin/laboratorios/{id}', [App\Http\Controllers\LaboratorioController::class, 'update'])->name('admin.laboratorios.update') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::get('/admin/laboratorios/{id}/confirm-delete', [App\Http\Controllers\LaboratorioController::class, 'confirmDelete'])->name('admin.laboratorios.confirmDelete') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
Route::delete('/admin/laboratorios/{id}', [App\Http\Controllers\LaboratorioController::class, 'destroy'])->name('admin.laboratorios.destroy') ->middleware(middleware:'auth'); //es importante definir el nombre de la ruta porque más adelante sirve para los roles y permisos el middleware lo que hace es no permitir el acceso a la ruta si es que no está autenticado el usuario es decir que si no está logeado no puede entrar
