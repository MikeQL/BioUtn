@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1 style="padding-left: 32px;">Listado de Equipos</h1>
    </div>
    <hr>
    <div class="row" style="padding-left: 4px;">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Equipos Registrados</h3>
                    <div class="card-tools">
                        <a href="{{url('admin/equipos/create')}}" class="btn btn-primary"> Registrar nuevo</a>
                    </div>
                </div>

                <div class="card-body">
                    <table id="example1" class="table table-striped table-bordered table-hover table-sm">
                        <thead style="background-color: #c0c0c0;">
                            <tr>
                                <td style="text-align: center;"><b>Nro</b></td>
                                <td style="text-align: center;"><b>Nombre</b></td>
                                <td style="text-align: center;"><b>Descripción</b></td>
                                <td style="text-align: center;"><b>Cantidad</b></td>
                                <td style="text-align: center; width: 200px;"><b>Nro de serie</b></td>
                                <td style="text-align: center;"><b>Código Patrimonial</b></td>
                                <td style="text-align: center;"><b>Ubicación</b></td>
                                <td style="text-align: center;"><b>Acciones</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador=1; ?>
                            @foreach($equipos as $equipo)
                                <tr>
                                    <td style="text-align: center;">{{$contador++}}</td>
                                    <td >{{$equipo->nombre}}</td>
                                    <td>{{$equipo->descripcion}}</td>
                                    <td>{{$equipo->cantidad}}</td>
                                    <td>{{$equipo->nro_serie}}</td>
                                    <td>{{$equipo->codigo}}</td>
                                    <td>{{$equipo->ubicacion}}</td>
                                    
                                    <td style="text-align: center;">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{url('admin/equipos/' .$equipo->id)}}" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                            <a href="{{url('admin/equipos/'.$equipo->id.'/edit')}}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                            <a href="{{url('admin/equipos/'.$equipo->id.'/confirm-delete')}}" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
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
                                    "info": "Mostrando de _START_ a _END_ de _TOTAL_ Equipos",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Equipos",
                                    "infoFiltered": "(Filtrado de _MAX_ total Equipos)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar _MENU_ Equipos",
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