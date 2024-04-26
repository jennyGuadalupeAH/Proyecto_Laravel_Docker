@extends('layouts/app')

{{--soy un comentario--}}
@section('subtitulo')
    nosotros | laravel
@endsection
@section('titulo')
    BIENVENIDO A NOSOTROS
@endsection
@section('contenido')
{{--no se validan con llaves--}}
{{--DIRECTIVA IF--}}
@if($edad <= 12)
    <h3>Aun no puedes tomar cerveza</h3>
    <h3>Eres un niño en desarrollo</h3>
    {{--seguir validando--}}
    @elseif($edad <=18)
    <h3>Solo poquito que no te vea tu mamá</h3>
    @else 
    <h3>Atragantate</h3>
@endif
{{-- 
   {{$empresa}} Somos una empresa lider en venta de cosmeticos y perfumeria!!, encunetrasnos en {{$direccion}}
--}}
@endsection