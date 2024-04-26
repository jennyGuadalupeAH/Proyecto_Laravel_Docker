@extends('layouts/app')

{{--soy un comentario--}}
@section('subtitulo')
    nosotros | laravel
@endsection
@section('titulo')
    BIENVENIDO A NOSOTROS
@endsection
{{--DIRECTIVA IF--}}
@section('contenido')
{{--no se validan con llaves--}}

@if($edad <= 12)
    <h3>Aun no puedes tomar cerveza</h3>
    <h3>Eres un niño en desarrollo</h3>
    {{--seguir validando--}}
    @elseif($edad <=18)
    <h3>Solo poquito que no te vea tu mamá</h3>
    @else 
    <h3>Atragantate</h3>
@endif
@endsection

{{--DIRECTIVA SWITCH--}}
@section('switch')
@switch($noEstacion)
    @case(1)
    <h3>PRIMAVERA</h3>
        @break
    @case(2)
    <h3>VERANO</h3>
        @break
    @case(3)
    <h3>OTOÑO</h3>
        @break
    @case(4)
    <h3>INVIERNO</h3>
        @break
    @default
@endswitch
@endsection

{{--DIRECTIVA FOR--}}
@section('for')
    @for ($i =1; $i <= 10; $i++)
    <li>{{$tablaMul}} X {{$i}} = {{$i*$tablaMul}}</li>
    @endfor 
    @endsection

{{--DIRECTIVA WHILE--}}
@section('while')
    {{$i = 1}}
    @while($i<=10)
     <li>{{$tablaMul}} X {{$i}} = {{$i*$tablaMul}}</li>
     {{--debe estar interpolado--}}
     {{$i++}}
    @endwhile
@endsection

    {{--DIRECTIVA PHP--}}
    @section('php')
    {{-- {{$i = 1}} --}}
   {{--No seria lo correcto--}}
   {{--<php $i = 1?>--}}
    @php
    $i =1
    @endphp
    @while($i<=10)
     <li>{{$tablaMul}} X {{$i}} = {{$i*$tablaMul}}</li>
     {{--debe estar interpolado--}}
    @php $i++ @endphp
    @endwhile
    @endsection

    {{--DIRECTIVA FOREACH--}}
    @section('foreach')
    {{--No necesita conteo, no es necesario decirle donde inicia y termina, se puede manipular--}}
    @forelse ($equipos as $eq)
        <li>{{$eq}}</li>
        @empty
           <li>NO HAY EQUIPOS QUE SEAN SUPERIOR A CHIVAS DE CORAZON</li> 
        
    @endforelse
@endsection

{{--USANDO DIRECTIVAS EN FACTOIAL--}}
    @section('factorial')
    {{$i = 0}}
    {{$factorial = 1}}
    @for ($i = 1 ; $i <=$tablaMul; $i++)
    <li>{{$factorial *= $i}}</li>
@endfor


{{-- 
   {{$empresa}} Somos una empresa lider en venta de cosmeticos y perfumeria!!, encunetrasnos en {{$direccion}}
--}}
@endsection