<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DespedidaController extends Controller
{
    public function despedida()
    {
        $persona = [
            'nombre' => 'Sebas',
            'edad' => 29,
            'profesion' => 'Tester de software'
        ];

        return view('despedida', compact('persona'));
    }
}
