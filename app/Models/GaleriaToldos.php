<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriaToldos extends Model
{
    use HasFactory;

    protected $table = 'galeria_toldos';

protected $fillable = [
    'producto_id', 'nombre_toldo', 'imagen', 'descripcion', 'precio', 'categoria'
];

public function producto()
{
    return $this->belongsTo(Producto::class);
}
}
