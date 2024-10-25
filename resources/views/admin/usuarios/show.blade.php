@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1 style="padding-left: 32px;">Usuario: {{$usuario->name}}</h1>
    </div>
    <hr>
    <div class="row" style="padding-left: 30%;">
        <div class="col-md-6">
        <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Datos Registrados:</h3>
                </div>

                <div class="card-body">
                    
                        <!-- para hacer tokens para las contraseñas yevitar inyecciones sql -->
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group" style="text-align:center;">
                                    <label for="">Nombre del usuario: </label>
                                    <p>{{$usuario->name}}</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group" style="text-align:center;">
                                    <label for="">E-mail:</label>
                                    <p>{{$usuario->email}}</p>
                                </div>
                            </div>
                        </div>
                        
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group" style="text-align:center;">
                                    <a href="{{url('admin/usuarios')}}" class="btn btn-secondary"> Volver</a>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection