@extends('layouts.app')
@section('content')

<div class="container "  style="background:linear-gradient(30deg,rgb(53, 114, 91), rgb(12, 165, 81), rgb(152, 240, 160), rgb(179, 253, 219))" class="navbar navbar-expand-lg navbar-light" class="bg-warning rounded">
    <div class="table-responsive mb-5">
        <table class="table" id="libros_table">
            <thead class="table table-hover">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Editorial</th>
                    <th scope="col">Año</th>
                    <th scope="col">Clasificación</th>
                </tr>
            </thead>
            <tbody>
                @foreach($libros as $libro)
                <tr>
                    <th scope="row">{{$libro->id}}</th>
                    <td>{{$libro->autor}}</td>
                    <td>{{$libro->titulo}}</td>
                    <td>{{$libro->editorial}}</td>
                    <td>{{$libro->anio}}</td>
                    <td>{{$libro->clasificacion}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#libros_table').DataTable({
            "serverSide": true,
            "ajax": "{{url('api/libros')}}",
            "columns": [{
                    data: 'id'
                },
                {
                    data: 'autor'
                },
                {
                    data: 'titulo'
                },
                {
                    data: 'editorial'
                },
                {
                    data: 'anio'
                },
                {
                    data: 'clasificacion'
                }
            ],
            "language": {
                "info": "_TOTAL_ Usuarios",
                "search": "Buscar",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior",
                    "First": "Primero",
                    "Last": "Último",
                },
                "lengthMenu": 'Mostrar <select>' +
                    '<option value="10">10</option>' +
                    '<option value="30">30</option>' +
                    '<option value="50">50</option>' +
                    '<option value="100">100</option>' +
                    '<option value="-1">Todos</option>' +
                    '</select> resgistros',
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "emptyTable": "Ningún dato disponible en esta tabla",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            }
        });
    });
</script>
@endsection