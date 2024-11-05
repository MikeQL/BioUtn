@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1 style="padding-left: 32px;">Material: {{$material->nombre}}</h1>
    </div>
    <hr>
    <div class="row" style="padding-left: 1%;">
        <div class="col-md-12">
        <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">¿Estás seguro de eliminar este material?</h3>
                </div>

                <form action="{{url('/admin/materiales',$material->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <p>{{$material->nombre}}</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Cantidad Total</label>
                                <p>{{$material->cantidad_total}}</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Volumen</label>
                                <p>{{$material->volumen}}</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Unidad</label> 
                                <p>{{$material->unidad}}</p>
                            </div>
                        </div> 
                    </div>
                    <br>
                    
                    <div class="row">
                    <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Observaciones</label> 
                                <p>{{$material->observaciones}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{url('admin/materiales')}}" class="btn btn-secondary">Volver</a>
                                <button type="submit" class="btn btn-danger">Eliminar Material</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection