<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImpresorasController extends Controller
{
    //
    public function mostrarImpresoras()
    {
        return view('impresoras'); // Asegúrate de tener una vista llamada 'impresoras'
    }
}
