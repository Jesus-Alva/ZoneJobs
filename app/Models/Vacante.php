<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'salario_id',
        'categoria_id',
        'empresa',
        'fecha_limite',
        'descripcion',
        'imagen',
        'user_id'
    ];
}
