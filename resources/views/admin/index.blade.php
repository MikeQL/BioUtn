@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1 style="padding-left: 16px;">Panel principal</h1>
    </div>

    <hr>
    <div class="row">
      <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{$total_usuarios}}</h3>

              <p>Usuarios</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas bi bi-people-fill"></i>
            </div>
            <a href="{{url('admin/usuarios')}}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>

      <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>{{$total_administradores}}</h3>

              <p>Administradores</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas bi bi-person-circle"></i>
            </div>
            <a href="{{url('admin/administradores')}}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>

      <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$total_materiales}}</h3>

                <p>Materiales</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas bi bi-wrench-adjustable"></i>
              </div>
            <a href="{{url('admin/materiales')}}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>


      <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{$total_laboratorios}}</h3>

              <p>Laboratorios</p>
            </div>
            <div class="icon">
              <i class="nav-icon fas bi bi-building-fill"></i>
            </div>
            <a href="{{url('admin/laboratorios')}}" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>
    </div>
@endsection