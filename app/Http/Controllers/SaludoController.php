<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function saludo()
    {
        $persona = [
            'nombre' => 'Juan',
            'edad' => 35,
            'profesion' => 'Tester de software'
        ];

        return view('saludo', compact('persona'));
    }
}
