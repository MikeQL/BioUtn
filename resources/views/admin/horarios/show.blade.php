@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1 style="padding-left: 32px;">Horario: {{$horario->equipo->nombre ." ".$horario->equipo->descripcion}}</h1>
    </div>
    <hr>
    <div class="row" style="padding-left: 1%;">
        <div class="col-md-12">
        <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Datos del horario</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Equipo</label>
                                <p>{{$horario->equipo->nombre}}</p>
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Laboratorio</label>
                                <p>{{$horario->laboratorio->nombre}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Días</label>
                                <p>{{$horario->dia}}</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Hora Inicio</label>
                                <p>{{$horario->hora_inicio}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Hora Fin</label>
                                <p>{{$horario->hora_fin}}</p>
                            </div>
                        </div> 
                    </div>
                       

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{url('admin/horarios')}}" class="btn btn-secondary">Volver</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection