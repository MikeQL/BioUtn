@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1 style="padding-left: 32px;">Usuario: {{$usuario->name}}</h1>
    </div>
    <hr>
    <div class="row" style="padding-left: 30%;">
        <div class="col-md-6">
        <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">¿Estás seguro de  eliminar este usuario?</h3>
                </div>

                <div class="card-body">
                    <form action="{{url('/admin/usuarios',$usuario->id)}}" method="POST">
                        <!-- para hacer tokens para las contraseñas yevitar inyecciones sql -->
                        @csrf
                        @method('DELETE')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nombre del usuario</label> 
                                    <input type="text" value="{{$usuario->name}}" name="name" class="form-control" disabled>
                                    @error('name')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">E-mail</label>
                                    <input type="email" value="{{$usuario->email}}" name="email" class="form-control" disabled>
                                    @error('email')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{url('admin/usuarios')}}" class="btn btn-secondary"> Cancelar</a>
                                    <button type="submit" class="btn btn-danger">Eliminar Usuario</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection