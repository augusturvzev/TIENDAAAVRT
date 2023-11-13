<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobiliarioOficinaController extends Controller
{
    //
    public function mostrarMobiliario()
    {
        return view('mobiliario-oficina'); // Asegúrate de tener una vista llamada 'mobiliario-oficina'
    }
}
