<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // primero tienes que declarar las variables para la relación entre las tablas, luego lo mandas con el compact
        $materiales = Material::all();
        return view('admin.materiales.index',compact("materiales"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.materiales.create');
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
            'cantidad_total'=>'required',
        ]);

        // Accion de registro
        $material = new Material(); //aquí lo haces un nuevo material
        $material->nombre = $request->nombre;
        $material->volumen = $request->volumen;
        $material->unidad = $request->unidad;
        $material->cantidad_total = $request->cantidad_total;
        $material->cantidad_uso = $request->cantidad_uso;
        $material->fecha_uso = $request->fecha_uso;
        $material->fecha_entrega = $request->fecha_entrega;
        $material->observaciones = $request->observaciones;
        $material->save();

        //retornar a la vista cuando todo se complete correctamente
        return redirect()->route(route:'admin.materiales.index')
        ->with('mensaje','Material registrado correctamente')
        ->with('icono','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        //
    }
}
