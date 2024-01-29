<?php

namespace App\Http\Controllers;

use App\Models\Juego;

class JuegoController extends Controller
{
    public function index()
    {
        return Juego::all();
    }
}
