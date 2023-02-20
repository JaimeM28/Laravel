@extends('layouts.plantilla')

{{-- Con . se concatena --}}
@section('title', 'Cursos ' . $curso->name) 

@section('content') 
{{-- ?php echo ?> es igual a {{}} --}}
    <h1>bienvenido al curso de {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <p> <strong>Categoria  </strong> {{$curso->categoria}}</p>
    <p> {{$curso->descripcion}}</p>

@endsection  



