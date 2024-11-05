@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1 style="padding-left: 32px;">Moodificar material: {{$material->nombre}}</h1>
    </div>
    <hr>
    <div class="row" style="padding-left: 1%;">
        <div class="col-md-12">
        <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Complete el formulario</h3>
                </div>

                <div class="card-body">
                    <form action="{{url('/admin/materiales',$material->id)}}" method="POST">
                        <!-- para hacer tokens para las contraseñas y evitar inyecciones sql -->
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Nombre</label> <b>*</b>
                                    <input type="text" value="{{$material->nombre}}" name="nombre" class="form-control" required>
                                    @error('nombre')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Cantidad Total</label> <b>*</b>
                                    <input type="text" value="{{$material->cantidad_total}}" name="cantidad_total" class="form-control" required>
                                    @error('cantidad')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Volumen</label>
                                    <input type="text" value="{{$material->volumen}}" name="volumen" class="form-control">
                                    @error('volumen')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Unidad</label> 
                                    <input type="text" value="{{$material->unidad}}" name="unidad" class="form-control">
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
                                    <input type="text" value="{{$material->observaciones}}" name="observaciones" class="form-control">
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
                                    <button type="submit" class="btn btn-success">Actualizar material</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection