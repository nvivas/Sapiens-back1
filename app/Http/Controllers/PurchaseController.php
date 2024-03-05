<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego; // Asegúrate de importar el modelo Game

class PurchaseController extends Controller
{
    public function addToCart($id)
    {
        try {
            $juego = Juego::findOrFail($id);
            return response()->json(['message' => 'Juego agregado al carrito'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al agregar el juego al carrito'], 500);
        }
    }
}
