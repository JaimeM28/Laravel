<!-- Para usar una plantilla, se usa el metodo extends (concepto herencia).
El método extends busca en views, entondes en su argumento se indica la ruta de 
la plantilla -->
@extends('layouts.plantilla')
<!-- Para usar una var dinamica, se usa el método extends donde el primer argumento 
es la var dinamica de la plantilla y el segundo el contenido  -->
@section('title', 'Home') 

<!-- Para escribir más que una cadena, se usa section y endsection, entre ese espacio
se pone todo el contenido. Unicamente recibe un argumento (nombre var dinamica) -->
@section('content') 
    <h1> Holaaaa</h1>
@endsection  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
</body>
</html>