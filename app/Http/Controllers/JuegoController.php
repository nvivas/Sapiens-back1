<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class JuegoController extends Controller
{
    public function index()
    {
        return Juego::all();
    }

    public function obtenerJuego($id) {
        $juego = Juego::find($id);
        if ($juego) {
            return response()->json($juego);
        } else {
            return response()->json(['error' => 'Juego no encontrado'], Response::HTTP_NOT_FOUND);
        }
    }

    public function obtenerJuegoPorNombre($nombre) {
        $juego = Juego::where('nombre', $nombre)->first();

        if ($juego) {
            return response()->json($juego);
        } else {
            // Agrega un mensaje de depuración si no se encuentra el juego
            Log::debug('Juego no encontrado para el nombre: ' . $nombre);
            return response()->json(['error' => 'Juego no encontrado'], 404);
        }
    }
}
