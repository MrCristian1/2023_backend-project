<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return"Home Page";
});

Route::get('productos', function () {
    return "LISTADO DE LOS PRODUCTOS";
});

Route::get('productos/{nombre}', function ($nombre) {
    return "el nombre del producto es $nombre";
});

Route::get('productos/create', function () {
    return "AQUI VA EL FORMULARIO DE LA CREACION DE PRODUCTOS";
});

Route::get('productos/{id}', function ($id) {
    return "el nombre del producto es $id";
});

Route::get('productos/{id}/{categoria}', function ($id,$categoria) {
    return "el nombre del producto es $id con la categoria $categoria";
});
