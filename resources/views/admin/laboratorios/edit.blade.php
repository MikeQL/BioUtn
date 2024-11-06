@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1 style="padding-left: 32px;">Modificar: {{$laboratorio->nombre}}</h1>
    </div>
    <hr>
    <div class="row" style="padding-left: 1%;">
        <div class="col-md-12">
        <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Complete el formulario</h3>
                </div>

                <div class="card-body">
                    <form action="{{url('/admin/laboratorios',$laboratorio->id)}}" method="POST">
                        <!-- para hacer tokens para las contraseñas y evitar inyecciones sql -->
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nombre del Laboratorio</label> <b>*</b>
                                    <input type="text" value="{{$laboratorio->nombre}}" name="nombre" class="form-control" required>
                                    @error('nombre')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Ubicación</label>
                                    <input type="text" value="{{$laboratorio->ubicacion}}" name="ubicacion" class="form-control">
                                    @error('ubicacion')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            
                        </div>
                        <br>
                        
                        <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Capacidad</label>
                                    <input type="text" value="{{$laboratorio->capacidad}}" name="capacidad" class="form-control">
                                    @error('capacidad')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div> 
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Teléfono</label> 
                                    <input type="text" value="{{$laboratorio->telefono}}" name="telefono" class="form-control">
                                    @error('telefono')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Estado</label> <b>*</b>
                                    <select name="estado" id="" class="form-control">
                                        @if($laboratorio->estado=='Activo')
                                            <option value="Activo">Activo</option>
                                            <option value="Inactivo">Inactivo</option>
                                        @else
                                            <option value="Inactivo">Inactivo</option>
                                            <option value="Activo">Activo</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{url('admin/laboratorios')}}" class="btn btn-secondary"> Cancelar</a>
                                    <button type="submit" class="btn btn-success">Actualizar Laboratorio</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection