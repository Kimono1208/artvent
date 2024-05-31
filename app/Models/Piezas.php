<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piezas extends Model
{
    protected $table = 'piezas';
    public $timestamps = false;
    //protected $primaryKey = 'id_pieza';
    use HasFactory;
}
