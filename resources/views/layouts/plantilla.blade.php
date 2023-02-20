<!-- Mediante blade se pueden hacer plantilas para usar en todas las paginas que comparten 
cosas en común y hacer cambios de manera dinamica -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Con el método yield y su argumento (var) se hace una parte dinamica -->
    <title>@yield('title')</title>
    
</head>
<body>
    @yield('content')
</body>
</html>