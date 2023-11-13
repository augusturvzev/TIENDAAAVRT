<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EscritorioOdinController extends Controller
{
    //
    public function mostrarEscritorioOdin()
    {
        return view('escritorio-odin'); // Asegúrate de tener una vista llamada 'escritorio-odin'
    }
}
