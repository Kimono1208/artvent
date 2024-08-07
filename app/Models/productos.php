<?php

// app/Models/Producto.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function imagenes()
    {
        return $this->hasMany(Imagen::class);
    }
}
