<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nombre',
        'correo',
        'password',
        'telefono',
        'estatus'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
