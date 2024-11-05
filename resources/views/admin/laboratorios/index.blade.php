@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1 style="padding-left: 32px;">Listado de Laboratorios</h1>
    </div>
    <hr>
    <div class="row" style="padding-left: 4px;">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Laboratorios Registrados</h3>
                    <div class="card-tools">
                        <a href="{{url('admin/laboratorios/create')}}" class="btn btn-primary"> Registrar nuevo</a>
                    </div>
                </div>

                <div class="card-body">
                    <table id="example1" class="table table-striped table-bordered table-hover table-sm">
                        <thead style="background-color: #c0c0c0;">
                            <tr>
                                <td style="text-align: center;"><b>Nro</b></td>
                                <td style="text-align: center;"><b>Laboratorio</b></td>
                                <td style="text-align: center;"><b>Ubicación</b></td>
                                <td style="text-align: center;"><b>Capacidad</b></td>
                                <td style="text-align: center;"><b>Teléfono</b></td>
                                <td style="text-align: center;"><b>Estado</b></td>
                                <td style="text-align: center;"><b>Acciones</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador=1; ?>
                            @foreach($laboratorios as $laboratorio)
                                <tr>
                                    <td style="text-align: center;">{{$contador++}}</td>
                                    <td>{{$laboratorio->nombre}}</td>
                                    <td>{{$laboratorio->ubicacion}}</td>
                                    <td>{{$laboratorio->capacidad}}</td>
                                    <td>{{$laboratorio->telefono}}</td>
                                    <td>{{$laboratorio->estado}}</td>
                                    
                                    <td style="text-align: center;">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{url('admin/laboratorios/' .$laboratorio->id)}}" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                            <a href="{{url('admin/laboratorios/'.$laboratorio->id.'/edit')}}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                            <a href="{{url('admin/laboratorios/'.$laboratorio->id.'/confirm-delete')}}" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
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
                                    "info": "Mostrando de _START_ a _END_ de _TOTAL_ Laboratorios",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Laboratorios",
                                    "infoFiltered": "(Filtrado de _MAX_ total Laboratorios)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar _MENU_ Laboratorios",
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