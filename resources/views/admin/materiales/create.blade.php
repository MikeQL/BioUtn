@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1 style="padding-left: 32px;">Registro de un nuevo Material</h1>
    </div>
    <hr>
    <div class="row" style="padding-left: 1%;">
        <div class="col-md-12">
        <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Complete el formulario</h3>
                </div>

                <div class="card-body">
                    <form action="{{url('/admin/materiales/create')}}" method="POST">
                        <!-- para hacer tokens para las contraseñas y evitar inyecciones sql -->
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Nombre</label> <b>*</b>
                                    <input type="text" value="{{old('nombre')}}" name="nombre" class="form-control" required>
                                    @error('nombre')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Cantidad Total</label> <b>*</b>
                                    <input type="text" value="{{old('cantidad_total')}}" name="cantidad_total" class="form-control" required>
                                    @error('cantidad')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Volumen</label>
                                    <input type="text" value="{{old('volumen')}}" name="volumen" class="form-control">
                                    @error('volumen')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Unidad</label> 
                                    <input type="text" value="{{old('unidad')}}" name="unidad" class="form-control">
                                    @error('unidad')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div> 
                        </div>
                        <br>
                        
                        <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Observaciones</label> 
                                    <input type="text" value="{{old('observaciones')}}" name="observaciones" class="form-control">
                                    @error('observaciones')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{url('admin/materiales')}}" class="btn btn-secondary"> Cancelar</a>
                                    <button type="submit" class="btn btn-primary">Registrar material</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection