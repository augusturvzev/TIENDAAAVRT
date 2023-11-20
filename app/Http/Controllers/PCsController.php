<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PCsController extends Controller
{
    //
    public function mostrarPCs()
    {
        return view('pcs'); // Asegúrate de tener una vista llamada 'pcs'
    }
}
