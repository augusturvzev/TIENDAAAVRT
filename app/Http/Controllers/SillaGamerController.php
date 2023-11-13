<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SillaGamerController extends Controller
{
    //
    public function mostrarSillaGamer()
    {
        return view('silla-gamer'); // Asegúrate de que la vista tenga el nombre correcto
    }
}
