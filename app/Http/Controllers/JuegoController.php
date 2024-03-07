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

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'nombre' => 'required|string|max:255',
    //         'descripcion' => 'required|string',
    //         'precio' => 'required|numeric',
    //         'categoria' => 'required|string|max:255',
    //         'stock' => 'required|integer'
    //     ]);

    //     if ($request->hasFile('imagen_ruta')) {
    //         $imagePath = $request->file('imagen_ruta')->store('imagen/juego');
    //         $validatedData['imagen_ruta'] = $imagePath;
    //     }

    //     $juego = Juego::create($validatedData);

    //     return response()->json($juego, 201);
    // }

    public function store(Request $request)
    {
        $juego = new Juego();
        $juego->nombre = $request->input('nombre');
        $juego->descripcion = $request->input('descripcion');
        $juego->precio = $request->input('precio');
        $juego->categoria = $request->input('categoria');
        $juego->stock = $request->input('stock');
        // Guarda la imagen en tu sistema de archivos o en la base de datos, según tu preferencia
        if ($request->hasFile('imagen')) {
            $imagenNombre = $request->file('imagen')->getClientOriginalName();
            $request->file('imagen')->storeAs('public/imagenes', $imagenNombre);
            $juego->imagen = $imagenNombre;
        }
        $juego->save();

        return response()->json(['message' => 'Juego creado exitosamente'], 201);
    }
}
