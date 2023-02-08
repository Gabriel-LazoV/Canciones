<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('canciones', function() {
    $canciones = [];
    $canciones[]=['nombre'=> 'Hola','artista' => 'Yo'];
    $canciones[]=['nombre'=> 'Adios','artista' => 'Alguien'];
    return view('canciones')
        ->with(['canciones' => $canciones]);
});
