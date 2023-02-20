@extends('layouts.plantilla')

@section('title', 'Cursos') 

@section('content') 
    <h1> Bienvenido a la pagina de cursos </h1>
    {{-- Con el metoto route se accede a un enlace mediante su nombre y no url  --}}
    <a href="{{route('cursos.create')}}"> Crear cursos </a>
    <ul>
        @foreach ($cursos as $curso)
        <li>
            {{-- Para pasar una variable mediante el método route, se hace mediante el segundo parametro  --}}
            <a href="{{route('cursos.show',$curso->id)}}"> {{$curso->name}}</a>
        </li>
            
        @endforeach
    </ul>
    {{-- para realizar paginación automatica  --}}
    {{$cursos->links()}}
@endsection  