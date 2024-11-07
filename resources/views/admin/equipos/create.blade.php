@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1 style="padding-left: 32px;">Registro de un nuevo Equipo</h1>
    </div>
    <hr>
    <div class="row" style="padding-left: 1%;">
        <div class="col-md-12">
        <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Complete el formulario</h3>
                </div>

                <div class="card-body">
                    <form action="{{url('/admin/equipos/create')}}" method="POST">
                        <!-- para hacer tokens para las contraseñas y evitar inyecciones sql -->
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nombre del Equipo</label> <b>*</b>
                                    <input type="text" value="{{old('nombre')}}" name="nombre" class="form-control" required>
                                    @error('nombre')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Descripcion</label><b>*</b>
                                    <input type="text" value="{{old('descripcion')}}" name="descripcion" class="form-control" required>
                                    @error('descripcion')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            
                        </div>
                        <br>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Cantidad</label><b>*</b>
                                    <input type="text" value="{{old('cantidad')}}" name="cantidad" class="form-control" required>
                                    @error('cantidad')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nro Serie</label> <b>*</b>
                                    <input type="text" value="{{old('nro_serie')}}" name="nro_serie" class="form-control" required>
                                    @error('nro_serie')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Código</label> <b>*</b>
                                    <input type="text" value="{{old('codigo')}}" name="codigo" class="form-control" required>
                                    @error('codigo')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Ubicación</label><b>*</b>
                                    <input type="text" value="{{old('ubicacion')}}" name="ubicacion" class="form-control" required>
                                    @error('ubicacion')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Año de ingreso</label> <b>*</b>
                                    <input type="text" value="{{old('año_ingreso')}}" name="año_ingreso" class="form-control" required>
                                    @error('año_ingreso')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Fecha de Acualización</label> <b>*</b>
                                    <input type="text" value="{{old('fecha_actualizacion')}}" name="fecha_actualizacion" class="form-control" required>
                                    @error('fecha_actualizacion')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row"> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Estado del Equipo</label> <b>*</b>
                                    <input type="text" value="{{old('estado')}}" name="estado" class="form-control" required>
                                    @error('estado')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                             <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Código interno</label> <b>*</b>
                                    <input type="text" value="{{old('codigo_interno')}}" name="codigo_interno" class="form-control" required>
                                    @error('codigo_interno')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Observaciones</label><b>*</b>
                                    <input type="text" value="{{old('observacion')}}" name="observacion" class="form-control" required>
                                    @error('observacion')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div> 
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{url('admin/equipos')}}" class="btn btn-secondary"> Cancelar</a>
                                    <button type="submit" class="btn btn-primary">Registrar Equipo</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection