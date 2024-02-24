<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Juego;
use App\Http\Controllers\Controller;

class ImagenController extends Controller
{
    public function store(Request $request)
    {
        $juego = new Juego();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
            $juego->image = file_get_contents(storage_path('app/public/images/' . $imageName));
            Storage::delete('public/images/' . $imageName);
        }

        $juego->name = $request->name;
        $juego->save();

        return response()->json($juego);
    }
}
