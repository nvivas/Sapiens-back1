<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use Illuminate\Http\Client\Request;

class JuegoController extends Controller
{
    public function index()
    {
        return Juego::all();
    }

    public function getGamesId(Request $request)
    {
        if ($request->has('id')) {
            $id = $request->input('id');
            $juego = Juego::where('id', $id)->first();
            return response()->json($juego);
        } else {
            return $this->getAllGames();
        }
    }
}
