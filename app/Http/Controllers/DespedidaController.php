<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DespedidaController extends Controller
{
    public function despedida()
    {
        $persona = [
            'nombre' => 'Juan',
            'edad' => 35,
            'profesion' => 'Tester de software'
        ];

        return view('despedida', compact('persona'));
    }
}
