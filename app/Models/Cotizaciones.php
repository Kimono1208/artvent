<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizaciones extends Model
{
    use HasFactory;

    protected $fillable = [
        'ancho',
        'largo',
        'tipo',
        'cantidad_personas',
        'luces',
        'conexiones',
        'mesas',
        'sillas',
        'tarimas',
        'color',
        'cortinas',
        'decoracion_extra',
        'fecha_inicio',
        'fecha_final',
        'lugar',
        'notas_extras',
        'status',
    ];

    public function comments()
    {
        return $this->hasMany(Comments::class, 'cotizacion_id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
