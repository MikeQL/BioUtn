@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1 style="padding-left: 32px;">Aministrador: {{$administrador->nombres}} {{$administrador->apellidos}}</h1>
    </div>
    <hr>
    <div class="row" style="padding-left: 1%;">
        <div class="col-md-12">
        <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Datos del administrador: </h3>
                </div>

                <div class="card-body">
                        <!-- para hacer tokens para las contraseñas yevitar inyecciones sql -->
                        
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Nombres del  Administrador</label> 
                                    <p>{{$administrador->nombres}}</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                    <label for="">Apellidos del  Administrador</label> 
                                    <p>{{$administrador->apellidos}}</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">C.I</label> 
                                    <p>{{$administrador->ci}}</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Celular</label> <b>*</b>
                                    <p>{{$administrador->celular}}</p>
                                </div>
                            </div>
                        </div>
                        
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Fecha de nacimiento</label> <b>*</b>
                                    <p>{{$administrador->fecha_nacimiento}}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Dirección</label><b>*</b>
                                    <p>{{$administrador->direccion}}</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">E-mail</label><b>*</b>
                                    <p>{{$administrador->user->email}}</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <a href="{{url('admin/administradores')}}" class="btn btn-secondary"> Volver</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection