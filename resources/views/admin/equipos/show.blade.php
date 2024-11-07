@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1 style="padding-left: 32px;">Equipo: {{$equipo->nombre}}</h1>
    </div>
    <hr>
    <div class="row" style="padding-left: 1%;">
        <div class="col-md-12">
        <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Datos del equipo: </h3>
                </div>

                <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nombre del Equipo:</label> 
                                    <p>{{$equipo->nombre}}</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Descripcion</label>
                                    <p>{{$equipo->descripcion}}</p>
                                </div>
                            </div>

                            
                        </div>
                        <br>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Cantidad</label>
                                    <p>{{$equipo->cantidad}}</p>
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nro Serie</label> 
                                    <p>{{$equipo->nro_serie}}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Código</label> 
                                    <p>{{$equipo->codigo}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Ubicación</label>
                                    <p>{{$equipo->ubicacion}}</p>
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Año de ingreso</label> 
                                    <p>{{$equipo->año_ingreso}}</p>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Fecha de Acualización</label> 
                                    <p>{{$equipo->fecha_actualizacion}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row"> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Estado del Equipo</label> 
                                    <p>{{$equipo->estado}}</p>
                                </div>
                            </div>
                             <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Código interno</label> 
                                    <p>{{$equipo->codigo_interno}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Observaciones</label>
                                    <p>{{$equipo->observacion}}</p>
                                </div>
                            </div> 
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{url('admin/equipos')}}" class="btn btn-secondary">Volver</a>
                                    
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection