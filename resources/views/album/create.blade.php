@extends('adminlte::page')
<!--#D.Alvarez-->
@section('title', 'World of books')

@section('content_header')
    <h2>Nuevo libro</h2>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <!--<form action="/libro/" method="POST">-->
            <form action="/album" method="POST" enctype="multipart/form-data">
            @csrf<!--Para implimentar un submit y evitar que aparesca una espacio de vulneravilidad en nuestro sistema-->
                
                <div class="mb-3">
                    <label for ="" class="form-label">Titulo</label>
                    <input id="Titulo" name="Titulo" type="text" class="form-control" tabindex="1">
                </div>
                <div class="mb-3">
                    <label for ="" class="form-label">Autor</label>
                    <input id="Autor" name="Autor" type="text" class="form-control" tabindex="2">
                </div>
                <div class="mb-3">
                    <label for ="" class="form-label">Descripcion corta</label>
                    <textarea  type="text"  class="form-control" id="DescripcionCorta" name="DescripcionCorta" rows="3" cols="40" placeholder="Escribe aquí la decripción" tabindex="3"></textarea>
                </div>
                
                <!--info extra-->
                <div class="mb-3">
                    <label for ="" class="form-label">Descripcion Larga</label>
                    <textarea  type="text"  class="form-control" id="DescripcionLarga" name="DescripcionLarga" rows="3" cols="40" placeholder="Escribe aquí la decripción" tabindex="4"></textarea>
                </div>
                <div class="mb-3">
                    <label for ="" class="form-label">ISBN</label>
                    <input type="text" id="barra" name="barra" class="form-control" required tabindex="5">
                </div>
                <div class="mb-3">
                    <label for ="" class="form-label">Editorial</label>
                    <input type="text" id="editorial" name="editorial" class="form-control" required tabindex="6">
                    </div>
                <div class="mb-3">
                    <label for ="" class="form-label">Pais</label>
                    <input type="text" id="pais" name="pais" class="form-control" required tabindex="7">
                </div>
                <div class="mb-3">
                    <label for ="" class="form-label"> Número de páginas</label>
                    <input type="number" id="numeroPaginas" name="numeroPaginas" class="form-control" required tabindex="8">
                </div>
                <div class="mb-3">
                    <label for ="" class="form-label">Año de edición</label>
                    <input type="text" id="año" name="año" class="form-control" required tabindex="9">
                </div> 
                <!--Termina info extra-->
                <div class="mb-3">
                    <label for ="" class="form-label">Portada</label>
                    <input type="file" id="Portada" name="Portada" class="form-control " required tabindex="10">
                </div>
                <a href="/album" class="btn btn-secondary" tabindex="11">Cancelar</a>
                <button type="submit" class="btn btn-primary" tabindex="10">Guardar</button>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop