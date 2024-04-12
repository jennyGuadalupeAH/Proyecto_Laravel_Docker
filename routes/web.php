<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});
Route::get('/nuestra-tienda', function () {
    return view('nosotros');
});
Route::get('/tienda-laptos', function () {
    return view('venta');
});
Route::get('/contactanos', function () {
    return view('contacto');
});
