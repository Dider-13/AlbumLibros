@extends('adminlte::page')
<!--#D.Alvarez-->
@section('title', 'World of books')

@section('content_header')
    <h2>Editar libro</h2>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <!--<form action="/libro/" method="POST">-->
            <form action="/album/{{$libro->id}}" method="POST">
            @csrf<!--Para implimentar un submit y evitar que aparesca una espacio de vulneravilidad en nuestro sistema-->
            @method('PUT')   
                <div class="mb-3">
                    <label for ="" class="form-label">Titulo</label>
                    <input id="Titulo" name="Titulo" type="text" class="form-control"  value="{{$libro->Titulo}}" required >
                </div>
                <div class="mb-3">
                    <label for ="" class="form-label">Autor</label>
                    <input id="Autor" name="Autor" type="text" class="form-control" value="{{$libro->Autor}}" required>
                </div>
                <div class="mb-3">
                    <label for ="" class="form-label">Descripcion corta</label>
                    <textarea   type="text" class="form-control" id="DescripcionCorta" name="DescripcionCorta" rows="3" cols="40">{{$libro->DescripcionCorta}}"</textarea>
                </div>
                
                <!--info extra-->
                <div class="mb-3">
                    <label for ="" class="form-label">Descripcion Larga</label>
                    <textarea   type="text" class="form-control" id="DescripcionLarga" name="DescripcionLarga" rows="3" cols="40">{{$libro->DescripcionLarga}}</textarea>
                </div>
                <div class="mb-3">
                    <label for ="" class="form-label">ISBN</label>
                    <input type="text" id="barra" name="barra" class="form-control" value="{{$libro->barra}}" required>
                </div>
                <div class="mb-3">
                    <label for ="" class="form-label">Editorial</label>
                    <input type="text" id="editorial" name="editorial" class="form-control" value="{{$libro->editorial}}" required>
                    </div>
                <div class="mb-3">
                    <label for ="" class="form-label">Pais</label>
                    <input type="text" id="pais" name="pais" class="form-control"  value="{{$libro->pais}}"required>
                </div>
                <div class="mb-3">
                    <label for ="" class="form-label"> Número de páginas</label>
                    <input type="number" id="numeroPaginas" name="numeroPaginas" class="form-control" value="{{$libro->numeroPaginas}}" required>
                </div>
                <div class="mb-3">
                    <label for ="" class="form-label">Año de edición</label>
                    <input type="text" id="año" name="año" class="form-control" value="{{$libro->año}}" required>
                </div> 
                <!--Termina info extra-->
                <div class="mb-3">
                    <label for ="" class="form-label">Portada</label>
                    <input type="file" id="Portada" name="Portada" class="form-control" value="{{$libro->Portada}}" required></input>
                </div>
                <a href="/album" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop