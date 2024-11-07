<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Equipo;
use App\Models\Laboratorio;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = Horario::with('equipo','laboratorio')->get();
        return view('admin.horarios.index',compact("horarios"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos = Equipo::all();
        $laboratorios = Laboratorio::all();
        return view('admin.horarios.create',compact("equipos", "laboratorios"));
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
            'dia'=>'required',
            'hora_inicio'=>'required',
            'hora_fin'=>'required',
        ]);

        Horario::create($request->all());

        //retornar a la vista cuando todo se complete correctamente
        return redirect()->route(route:'admin.horarios.index')
        ->with('mensaje','Horario registrado correctamente')
        ->with('icono','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horario = Horario::findOrFail($id);
        return view('admin.horarios.show',compact("horario"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function edit(Horario $horario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horario $horario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horario $horario)
    {
        //
    }
}
