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
        'medidas',
        'color',
        'cantidad',
        'imagen_id',
        'estatus'
    ];
}
