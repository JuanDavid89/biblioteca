<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibroSeeder extends Seeder
{
    public function run()
    {
        // Crear libros de prueba
        Libro::create([
            'titulo' => 'Cien años de soledad',
            'autor' => 'Gabriel García Márquez',
            'anio' => 1967
        ]);

        Libro::create([
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'anio' => 1949
        ]);

        Libro::create([
            'titulo' => 'El Principito',
            'autor' => 'Antoine de Saint-Exupéry',
            'anio' => 1943
        ]);
    }
}
