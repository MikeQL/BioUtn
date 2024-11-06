@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1 style="padding-left: 32px;">Laboratorio: {{$laboratorio->nombre}}</h1>
    </div>
    <hr>
    <div class="row" style="padding-left: 1%;">
        <div class="col-md-12">
        <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">¿Estás seguro de eliminar este laboratorio?</h3>
                </div>
                <form action="{{url('/admin/laboratorios',$laboratorio->id)}}" method="POST">
                @csrf
                @method('DELETE')
                    <div class="card-body">
                        <!-- para hacer tokens para las contraseñas y evitar inyecciones sql -->
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nombre del Laboratorio</label>
                                    <p>{{$laboratorio->nombre}}</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Ubicación</label>
                                    <p>{{$laboratorio->ubicacion}}</p>
                                </div>
                            </div>

                            
                        </div>
                        <br>
                        
                        <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Capacidad</label>
                                    <p>{{$laboratorio->capacidad}}</p>
                                </div>
                            </div> 
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Teléfono</label> 
                                    <p>{{$laboratorio->telefono}}</p>
                                </div>
                            </div>
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Estado</label>
                                    <p>{{$laboratorio->estado}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{url('admin/laboratorios')}}" class="btn btn-secondary"> Cancelar</a>
                                    <button type="submit" class="btn btn-danger">Eliminar laboratorio</button>
                                </div>
                            </div>
                        </div>
                    </div>   
                </form>
            </div>
        </div>
    </div>
@endsection