@extends('layouts.plantilla')

@section('title', 'Cursos create') 

@section('content') 
    <h1> Crear cursos </h1>
    <form action=""> 
        <label >
            Nombre: <br>

            <input type="text" name="name"> 
        </label>
        <br>

        <label>
            Descripcion:<br>

            <textarea name="descripcion" rows="5">
            </textarea>
        </label><br>

        <label>
            Categoria: <br>

            <input type="text" name="categotia">
        </label>
        
    </form>
@endsection  

