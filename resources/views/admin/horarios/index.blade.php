@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1 style="padding-left: 32px;">Listado de horarios</h1>
    </div>
    <hr>
    <div class="row" style="padding-left: 4px;">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Horarios Registrados</h3>
                    <div class="card-tools">
                        <a href="{{url('admin/horarios/create')}}" class="btn btn-primary"> Registrar nuevo</a>
                    </div>
                </div>

                <div class="card-body">
                    <table id="example1" class="table table-striped table-bordered table-hover table-sm">
                        <thead style="background-color: #c0c0c0;">
                            <tr>
                                <td style="text-align: center;"><b>Nro</b></td>
                                <td style="text-align: center;"><b>Equipo</b></td>
                                <td style="text-align: center;"><b>Laboratorio</b></td>
                                <td style="text-align: center;"><b>Días</b></td>
                                <td style="text-align: center;"><b>Hora Inicio</b></td>
                                <td style="text-align: center;"><b>Hora Fin</b></td>
                                <td style="text-align: center;"><b>Acciones</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador=1; ?>
                            @foreach($horarios as $horario)
                                <tr>
                                    <td style="text-align: center;">{{$contador++}}</td>
                                    <td>{{$horario->equipo->nombre}}</td>
                                    <td>{{$horario->laboratorio->nombre}}</td>
                                    <td>{{$horario->dia}}</td>
                                    <td>{{$horario->hora_inicio}}</td>
                                    <td>{{$horario->hora_fin}}</td>
                                    
                                    <td style="text-align: center;">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{url('admin/horarios/' .$horario->id)}}" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                            <a href="{{url('admin/horarios/'.$horario->id.'/edit')}}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                            <a href="{{url('admin/horarios/'.$horario->id.'/confirm-delete')}}" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
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
                                    "info": "Mostrando de _START_ a _END_ de _TOTAL_ Horarios",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Horarios",
                                    "infoFiltered": "(Filtrado de _MAX_ total Horarios)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar _MENU_ Horarios",
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