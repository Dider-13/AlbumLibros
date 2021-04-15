<!--#D.Alvarez-->
<!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <div class="container mt-4">
	<h2 class="text-center ">Información más detallada del libro </h2>
	<br>
	<h1 class="text-center">"{{$libro->Titulo}}"</h1>
	<!--tarjeta o card -->
            <div class="col-xs-12 col-md-6 pb-3 pt-2 float-left">
                <div class="card shadow bg-white rounded p-1 text-center">
                    <div class="card-body text-left">
                        <tr>
                            <th>
                            <img class="rounded" src="{{asset('storage/imagenes/'.$libro->Portada)}}" width="200px" height="200px">
                            </th>
                            <th><h6><strong>Titulo de libro:</strong></h6>{{$libro->Titulo}}</th>
                            <th><h6><strong>Autor:</strong></h6>{{$libro->Autor}}</td>
                            <th><h6><strong>Breve descripción:</strong></h6>{{$libro->DescripcionCorta}}</th>
							<th><h6><strong>Descripción más detallada:</strong></h6>{{$libro->DescripcionLarga}}</th>
                            <th><h6><strong>ISBN:</strong></h6>{{$libro->barra}}</th>
                            <th><h6><strong>Editorial:</strong></h6>{{$libro->editorial}}</th>
                            <th><h6><strong>País donde se realizo la edición:</strong></h6>{{$libro->pais}}</th>
                            <th><h6><strong>Paginás del libro:</strong></h6>{{$libro->numeroPaginas}}</th>
							<th><h6><strong>Año de edición del libro:</strong></h6>{{$libro->año}}</th>

                            <hr>
                        </tr>
                    </div><!--card-body-->
                </div><!--card-->
            </div><!--col4-->
                

</div>
