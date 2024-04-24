@extends('layouts/app')

{{--soy un comentario--}}
@section('subtitulo')
    nosotros | laravel
@endsection
@section('titulo')
    BIENVENIDO A NOSOTROS
@endsection
@section('contenido')
     {{$empresa}} Somos una empresa lider en venta de cosmeticos y perfumeria!!, encunetrasnos en {{$direccion}}
@endsection