<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    // Permite la asignación masiva de estos campos
    protected $fillable = ['titulo', 'autor', 'anio'];
}
