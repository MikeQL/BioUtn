@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1 style="padding-left: 32px;">Listado de Administradores</h1>
    </div>
    <hr>
    <div class="row" style="padding-left: 4px;">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Administradores Registrados</h3>
                    <div class="card-tools">
                        <a href="{{url('admin/administradores/create')}}" class="btn btn-primary"> Registrar nuevo</a>
                    </div>
                </div>

                <div class="card-body">
                    <table id="example1" class="table table-striped table-bordered table-hover table-sm">
                        <thead style="background-color: #c0c0c0;">
                            <tr>
                                <td style="text-align: center;"><b>Id</b></td>
                                <td style="text-align: center;"><b>Nombres</b></td>
                                <td style="text-align: center;"><b>Apellidos</b></td>
                                <td style="text-align: center;"><b>C.I</b></td>
                                <td style="text-align: center;"><b>Celular</b></td>
                                <td style="text-align: center;"><b>Fecha de naciemiento</b></td>
                                <td style="text-align: center;"><b>Dirección</b></td>
                                <td style="text-align: center;"><b>E-mail</b></td>
                                <td style="text-align: center;"><b>Acciones</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador=1; ?>
                            @foreach($administradores as $administrador)
                                <tr>
                                    <td style="text-align: center;">{{$contador++}}</td>
                                    <td>{{$administrador->nombres}}</td>
                                    <td>{{$administrador->apellidos}}</td>
                                    <td>{{$administrador->email}}</td>
                                    <td style="text-align: center;">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{url('admin/administradores/' .$administrador->id)}}" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                            <a href="{{url('admin/administradores/'.$administrador->id.'/edit')}}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                            <a href="{{url('admin/administradores/'.$administrador->id.'/confirm-delete')}}" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>  
                            @endforeach
                        </tbody>
                    </table>
                    <script>
                        $(function () {
                            $("#example1").DataTable({
                                "pageLength": 10,
                                "language": {
                                    "emptyTable": "No hay información",
                                    "info": "Mostrando de _START_ a _END_ de _TOTAL_ Administradores",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
                                    "infoFiltered": "(Filtrado de _MAX_ total Administradores)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar _MENU_ Administradores",
                                    "loadingRecords": "Cargando...",
                                    "processing": "Procesando...",
                                    "search": "Buscador:",
                                    "zeroRecords": "Sin resultados encontrados",
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Ultimo",
                                        "next": "Siguiente",
                                        "previous": "Anterior"
                                    }
                                },
                                "responsive": true, "lengthChange": true, "autoWidth": false,
                                buttons: [{
                                    extend: 'collection',
                                    text: 'Reportes',
                                    orientation: 'landscape',
                                    buttons: [{
                                        text: 'Copiar',
                                        extend: 'copy',
                                    }, {
                                        extend: 'pdf'
                                    },{
                                        extend: 'csv'
                                    },{
                                        extend: 'excel'
                                    },{
                                        text: 'Imprimir',
                                        extend: 'print'
                                    }
                                    ]
                                },
                                    {
                                        extend: 'colvis',
                                        text: 'Visor de columnas',
                                        collectionLayout: 'fixed three-column'
                                    }
                                ],
                            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        });
                    </script>
                </div>
            </div>
        </div>   
    </div>
    

    
@endsection