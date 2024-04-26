<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('subtitulo')</title>
         @vite('resources/css/app.css')
                <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <h1  class="text-3xl font-bold underline">@yield('titulo')</h1>
       
       
        <nav>
            <!--idea es navegar por estas paginas-->
            <li><a href="{{route('home')}}">Principal</a></li>
            <!--INTERPOLACION-->
            <li><a href="{{route('nosotros')}}">Nosotros</a></li> 
            <li><a href="{{route('tienda')}}">Venta Cosmeticos</a></li>
            <li><a href="{{route('contacto')}}">Contáctanos</a></li>
        </nav>
        <p>@yield('contenido')</p>
    </body>
</html>
