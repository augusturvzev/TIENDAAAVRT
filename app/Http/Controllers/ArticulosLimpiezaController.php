<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticulosLimpiezaController extends Controller
{
    public function mostrarArticulos()
    {
        return view('articulos-limpieza'); // Asegúrate de tener una vista llamada 'articulos-limpieza'
    }
}
