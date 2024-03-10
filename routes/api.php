<?php

use Illuminate\Support\Facades\Route;
use App\Models\Juego;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\PurchaseController;
use Illuminate\Support\Facades\Log;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
 */

Route::group(['middleware' => ['cors']], function () {
    //Rutas a las que se permitirá acceso
    Route::get('juegos/{id}', 'App\Http\Controllers\JuegoController@index');
});

Route::get('image/{id}', function ($id) {
    $juego = Juego::find($id);
    return response($juego->image, 200)
        ->header('Content-Type', $juego->mime);
});

Route::get('/juegos', [JuegoController::class, 'index']);
Route::get('/juegos/{id}', [JuegoController::class, 'obtenerJuego']);
Route::get('/juegos/{nombre}}', [JuegoController::class, 'obtenerJuegoPorNombre']);
