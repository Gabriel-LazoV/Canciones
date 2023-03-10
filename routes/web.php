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
Route::get('canciones/id?', function($id = null) {
    $canciones = [];

    $canciones[]=['nombre'=> 'Hola','artista' => 'Yo'];
    $canciones[]=['nombre'=> 'Adios','artista' => 'Alguien'];

    if(!is_null($id))
    {
        $cancion=$canciones[$id];
    }else{
        $cancion = null;
    }

    return view('canciones', compact('canciones', 'cancion'));
        // ->with(['canciones' => $canciones]);
});

// Route::get('canciones/{id_cancion}', function($id) {
//     $canciones = [];
//     $canciones[]=['nombre'=> 'Hola','artista' => 'Yo'];
//     $canciones[]=['nombre'=> 'Adios','artista' => 'Alguien'];

//     $cancion = $canciones[$id];
//     return view('detalleCancion', compact('cancion'));
//         // ->with(['canciones' => $canciones]);
// });
