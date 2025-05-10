<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function saludo()
    {
        $persona = [
            'nombre' => 'Sebas',
            'edad' => 29,
            'profesion' => 'Tester de software'
        ];

        return view('saludo', compact('persona'));
    }
}
