<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('subtitulo')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <h1>@yield('titulo')</h1>
       
        <nav>
            <!--idea es navegar por estas paginas-->
            <li><a href="/">Principal</a></li>
            <li><a href="/nuestra-tienda">Nosotros</a></li>
            <li><a href="/tienda-laptos">Venta Cosmeticos</a></li>
            <li><a href="/contactanos">Contáctanos</a></li>
        </nav>
        <h4>@yield('contenido')</h4>
    </body>
</html>
