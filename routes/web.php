<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
})->name('home');
Route::get('/acercade', function () {
    $empresa = "COSMETICOS ALMAGABY";
    $dir = "16 de Septimebre, Col. Centro Acambay Méx";  //enviar datos de forma de Array
    //manipular datos
    //tambien podemos obtener en la API o en la base de datos 
    $datos = [
        "empresa" => $empresa,
        "direccion" => $dir
    ];

    // OBTENER ES POR MEDIO DE SU CLAVE en la web
    return view('nosotros', $datos);
})->name('nosotros'); //
Route::get('/tienda-laptos', function () {
    return view('venta');
})->name('tienda');
Route::get('/contactanos', function () {
    //return view('contacto);
    //FORMA 1 DE REDIRECCIONAR
   // return redirect('/form-contacto');
    //FORMA 2 DE REDIRECCIONAMIENTO
   //return redirect() ->route('formulario');
   //FORMA 3 DE REDIRECCIONAMIENTO
   return to_route('formulario');

})->name('contacto');

Route::get('/form-contacto', function () {
    return("Bienvenido a Formularios de Contacto");
//})->name('contacto');
})->name('formulario');