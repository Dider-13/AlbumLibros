@extends('adminlte::page')
<!--#D.Alvarez-->
@section('title', 'World of books')

@section('content_header')
    <h1>Inventario de libros</h1>
@stop

@section('content')
    <!--Creacion de el boton crear-->
    <a href="{{route('makePDF')}}" class="btn btn-success mb-3">Imprimir PDF</a>

    <a href="album/create" class="btn btn-primary mb-3">Nuevo libro</a>
    <!--creacion de la tabla donde mostrare los datos de los libros para mi crud-->
    <table id="album" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white"><!--Creacion de el encabezado de la tabla donde iran los titulos de cada columna-->
            <tr><!--Creacion de las columnas de la tabla-->
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Descripcion Corta</th>
                <th scope="col">Portada</th>
                <th scope="col">Operaciones</th>
            </tr>
        </thead>
        <tbody><!--Creacion de el cuerpo donde estaran las filas de los datos de la base de datos-->
            @foreach ($libros as $libro)
            <!--recibimos la info almacenada en libroAc y lo vamos ocupando en libro-->
                <!--Ponemos uno a nuo la info que se recibe en la varible y se va piniendo en orden en las siguientes filas-->
                <tr>
                    <td>{{$libro->id }}</td><!--dentro de la llave se pondra el dato que le corresponde de acuerdo al orden-->
                    <td>{{$libro->Titulo }}</td> 
                    <td>{{$libro->Autor}}</td> 
                    <td>{{$libro->DescripcionCorta}}</td>
                    <td><img class="rounded" src="{{asset('storage/imagenes/'.$libro->Portada)}}" width="200px" height="200px"></td>
                    <td>
                        <!--con el siguiente formulario se indica que cuando seleccionemos el boton eliminar
                        automaticamente se eliminara con el metodo DELETE y si selecionamos la opcion 
                        editar nos redirecionara a la plantilla edit-->
                        <form action="{{route('album.destroy',$libro->id)}}" method="POST">
                        <a href="/album/{{$libro->id}}/edit" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <!--Mando a llamar los estilos de la seccion de mi platilla base para usarlos en mi index-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <!--Links para darle funcionalidad a nuestro proyecto con javascript-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <!--script para inicializar nuestro datatable-->
    <script>
        $(document).ready(function() {
            $('#album').DataTable();
        } );
    </script>
@stop