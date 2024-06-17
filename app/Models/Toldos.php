<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toldos extends Model
{
    use HasFactory;

    protected $table = 'toldos';

    protected $fillable = [
        'nombre',
        'ancho',
        'largo',
        'piezas',
        'lona_m2',
        'luces',
        'conexiones',
        'mesas',
        'sillas',
        'tarimas',
        'color',
        'cortinas',
        'decoracion_extra',
        'status',
    ];
}
