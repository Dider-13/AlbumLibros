<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS-->
    <title>World of books</title>
</head>
<body>
    <div class="row"><!--contenedor para las cards-->
        <table id="album" class="table table-striped table-bordered shadow-lg mt-4">
            <thead class="bg-primary text-white"><!--Creacion de el encabezado de la tabla donde iran los titulos de cada columna-->
                <tr><!--Creacion de las columnas de la tabla-->
                    <th scope="col">Titulo</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Editorial</th>
                    <th scope="col">Descripcion Larga</th>
                    <th scope="col">Portada</th>
                </tr>
            </thead>
            <tbody><!--Creacion de el cuerpo donde estaran las filas de los datos de la base de datos-->
                @foreach ($libros as $libro)
                <!--recibimos la info almacenada en libroAc y lo vamos ocupando en libro-->
                    <!--Ponemos uno a nuo la info que se recibe en la varible y se va piniendo en orden en las siguientes filas-->
                    <tr>
                        <td>{{$libro->Titulo }}</td> 
                        <td>{{$libro->Autor}}</td>
                        <td>{{$libro->editorial}}</td>  
                        <td>{{$libro->DescripcionLarga}}</td>
                        <td><img class="rounded" src="{{asset('storage/imagenes/'.$libro->Portada)}}" width="200px" height="200px"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>