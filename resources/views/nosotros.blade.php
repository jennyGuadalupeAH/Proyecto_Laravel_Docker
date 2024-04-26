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
{{-- 
   {{$empresa}} Somos una empresa lider en venta de cosmeticos y perfumeria!!, encunetrasnos en {{$direccion}}
--}}
@endsection