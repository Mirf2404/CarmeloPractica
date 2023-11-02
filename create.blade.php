@extends('app.base')
@section('title','Argo Create Movie')
@section('content')
<h2>Crear Película</h2>

<form id="formulario" action="/movie" method="post">
    @csrf 
    <label for="title">Título (menos de 60 caracteres):</label>
    <input type="text" id="title" name="title" maxlength="60"><br><br>
    
    <label for="director">Director (menos de 110 caracteres):</label>
    <input type="text" id="director" name="director" maxlength="110"><br><br>
    
    <label for="year">Año (máximo 4 dígitos, solo números):</label>
    <input type="text" id="year" name="year" maxlength="4" pattern="[0-9]{1,4}" title="Ingresar solo números"><br><br>
    
    <label for="genre">Género (menos de 50 caracteres):</label>
    <input type="text" id="genre" name="genre" maxlength="50"><br><br>
    
    <a href="{{ url('movie/')}}" class="btn btn-info">Create movie</a>
</form>
@endSection