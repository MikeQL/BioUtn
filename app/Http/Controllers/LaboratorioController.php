<?php

namespace App\Http\Controllers;

use App\Models\Laboratorio;
use Illuminate\Http\Request;

class LaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratorios = Laboratorio::all();
        return view('admin.laboratorios.index',compact("laboratorios"));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.laboratorios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'estado'=>'required',
        ]);

        // Accion de registro
        // $laboratorio = new Laboratorio(); //aquí lo haces un nuevo material
        // $laboratorio->nombre = $request->nombre;
        // $laboratorio->ubicacion = $request->ubicacion;
        // $laboratorio->capacidad = $request->capacidad;
        // $laboratorio->telefono = $request->telefono;
        // $laboratorio->estado = $request->estado;
        // $laboratorio->save();
        Laboratorio::create($request->all());

        //retornar a la vista cuando todo se complete correctamente
        return redirect()->route(route:'admin.laboratorios.index')
        ->with('mensaje','Laboratorio registrado correctamente')
        ->with('icono','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function show(Laboratorio $laboratorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function edit(Laboratorio $laboratorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laboratorio $laboratorio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laboratorio $laboratorio)
    {
        //
    }
}
