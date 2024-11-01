@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1 style="padding-left: 32px;">Listado de Materiales</h1>
    </div>
    <hr>
    <div class="row" style="padding-left: 4px;">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Materiales Registrados</h3>
                    <div class="card-tools">
                        <a href="{{url('admin/materiales/create')}}" class="btn btn-primary"> Registrar nuevo</a>
                    </div>
                </div>

                <div class="card-body">
                    <table id="example1" class="table table-striped table-bordered table-hover table-sm">
                        <thead style="background-color: #c0c0c0;">
                            <tr>
                                <td style="text-align: center;"><b>Nro</b></td>
                                <td style="text-align: center;"><b>Nombre</b></td>
                                <td style="text-align: center;"><b>Volumen</b></td>
                                <td style="text-align: center;"><b>Unidad</b></td>
                                <td style="text-align: center;"><b>Cantidad total</b></td>
                                <td style="text-align: center;"><b>Cantidad en uso</b></td>
                                <td style="text-align: center;"><b>Cantidad disponible</b></td>
                                <td style="text-align: center;"><b>Acciones</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador=1; ?>
                            @foreach($materiales as $material)
                                <tr>
                                    <td style="text-align: center;">{{$contador++}}</td>
                                    <td>{{$material->nombre}}</td>
                                    <td>{{$material->volumen}}</td>
                                    <td>{{$material->unidad}}</td>
                                    <td>{{$material->cantidad_total}}</td>
                                    <td>{{$material->cantidad_uso}}</td>
                                    <td>{{$material->cantidad_total - $material->cantidad_uso}}</td>
                                    
                                    <td style="text-align: center;">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{url('admin/materiales/' .$material->id)}}" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                            <a href="{{url('admin/materiales/'.$material->id.'/edit')}}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                            <a href="{{url('admin/emateriales/'.$material->id.'/confirm-delete')}}" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
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
                                    "info": "Mostrando de _START_ a _END_ de _TOTAL_ Materiales",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 materiales",
                                    "infoFiltered": "(Filtrado de _MAX_ total materiales)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar _MENU_ Materiales",
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