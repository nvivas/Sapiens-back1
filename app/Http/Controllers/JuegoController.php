<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use Illuminate\Http\Response;

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
}
