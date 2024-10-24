@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1 style="padding-left: 32px;">Listado de Usuarios</h1>
    </div>
    <hr>
    <div class="row" style="padding-left: 10%;">
        <div class="col-md-10">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Usuarios Registrados</h3>
                    <div class="card-tools">
                        <a href="{{url('admin/usuarios/create')}}" class="btn btn-primary"> Registrar nuevo</a>
                    </div>
                </div>

                <div class="card-body">
                    <table id="example1" class="table table-striped table-bordered table-hover table-sm">
                        <thead style="background-color: #c0c0c0;">
                            <tr>
                                <td style="text-align: center;"><b>Id</b></td>
                                <td style="text-align: center;"><b>Nombre</b></td>
                                <td style="text-align: center;"><b>E-mail</b></td>
                                <td style="text-align: center;"><b>Acciones</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador=1; ?>
                            @foreach($usuarios as $usuario)
                                <tr>
                                    <td style="text-align: center;">{{$contador++}}</td>
                                    <td>{{$usuario->name}}</td>
                                    <td>{{$usuario->email}}</td>
                                    <td>
                                        ver / editar / borrar
                                    </td>
                                </tr>  
                            @endforeach
                        </tbody>
                    </table>
                    <script>
                        $(function () {
                            $("#example1").DataTable({
                            "responsive": true, "lengthChange": false, "autoWidth": false,
                            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                            $('#example2').DataTable({
                            "paging": true,
                            "lengthChange": false,
                            "searching": false,
                            "ordering": true,
                            "info": true,
                            "autoWidth": false,
                            "responsive": true,
                            });
                        });
                    </script>
                </div>
            </div>
        </div>   
    </div>
    

    
@endsection