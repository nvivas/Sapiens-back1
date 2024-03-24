<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

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

    public function obtenerJuegoNombre($nombre) {
        $juego = Juego::find($nombre);
        if ($juego) {
            return response()->json($juego);
        } else {
            return response()->json(['error' => 'Juego no encontrado'], Response::HTTP_NOT_FOUND);
        }
    }


    // Este método es para añadir juegos. De momento no funciona en el front
    // public function store(Request $request)
    // {
    //     $juego = new Juego();
    //     $juego->nombre = $request->input('nombre');
    //     $juego->descripcion = $request->input('descripcion');
    //     $juego->precio = $request->input('precio');
    //     $juego->categoria = $request->input('categoria');
    //     $juego->stock = $request->input('stock');
    //     if ($request->hasFile('imagen')) {
    //         $imagenNombre = $request->file('imagen')->getClientOriginalName();
    //         $request->file('imagen')->storeAs('public/imagenes', $imagenNombre);
    //         $juego->imagen = $imagenNombre;
    //     }
    //     $juego->save();

    //     return response()->json(['message' => 'Juego creado exitosamente'], 201);
    // }

    public function actualizarStock(Request $request) {
        $juegoId = $request->input('juego_id');
        $cantidadComprada = $request->input('cantidad_comprada');

        $juego = Juego::find($juegoId);
        if ($juego) {
            $juego->stock -= $cantidadComprada;
            $juego->save();
            return response()->json(['message' => 'Stock actualizado correctamente'], 200);
        } else {
            return response()->json(['error' => 'Juego no encontrado'], 404);
        }
    }
}
