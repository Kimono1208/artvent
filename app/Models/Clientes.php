<?php
// app/Models/Clientes.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
    protected $fillable = [
        'nombre',
        'rfc',
        'phone',
        'direccion',
        'imagen_id',
        'email',
        'estatus',
        'adeudo'
    ];

    // Relación con la tabla 'imagenes'
    public function imagen()
    {
        return $this->belongsTo(Imagenes::class, 'imagen_id');
    }
}
