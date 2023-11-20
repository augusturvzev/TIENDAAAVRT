<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstantesLibrosController extends Controller
{
    //
    public function mostrarEstantesLibros()
    {
        return view('estantes-libros'); // Asegúrate de tener una vista llamada 'estantes-libros'
    }
}
