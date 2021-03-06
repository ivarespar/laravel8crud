@extends('layouts.plantillabase');      <!-- Uso plantillabase como contenedor -->

@section('css')

<link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@endsection

@section('contenido')                   <!-- inserto todo lo siguiente dentro de la sección CONTENIDO en plantillabase -->
    <a href="articulos/create" class="btn btn-primary mb-4">CREAR</a>
    <table id="articulos" class="table table-striped shadow-lg" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Código</th>
                <th scope="col">Descripción</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
            <tr>
                <td>{{ $articulo->id }}</td>
                <td>{{ $articulo->codigo }}</td>
                <td>{{ $articulo->descripcion }}</td>
                <td>{{ $articulo->cantidad }}</td>
                <td>{{ $articulo->precio }}</td> 
                <td>
                    <form action="{{ route('articulos.destroy',$articulo->id) }}" method="POST">
                        <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>              
            </tr>
            @endforeach
        </tbody>
    </table>
    @section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#articulos').DataTable({
                "lengthMenu": [[5,10,50,-1],[5,10,50,"Todos"]],
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "No se encontaron registros.",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros",
                    "infoFiltered": "(filtrado de _MAX_ registros)",
                    "search":"Buscar",
                    "paginate":{
                        "next":"Siguiente",
                        "previous":"Anterior"
                    }
                }               
            });
        } );
    </script>
    @endsection

@endsection