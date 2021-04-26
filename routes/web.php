<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ejemplo_controller;
use App\Http\Controllers\Ejemplo3_controller;

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
//....................................codigo inicial
Route::get('/', function () {
    return view('welcome');
});

// .................................enlace ejemplo_controller
Route::get('/home', [Ejemplo_controller::class, 'home']);

// .................................enlace ejemplo_controller
Route::get('/index', [Ejemplo3_controller::class, 'index']);

//..................................... empezamos a probar
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return "estas en el home";
// });
// Route::get('/quiensoy', function () {
//     return "estas en quien somos";
// });

// .........................................pasar por url parametros
// Route::get('/post/{id}', function ($id) {
//     return "Este es el post nº " . $id;
// });

// .........................................pasar por url varios parametros
// Route::get('/post/{id}/{nombre}', function ($id, $nombre) {
//     return "Este es el post nº " . $id . " creado por: " . $nombre;
// });

// ...................................pasar por url con expresiones regulares
// Route::get('/post/{id}/{nombre}', function ($id, $nombre) {
//     return "Este es el post nº " . $id . " creado por: " . $nombre;
//
// })->where('nombre', '[aA-zZ]+');
