<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticulosEscritorioController extends Controller
{
    //
    public function mostrarArticulos()
    {
        return view('articulos-escritorio'); // Asegúrate de tener una vista llamada 'articulos-escritorio'
    }
}
