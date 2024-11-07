@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1 style="padding-left: 32px;">Equipo: {{$equipo->nombre}}</h1>
    </div>
    <hr>
    <div class="row" style="padding-left: 1%;">
        <div class="col-md-12">
        <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">¿Estás seguro de eliminar este equipo?</h3>
                </div>

                <div class="card-body">
                    <form action="{{url('/admin/equipos',$equipo->id)}}" method="POST">
                        <!-- para hacer tokens para las contraseñas y evitar inyecciones sql -->
                        @csrf
                        @method('DELETE')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nombre del Equipo</label> <b>*</b>
                                    <p>{{$equipo->nombre}}</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Descripcion</label><b>*</b>
                                    <p>{{$equipo->descripcion}}</p>
                                </div>
                            </div>

                            
                        </div>
                        <br>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Cantidad</label><b>*</b>
                                    <p>{{$equipo->cantidad}}</p>
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nro Serie</label> <b>*</b>
                                    <p>{{$equipo->nro_serie}}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Código</label> <b>*</b>
                                    <p>{{$equipo->codigo}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Ubicación</label><b>*</b>
                                    <p>{{$equipo->ubicacion}}</p>
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Año de ingreso</label> <b>*</b>
                                    <p>{{$equipo->año_ingreso}}</p>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Fecha de Acualización</label> <b>*</b>
                                    <p>{{$equipo->fecha_actualizacion}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row"> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Estado del Equipo</label> <b>*</b>
                                    <p>{{$equipo->estado}}</p>
                                </div>
                            </div>
                             <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Código interno</label> <b>*</b>
                                    <p>{{$equipo->codigo_interno}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Observaciones</label><b>*</b>
                                    <p>{{$equipo->observacion}}</p>
                                </div>
                            </div> 
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{url('admin/equipos')}}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-danger">Eliminar Equipo</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection