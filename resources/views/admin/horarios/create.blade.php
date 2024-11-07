@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1 style="padding-left: 32px;">Registro de un nuevo horario</h1>
    </div>
    <hr>
    <div class="row" style="padding-left: 1%;">
        <div class="col-md-12">
        <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Complete el formulario</h3>
                </div>

                <div class="card-body">
                    <form action="{{url('/admin/horarios/create')}}" method="POST">
                        <!-- para hacer tokens para las contraseñas y evitar inyecciones sql -->
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Días</label> <b>*</b>
                                    <select name="dia" id="" class="form-control">
                                        <option value="Lunes a Viernes">Lunes a Viernes</option>
                                        <option value="Lunes">Lunes</option>
                                        <option value="Martes">Martes</option>
                                        <option value="Miercoles">Miércoles</option>
                                        <option value="Jueves">Jueves</option>
                                        <option value="Viernes">Viernes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Hora Inicio</label><b>*</b>
                                    <input type="time" value="{{old('hora_inicio')}}" name="hora_inicio" class="form-control" required>
                                    @error('hora_inicio')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Hora Fin</label><b>*</b>
                                    <input type="time" value="{{old('hora_fin')}}" name="hora_fin" class="form-control" required>
                                    @error('hora_fin')
                                    <small style="color: red;">{{$message}}</small>
                                    @enderror
                                </div>
                            </div> 
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Equipos</label><b>*</b>
                                        <select name="equipo_id" id="" class="form-control">
                                        @foreach($equipos as $equipo)
                                            <option value="{{$equipo->id}}">{{$equipo->nombre." ".$equipo->descripcion}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                            </div> 
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Laboratorios</label><b>*</b>
                                        <select name="laboratorio_id" id="" class="form-control">
                                        @foreach($laboratorios as $laboratorio)
                                            <option value="{{$laboratorio->id}}">{{$laboratorio->nombre}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                            </div>
                        </div>
                       

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{url('admin/horarios')}}" class="btn btn-secondary"> Cancelar</a>
                                    <button type="submit" class="btn btn-primary">Registrar Horario</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection