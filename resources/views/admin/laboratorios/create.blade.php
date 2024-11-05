@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1 style="padding-left: 32px;">Registro de un nuevo Laboratorio</h1>
    </div>
    <hr>
    <div class="row" style="padding-left: 1%;">
        <div class="col-md-12">
        <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Complete el formulario</h3>
                </div>

                <div class="card-body">
                    <form action="{{url('/admin/laboratorios/create')}}" method="POST">
                        <!-- para hacer tokens para las contraseñas y evitar inyecciones sql -->
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nombre del Laboratorio</label> <b>*</b>
                                    <input type="text" value="{{old('nombre')}}" name="nombre" class="form-control" required>
                                    @error('nombre')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Ubicación</label>
                                    <input type="text" value="{{old('ubicacion')}}" name="ubicacion" class="form-control">
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
                                    <input type="text" value="{{old('capacidad')}}" name="capacidad" class="form-control">
                                    @error('capacidad')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div> 
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Teléfono</label> 
                                    <input type="text" value="{{old('telefono')}}" name="telefono" class="form-control">
                                    @error('telefono')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Estado</label> <b>*</b>
                                    <select name="estado" id="" class="form-control">
                                        <option value="Activo">Activo</option>
                                        <option value="Inactivo">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{url('admin/laboratorios')}}" class="btn btn-secondary"> Cancelar</a>
                                    <button type="submit" class="btn btn-primary">Registrar Laboratorio</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection