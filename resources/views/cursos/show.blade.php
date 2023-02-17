@extends('layouts.plantilla')

{{-- Con . se concatena --}}
@section('title', 'Cursos ' . $curso) 

@section('content') 
{{-- ?php echo ?> es igual a {{}} --}}
    <h1>bienvenido al curso de {{$curso}}</h1>
@endsection  



